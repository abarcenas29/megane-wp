<?php
  $context = Load_Timber_Context();
  $context['posts'] = Timber::get_posts();
  $context['hide_nav_banner'] = true;
  $templates = array( 'index.twig' );
  if ( is_home() ) {
    array_unshift( $templates, 'home.twig' );
  }
  Timber::render( $templates, $context );
