<?php
/**
 * Template Name: Search Page
 * Template Post Type: page
 * Description: Medium type post format
 */

 $context = Load_Timber_Context();
 $post = Timber::query_post();
 $context['post'] = $post;

 if ( post_password_required( $post->ID ) ) {

    Timber::render( 'single-password.twig', $context );

  } else {
    $twigs = [
      'search.twig'
    ];

    Timber::render( $twigs, $context );
  }
