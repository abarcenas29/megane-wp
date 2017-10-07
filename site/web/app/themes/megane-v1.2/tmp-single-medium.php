<?php
/**
 * Template Name: Medium Shell
 * Template Post Type: post
 * Description: Medium type post format
 */

 $context = Load_Timber_Context();
 $post = Timber::query_post();
 $context['post'] = $post;

 if ( post_password_required( $post->ID ) ) {

    Timber::render( 'single-password.twig', $context );

  } else {
    $twigs = [
      'single-medium.twig'
    ];

    Timber::render( $twigs, $context );
  }
