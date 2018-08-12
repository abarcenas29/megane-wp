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

  endif;
