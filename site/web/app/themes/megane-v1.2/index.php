<?php
  $context = Load_Timber_Context();
  $context['posts'] = Timber::get_posts();
  $templates = array( 'index.twig' );

  if ( is_home() ) {
    $context = call_home_queries($context);

    /*
    print '<pre>';
    print_r($context['category_headline']);
    print '</pre>';
    */


    array_unshift( $templates, 'home.twig' );
  }
  Timber::render( $templates, $context );
