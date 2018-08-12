<?php

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
    'key' => 'group_59dcf028e35a4',
    'title' => 'Medium Template Options',
    'fields' => array (
      array (
        'key' => 'field_59dcf0770d50e',
        'label' => 'Cover Position',
        'name' => 'cover_position',
        'type' => 'select',
        'instructions' => 'Select on what position the image should position itself.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array (
          'center' => 'Center',
          'top' => 'Top',
          'bottom' => 'Bottom',
        ),
        'default_value' => array (
          0 => 'center',
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 0,
        'ajax' => 0,
        'return_format' => 'value',
        'placeholder' => '',
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
          'value' => 'tmp-single-medium.php',
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
    'description' => 'Choose Where the Image Emphasis is Placed.',
  ));

  endif;
