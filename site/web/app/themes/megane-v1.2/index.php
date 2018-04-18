<?php
  $context = Load_Timber_Context();
  $page = 'index';
  if (is_home()) {
    $page = 'index-home';
  } else {
    $page = 'index-category';
  }
  $context['page'] = $page;

  $templates = array( 'index.twig' );

  if ( is_home() ) {
    $context = call_home_queries($context);
    array_unshift( $templates, 'home.twig' );
  } else {
    $posts = Timber::get_posts();

    foreach ($posts as $index => $post) {
      $tags = get_the_tags($post->ID);

      if (is_array($tags)) {
        foreach ($tags as $tag) {
          if ($tag->slug == 'videos') {
            $posts[$index]->is_video = true;
          }
        }
      }
    }

    if (is_category()) {
      $context['title'] = single_cat_title();
    } else if (is_archive()) {
      $context['title'] = post_type_archive_title('', false);
    }
    
    $context['posts'] = $posts;
  }
  Timber::render( $templates, $context );
