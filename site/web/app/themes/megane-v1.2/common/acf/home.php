<?php

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
    'key' => 'group_59e0f14981f76',
    'title' => 'Home Page Settings',
    'fields' => array (
      array (
        'key' => 'field_5aec6000d1a73',
        'label' => 'Sticky Headline',
        'name' => 'sticky_headline',
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
            'key' => 'field_5aec60b8d1a74',
            'label' => 'Enable',
            'name' => 'enable',
            'type' => 'true_false',
            'instructions' => 'If you have enabled stories, this will not be reflected.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => 'Enable Sticky',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array (
            'key' => 'field_5aec6100d1a75',
            'label' => 'Post',
            'name' => 'post',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_5aec60b8d1a74',
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
            'post_type' => array (
            ),
            'taxonomy' => array (
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'id',
            'ui' => 1,
          ),
        ),
      ),
      array (
        'key' => 'field_59e0ee0d53a9f',
        'label' => 'Category Bar',
        'name' => 'category_bar',
        'type' => 'group',
        'instructions' => 'This is where you like to put emphasis on category. (i.e: First Impressions)',
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
            'key' => 'field_59e0ee8853aa0',
            'label' => 'enable',
            'name' => 'enable',
            'type' => 'true_false',
            'instructions' => 'Toggle the category bar to show in the home page.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Display the Category Bar',
            'ui_off_text' => 'Hide the Category Bar',
          ),
          array (
            'key' => 'field_59e0eee953aa1',
            'label' => 'Category',
            'name' => 'category',
            'type' => 'taxonomy',
            'instructions' => 'What category to show',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_59e0ee8853aa0',
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
            'taxonomy' => 'category',
            'field_type' => 'checkbox',
            'allow_null' => 0,
            'add_term' => 1,
            'save_terms' => 0,
            'load_terms' => 1,
            'return_format' => 'id',
            'multiple' => 0,
          ),
          array (
            'key' => 'field_59e0ef3a53aa2',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'instructions' => 'Cover Image To Show in the Category',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_59e0ee8853aa0',
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
            'return_format' => 'id',
            'preview_size' => 'thumbnail',
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
            'key' => 'field_59e0ef6753aa3',
            'label' => 'Items Shown',
            'name' => 'items_shown',
            'type' => 'number',
            'instructions' => 'Display what number of items to show in the category.',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_59e0ee8853aa0',
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
            'default_value' => 5,
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => 1,
          ),
        ),
      ),
      array (
        'key' => 'field_5ad9e85f4f560',
        'label' => 'Stories Header',
        'name' => 'stories_header',
        'type' => 'group',
        'instructions' => 'Replace the Header Post for a Story Header',
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
            'key' => 'field_5ad9e8db4f561',
            'label' => 'Enable',
            'name' => 'enable',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => 'Turn on the Story Header',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array (
            'key' => 'field_5ad9e9004f562',
            'label' => 'Story',
            'name' => 'story',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_5ad9e8db4f561',
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
            'post_type' => array (
              0 => 'stories',
            ),
            'taxonomy' => array (
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
          ),
        ),
      ),
      array (
        'key' => 'field_59e0f16bacad6',
        'label' => 'Call To Action Text',
        'name' => 'call_to_action_text',
        'type' => 'group',
        'instructions' => 'This is where you put some fancy text to inform the user something.',
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
            'key' => 'field_59e0f19cacad7',
            'label' => 'Enable',
            'name' => 'enable',
            'type' => 'true_false',
            'instructions' => 'Hide or Show the CTA',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Show',
            'ui_off_text' => 'Hide',
          ),
          array (
            'key' => 'field_59e0f22bacad9',
            'label' => 'Post',
            'name' => 'post',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_59e0f19cacad7',
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
            'post_type' => array (
            ),
            'taxonomy' => array (
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
          ),
          array (
            'key' => 'field_5af818da0fc71',
            'label' => 'Override Excerpt',
            'name' => 'override_excerpt',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array (
            'key' => 'field_5af810930bd9b',
            'label' => 'Excerpt',
            'name' => 'excerpt',
            'type' => 'text',
            'instructions' => 'If the post excerpt is too long. You can use this to overwrite the default text taken from the excerpt.',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_59e0f19cacad7',
                  'operator' => '==',
                  'value' => '1',
                ),
                array (
                  'field' => 'field_5af818da0fc71',
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
      ),
      array (
        'key' => 'field_59e0f41652d78',
        'label' => 'Category Headlines',
        'name' => 'category_headlines',
        'type' => 'repeater',
        'instructions' => 'Add the set of categories to use in the header part of the home page.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 3,
        'max' => 3,
        'layout' => 'block',
        'button_label' => '',
        'sub_fields' => array (
          array (
            'key' => 'field_59e0f45252d7a',
            'label' => 'Category',
            'name' => 'category',
            'type' => 'taxonomy',
            'instructions' => 'Categories to choose to display the latest post in the header.',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'taxonomy' => 'category',
            'field_type' => 'select',
            'allow_null' => 0,
            'add_term' => 0,
            'save_terms' => 0,
            'load_terms' => 0,
            'return_format' => 'id',
            'multiple' => 0,
          ),
        ),
      ),
      array (
        'key' => 'field_5adc304b4438e',
        'label' => 'Stories Loop',
        'name' => 'stories_loop',
        'type' => 'group',
        'instructions' => 'Stories to show in the post loop',
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
            'key' => 'field_5adc307944390',
            'label' => 'Enable',
            'name' => 'enable',
            'type' => 'true_false',
            'instructions' => 'Show stories in the post loop?',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => 'Show stories in the post loop',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array (
            'key' => 'field_5adc30644438f',
            'label' => 'Story',
            'name' => 'story',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_5adc307944390',
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
            'post_type' => array (
              0 => 'stories',
            ),
            'taxonomy' => array (
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
          ),
        ),
      ),
      array (
        'key' => 'field_5b6e9e9921d44',
        'label' => 'Personal Logs Category',
        'name' => 'personal_logs_category',
        'type' => 'taxonomy',
        'instructions' => 'The category that is assigned for the Personal Logs',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'taxonomy' => 'category',
        'field_type' => 'select',
        'allow_null' => 0,
        'add_term' => 0,
        'save_terms' => 0,
        'load_terms' => 0,
        'return_format' => 'id',
        'multiple' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-home',
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
