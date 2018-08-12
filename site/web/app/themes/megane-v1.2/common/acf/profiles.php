<?php

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
    'key' => 'group_59e222a78d1fa',
    'title' => 'User Profiles',
    'fields' => array (
      array (
        'key' => 'field_59e222b68277e',
        'label' => 'Twitter Handle',
        'name' => 'twitter_handle',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
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
      array (
        'key' => 'field_59e22575e8116',
        'label' => 'Public Email',
        'name' => 'public_email',
        'type' => 'email',
        'instructions' => 'Public email you want users / readers to email you.',
        'required' => 0,
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
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'user_form',
          'operator' => '==',
          'value' => 'edit',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
      0 => 'permalink',
      1 => 'the_content',
      2 => 'excerpt',
      3 => 'custom_fields',
      4 => 'discussion',
      5 => 'comments',
      6 => 'revisions',
      7 => 'slug',
      8 => 'author',
      9 => 'format',
      10 => 'page_attributes',
      11 => 'featured_image',
      12 => 'categories',
      13 => 'tags',
      14 => 'send-trackbacks',
    ),
    'active' => 1,
    'description' => '',
  ));

  endif;
