<?php

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
    'key' => 'group_5abefda3e03d4',
    'title' => 'Single Video Template',
    'fields' => array (
      array (
        'key' => 'field_5abefdbeff138',
        'label' => 'Youtube ID',
        'name' => 'youtube_id',
        'type' => 'text',
        'instructions' => 'Youtube ID to be posted on site',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
        array (
          'param' => 'post_template',
          'operator' => '==',
          'value' => 'tmp-single-video.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));

  // Gify Options

  acf_add_local_field_group(array(
    'key' => 'group_5b82193ecc069',
    'title' => 'Gify Options',
    'fields' => array(
      array(
        'key' => 'field_5b82244b7bfe4',
        'label' => 'Gify Options',
        'name' => 'gify_options',
        'type' => 'group',
        'instructions' => 'Options for Gify',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_5b82194e0be14',
            'label' => 'Gify Url',
            'name' => 'gify_url',
            'type' => 'url',
            'instructions' => 'Insert the Gify URL to animate. Please use the mp4 format to save space.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'mp4 format',
          ),
          array(
            'key' => 'field_5b82246c7bfe6',
            'label' => 'scale',
            'name' => 'scale',
            'type' => 'number',
            'instructions' => 'Overscan the video if the video doesn\'t cover the entire section.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '1.2',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));

  endif;
