<?php
/**
 * Template Name: Travel Shell
 * Template Post Type: post
 * Description: Post Type for Travel
 */

 $context = Load_Timber_Context();
 $post = Timber::query_post();
 $context['post'] = $post;
 $context['excerpt'] = get_the_excerpt($post);
 $context['categories'] = array_map(function ($cat) {
  return array(
    'name' => $cat->category_nicename,
    'link' => get_category_link($cat->term_id)
  );
}, get_the_category($post->ID));

 if ( post_password_required( $post->ID ) ) {

    Timber::render( 'single-password.twig', $context );

  } else {
    $twigs = [
      'single-travel.twig'
    ];

    Timber::render( $twigs, $context );
  }
