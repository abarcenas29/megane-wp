<?php
  function call_home_queries ($context) {
    $context['hide_nav_banner'] = true;
    $context['category_headline'] = array();

    $category_post_ids = array();
    $headline_ids = array();

    $options_stories_enable = $context['options']['stories_header']['enable'];
    if (!$options_stories_enable) {
      $q = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_per_page' => 1,
        'order' => 'DESC',
        'order_by' => 'date'
      );
      $post = new Timber\PostQuery($q);
      if (count($post) > 0) {
        $category_post_ids[] = $post[0]->ID;
        // get the most headline
        $context['headline'] = $post[0];

        $tags = get_the_tags($post[0]->ID);
        foreach ($tags as $tag) {
          if ($tag->slug === 'videos') {
            $context['headline']->is_video = true;
          }
        }
      }
    } else {
      $story_ID = $context['options']['stories_header']['story']->ID;
      $stories = get_field('stories', $story_ID);

      foreach($stories as $key => $story) {
        $stories[$key]->link = get_permalink($story->ID);
        $stories[$key]->thumbnail = get_the_post_thumbnail_url($story->ID,'large');
      }

      $context['headline_stories'] = $stories;
      $context['headline_link'] = get_permalink($story_ID);
      $context['stories_thumbnail'] = get_the_post_thumbnail_url($story_ID,'large');
    }

    $options_stories_loop_enable = $context['options']['stories_loop']['enable'];
    if ($options_stories_loop_enable) {
      $story = $context['options']['stories_loop']['story'];
      $context['options']['stories_loop']['thumbnail'] = get_the_post_thumbnail_url($story->ID, 'large');

      $stories = get_field('stories', $story->ID);
      foreach($stories as $key => $item) {
        $item->permalink = get_permalink($item->ID);
        $item->thumbnail = get_the_post_thumbnail_url($item->ID, 'large');
        $context['stories_loop']['stories'][$key] = $item;
      }
      $context['stories_loop']['permalink'] = get_permalink($story->ID);
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
        if ($tag->slug === 'videos') {
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
        if ($tag->slug === 'videos') {
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
        if ($tag->slug === 'videos') {
          $context['posts'][$index]->is_video = true;
        }
      }

    }
    return $context;
  }
