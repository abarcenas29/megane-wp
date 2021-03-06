<?php
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
    'key' => 'group_59e0ed3c3add0',
    'title' => 'General Theme Settings',
    'fields' => array (
      array (
        'key' => 'field_5aec61ab00c17',
        'label' => 'Header Options',
        'name' => 'header_options',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array (
          array (
            'key' => 'field_5aec61de00c18',
            'label' => 'Background Color',
            'name' => 'background_color',
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
          ),
          array (
            'key' => 'field_5aec61ec00c19',
            'label' => 'Background Image',
            'name' => 'background_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'url',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
          ),
          array (
            'key' => 'field_5aec6e09b5331',
            'label' => 'Background Size',
            'name' => 'background_size',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array (
              'uk-background-contain' => 'contain',
              'uk-background-cover' => 'cover',
            ),
            'default_value' => array (
              0 => 'uk-background-cover',
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
          ),
          array (
            'key' => 'field_5aec6f64b5332',
            'label' => 'Background Position',
            'name' => 'background_position',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array (
              'uk-background-top-left' => 't-l',
              'uk-background-top-center' => 't-c',
              'uk-background-top-right: t-r' => 'uk-background-top-right: t-r',
              'uk-background-center-left' => 'c-l',
              'uk-background-center-center' => 'c-c',
              'uk-background-center-right' => 'c-r',
              'uk-background-bottom-left' => 'b-l',
              'uk-background-bottom-center' => 'b-c',
              'uk-background-bottom-right' => 'b-r',
            ),
            'default_value' => array (
              0 => 'uk-background-center-center',
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
          ),
          array (
            'key' => 'field_5aec70af7d90a',
            'label' => 'Background Repeat',
            'name' => 'background_repeat',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array (
              'no-repeat' => 'No Repeat',
              'repeat' => 'Repeat',
            ),
            'default_value' => array (
              0 => 'no-repeat',
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
          ),
          array (
            'key' => 'field_5aec622d00c1a',
            'label' => 'Text Color',
            'name' => 'text_color',
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
          ),
        ),
      ),
      array (
        'key' => 'field_59e0ed4a53a9b',
        'label' => 'Social Links',
        'name' => 'social_links',
        'type' => 'flexible_content',
        'instructions' => 'Add the social links for the site.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layouts' => array (
          '59e0ed850c9fd' => array (
            'key' => '59e0ed850c9fd',
            'name' => 'social_network',
            'label' => 'Social Network',
            'display' => 'block',
            'sub_fields' => array (
              array (
                'key' => 'field_59e0eda453a9c',
                'label' => 'name',
                'name' => 'name',
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
                'placeholder' => 'facebook, twitter etc ...',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
              ),
              array (
                'key' => 'field_59e0edbe53a9d',
                'label' => 'handle name',
                'name' => 'handle_name',
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
                'key' => 'field_59e0eddb53a9e',
                'label' => 'url',
                'name' => 'url',
                'type' => 'url',
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
              ),
              array (
                'key' => 'field_59e0f8b6d6dc2',
                'label' => 'icon',
                'name' => 'icon',
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
            ),
            'min' => '',
            'max' => '',
          ),
        ),
        'button_label' => 'Add Row',
        'min' => '',
        'max' => '',
      ),
      array (
        'key' => 'field_59e0f6e3f932b',
        'label' => 'Author Emphasis',
        'name' => 'author_emphasis',
        'type' => 'user',
        'instructions' => 'Though not needed. Select which user to display front-center in the site.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'role' => '',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      array (
        'key' => 'field_59e0f8d3916f3',
        'label' => 'About Link',
        'name' => 'about_link',
        'type' => 'page_link',
        'instructions' => 'Where to direct the user in the Find Out More button in the footer.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array (
        ),
        'taxonomy' => array (
        ),
        'allow_null' => 0,
        'allow_archives' => 1,
        'multiple' => 0,
      ),
      array (
        'key' => 'field_5a42ff61c5dd7',
        'label' => 'Footer Text',
        'name' => 'main_footer_text',
        'type' => 'text',
        'instructions' => 'Copyright Text',
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
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-general-settings',
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
