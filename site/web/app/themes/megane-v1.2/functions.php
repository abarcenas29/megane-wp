<?php
  require_once('common/essentials.php');

  // Timber must run in order for this theme to work
  if (! class_exists('Timber') ) {
    add_action( 'admin_notices', function() {
      echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php') ) . '</a></p></div>';
    });

    add_filter('template_include', function($template) {
      return get_stylesheet_directory() . '/static/no-timber.html';
    });

    return;
  }

  // script loads
  function load_style_scripts () {
    $uri = get_stylesheet_directory_uri();
    $build_path = $uri . "/build/";

    // Timber::$locations = dirname(__DIR__) . '/megane-1.2v/templates';


    wp_deregister_script('jquery');

    // main styles
    wp_register_style('css-uikit', $build_path . 'main.style.css', '', '1.0.0', 'all');
    wp_register_script('js-app', $build_path . 'main.bundle.js', '', '1.0.0', true);
    // home styles
    wp_register_style('css-home', $build_path . 'home.style.css', '', '1.0.0', 'all');
    wp_register_script('js-home', $build_path . 'home.bundle.js', '', '1.0.0', true);
    // single styles
    wp_register_style('css-single', $build_path . 'singles.style.css', '', '1.0.0', 'all');
    wp_register_script('js-single', $build_path . 'singles.bundle.js', '', '1.0.0', true);

    if(!is_admin()) {
      wp_enqueue_script( 'js-app' );
      wp_enqueue_style( 'css-uikit');
    }

    if(is_home()) {
      wp_enqueue_script('js-home');
      wp_enqueue_style('css-home');
    }

    if(is_single()) {
      wp_enqueue_script('js-single');
      wp_enqueue_style('css-single');
    }

  }
  add_action('wp_enqueue_scripts', 'load_style_scripts');


