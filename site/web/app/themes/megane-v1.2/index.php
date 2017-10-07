<?php
  $context = Load_Timber_Context();
  $context['posts'] = Timber::get_posts();
  $templates = array( 'index.twig' );
  if ( is_home() ) {
    $context['hide_nav_banner'] = true;
    array_unshift( $templates, 'home.twig' );
  }
  Timber::render( $templates, $context );
