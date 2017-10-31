<?php
  function call_home_queries ($context) {
    $context['hide_nav_banner'] = true;
    $context['category_headline'] = array();

    $category_post_ids = array();
    $headline_ids = array();
    // category headlines
    foreach($context['options']['category_headlines'] as $category ) {
      $q = array(
        'cat' => $category,
        'post_type' => 'post',
        'post_per_page' => 1,
        'post_status' => 'publish'
      );

      $post = new Timber\PostQuery($q);
      if (count($post) > 0) {
        $context['category_headline'][]['post'] = $post[0];
        // Do not display the
        $category_post_ids[] = $post[0]->ID;
      }
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
    foreach($context['headlines'] as $post) {
      $headline_ids[] = $post->ID;
    }

    // the rest without the headlines and category posts
    $q = array(
      'posts_per_page' => 10,
      'post_status' => 'publish',
      'post_type' => 'post',
      'post__not_in' =>  array_merge($category_post_ids, $headline_ids)
    );
    $context['posts'] = new Timber\PostQuery($q);
    return $context;
  }
