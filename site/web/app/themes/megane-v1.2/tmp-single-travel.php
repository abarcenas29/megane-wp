<?php
/**
 * Template Name: Travel Shell
 * Template Post Type: post
 * Description: Post Type for Travel
 */

 $context = Load_Timber_Context();
 $post = Timber::query_post();
 $context['post'] = $post;

 if ( post_password_required( $post->ID ) ) {

    Timber::render( 'single-password.twig', $context );

  } else {
    $twigs = [
      'single-travel.twig'
    ];

    Timber::render( $twigs, $context );
  }
