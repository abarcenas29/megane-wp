<?php

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_5c4bc63ed6589',
    'title' => 'Story Post Type',
    'fields' => array(
      array(
        'key' => 'field_5c4bc693ab495',
        'label' => 'Stories',
        'name' => 'stories',
        'type' => 'relationship',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
        ),
        'taxonomy' => array(
        ),
        'filters' => array(
          0 => 'search',
          1 => 'post_type',
          2 => 'taxonomy',
        ),
        'elements' => '',
        'min' => '',
        'max' => '',
        'return_format' => 'object',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'stories',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
      0 => 'discussion',
      1 => 'comments',
      2 => 'slug',
      3 => 'author',
      4 => 'format',
      5 => 'categories',
      6 => 'send-trackbacks',
    ),
    'active' => 1,
    'description' => '',
  ));
  
  endif;
  