<?php
  function call_home_queries ($context) {
    $context['hide_nav_banner'] = true;
    $context['category_headline'] = array();

    $category_post_ids = array();
    $headline_ids = array();

    $show_headline_story = $context['options']['show_headline_story'];
    if ($show_headline_story['enable']) {
      $post = $show_headline_story['story'];
      $context['story_headline']['permalink'] = get_permalink($post->ID);
      $context['story_headline']['title'] = $post->post_title;
      $context['story_headline']['cover'] = get_the_post_thumbnail_url($post->ID, 'large');
      $context['story_headline']['excerpt'] = get_the_excerpt($post->ID);
    }

    $q = array(
      'order' => 'DESC',
      'order_by' => 'date',
      'post_per_page' => 1,
      'post_status' => 'publish',
      'post_type' => 'post'
    );

    $post = new Timber\PostQuery($q);
    if (count($post) > 0) {
      $category_post_ids[] = $post[0]->ID;
      // get the most headline
      $context['headline'] = $post[0];

      $tags = get_the_tags($post[0]->ID);
      foreach ($tags as $tag) {
        if ($tag->slug === 'videos' || $tag->slug === 'podcasts') {
          $context['headline']->is_video = true;
        }
      }
    }

    /*
      Call to Action Section
    */
    $cta = $context['options']['call_to_action_text'];
    if ($cta['enable'] and is_object($cta['post'])) {
      $post = $cta['post'];
      $cat = array_map(function ($cat) {
        return array(
          'name' => $cat->name,
          'permalink' => get_category_link($cat->term_id)
        );
      }, get_the_category($post->ID));

      $context['options']['call_to_action_text']['post']->categories = $cat;
      $context['options']['call_to_action_text']['post']->permalink = get_permalink($post->ID);
      $category_post_ids[] = $post->ID;
    }

    if (isset($context['options']['post_loop_header'])) {
      $post_loop_header = $context['options']['post_loop_header'];
      if($post_loop_header['enable'] and is_object($cta['post'])) {
        $post = $post_loop_header['post'];
        $cat = array_map(function ($cat) {
          return array(
            'name' => $cat->name,
            'permalink' => get_category_link($cat->term_id)
          );
        }, get_the_category($post->ID));

        $context['options']['post_loop_header']['post']->categories = $cat;
        $context['options']['post_loop_header']['post']->permalink = get_permalink($post->ID);
        $context['options']['post_loop_header']['post']->thumbnail = get_the_post_thumbnail_url($post->ID, 'large');
        $category_post_ids[] = $post->ID;
      }
    }

    // category headlines
    $x = 0;
    foreach($context['options']['category_headlines'] as $category ) {
      $q = array(
        'cat' => $category,
        'post_type' => 'post',
        'post_per_page' => 1,
        'post_status' => 'publish',
        'post__not_in' => $category_post_ids
      );

      $post = new Timber\PostQuery($q);
      $tags = get_the_tags($post[0]->ID);

      foreach ($tags as $index => $tag) {
        if ($tag->slug === 'videos' || $tag->slug === 'podcasts') {
          $context['category_headline'][$x]['is_video'] = true;
        }
      }

      if (count($post) > 0) {
        $context['category_headline'][$x]['post'] = $post[0];
        // Do not display the headline id
        $category_post_ids[] = $post[0]->ID;
      }
      $x++;
    }

    // first three posts
    $q = array(
      'posts_per_page' => 3,
      'post_status' => 'publish',
      'post_type' => 'post',
      // do not get the posts in the category headline
      // to prevent duplication
      'post__not_in' => $category_post_ids
    );
    $context['headlines'] = new Timber\PostQuery($q);
    foreach($context['headlines'] as $index => $post) {
      $headline_ids[] = $post->ID;

      $tags = get_the_tags($post->ID);
      foreach ($tags as $tag) {
        if ($tag->slug === 'videos' || $tag->slug === 'podcasts') {
          $context['headlines'][$index]->is_video = true;
        }
      }
    }

    // the rest without the headlines and category posts
    $q = array(
      'posts_per_page' => 15,
      'post_status' => 'publish',
      'post_type' => 'post',
      'post__not_in' =>  array_merge($category_post_ids, $headline_ids)
    );
    $context['posts'] = new Timber\PostQuery($q);
    foreach($context['posts'] as $index => $post) {
      $context['posts'][$index] = $post;
      $tags = get_the_tags($post->ID);

      foreach ($tags as $tag) {
        if ($tag->slug === 'videos' || $tag->slug === 'podcasts') {
          $context['posts'][$index]->is_video = true;
        }
      }

    }

    $cta = $context['options']['call_to_action_text'];
    if ($cta['enable'] and is_object($cta['post'])) {
      $post = $cta['post'];
      $cat = array_map(function ($cat) {
        return array(
          'name' => $cat->name,
          'permalink' => get_category_link($cat->term_id)
        );
      }, get_the_category($post->ID));

      $context['options']['call_to_action_text']['post']->categories = $cat;
      $context['options']['call_to_action_text']['post']->permalink = get_permalink($post->ID);
    }

    return $context;
  }
