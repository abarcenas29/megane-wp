<?php
  require_once('common/acf.php');
  require_once('common/essentials.php');
  require_once('common/home.php');

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

  // General Variables
  function Load_Timber_Context () {
    $context = Timber::get_context();
    $context['nav_menu_header_args'] = [
      'menu' => 'categories',
      'menu_class' => 'uk-navbar-nav uk-visible@m',
      'menu_id' => '',
      'container' => false
    ];
    $context['nav_menu_footer_args'] = [
      'menu' => 'categories',
      'menu_class' => 'uk-list',
      'menu_id' => '',
      'container' => false
    ];
    $options = get_fields('options');
    $context['options'] = $options;
    $context['site_owner'] = new Timber\User($options['author_emphasis']);

    return $context;
  }

  // script loads
  function load_style_scripts () {
    $uri = get_stylesheet_directory_uri();
    $build_path = $uri . "/build/";

    wp_deregister_script('jquery');

    $date = new DateTime();

    wp_register_script(
        'commons-bundle', $build_path . 'commons.bundle.js',
        '',
        $date->getTimestamp(),
        true);

    // main styles
    wp_register_style(
      'css-uikit',
      $build_path . 'main.style.css',
      '',
      $date->getTimestamp(),
      'all'
    );
    wp_register_script(
      'js-app',
      $build_path .
      'main.bundle.js',
      '',
      $date->getTimestamp(),
      true
    );

    // home styles
    wp_register_style('css-home', $build_path . 'home.style.css', '', $date->getTimestamp(), 'all');
    wp_register_script('js-home', $build_path . 'home.bundle.js', '', $date->getTimestamp(), true);
    // single styles
    wp_register_style('css-single', $build_path . 'singles.style.css', '', $date->getTimestamp(), 'all');
    wp_register_script('js-single', $build_path . 'singles.bundle.js', '', $date->getTimestamp(), true);

    if(!is_admin()) {
      wp_enqueue_script('commons-bundle');
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

  function load_editor_scripts () {
    $uri = get_stylesheet_directory_uri() . '/build/editor.style.css';
    add_editor_style($uri);
  }
  add_action('admin_init', 'load_editor_scripts');

  // add theme functionalities
  if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title' => 'General Theme Settings',
      'menu_title' => 'Theme Settings',
      'menu_slug' => 'theme-general-settings',
      'capability' => 'edit_posts',
      'redirect' => false
    ));

    acf_add_options_sub_page(array(
      'page_title' => 'Home',
      'menu_title' => 'Home',
      'parent_slug' => 'theme-general-settings'
    ));
  }
