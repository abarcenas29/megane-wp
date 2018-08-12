<?php

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
    'key' => 'group_5ae7d538e4beb',
    'title' => 'Podcast Single Template',
    'fields' => array (
      array (
        'key' => 'field_5ae7d5530ade4',
        'label' => 'Audio File',
        'name' => 'audio_file',
        'type' => 'url',
        'instructions' => 'Audio link for the podcast',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
      array (
        'key' => 'field_5ae8161653395',
        'label' => 'Display Video',
        'name' => 'display_video',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => 'Display Youtube Video',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array (
        'key' => 'field_5ae80fdcf2df3',
        'label' => 'Youtube Link',
        'name' => 'youtube_id',
        'type' => 'text',
        'instructions' => 'If it\'s a video podcast, provide here the youtube link.',
        'required' => 0,
        'conditional_logic' => array (
          array (
            array (
              'field' => 'field_5ae8161653395',
              'operator' => '==',
              'value' => '1',
            ),
          ),
        ),
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
          'value' => 'tmp-single-podcast.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));

  endif;
