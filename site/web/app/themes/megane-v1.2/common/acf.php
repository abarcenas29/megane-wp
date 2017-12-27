<?php
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_59e0ed3c3add0',
    'title' => 'General Theme Settings',
    'fields' => array(
      array(
        'key' => 'field_59e0ed4a53a9b',
        'label' => 'social_links',
        'name' => 'social_links',
        'type' => 'flexible_content',
        'instructions' => 'Add the social links for the site.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layouts' => array(
          '59e0ed850c9fd' => array(
            'key' => '59e0ed850c9fd',
            'name' => 'social_network',
            'label' => 'Social Network',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_59e0eda453a9c',
                'label' => 'name',
                'name' => 'name',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
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
              array(
                'key' => 'field_59e0edbe53a9d',
                'label' => 'handle name',
                'name' => 'handle_name',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
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
              array(
                'key' => 'field_59e0eddb53a9e',
                'label' => 'url',
                'name' => 'url',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
              ),
              array(
                'key' => 'field_59e0f8b6d6dc2',
                'label' => 'icon',
                'name' => 'icon',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
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
      array(
        'key' => 'field_59e0f6e3f932b',
        'label' => 'Author Emphasis',
        'name' => 'author_emphasis',
        'type' => 'user',
        'instructions' => 'Though not needed. Select which user to display front-center in the site.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'role' => '',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      array(
        'key' => 'field_59e0f8d3916f3',
        'label' => 'About Link',
        'name' => 'about_link',
        'type' => 'page_link',
        'instructions' => 'Where to direct the user in the Find Out More button in the footer.',
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
        'allow_null' => 0,
        'allow_archives' => 1,
        'multiple' => 0,
      ),
      array(
        'key' => 'field_5a42ff61c5dd7',
        'label' => 'Footer Text',
        'name' => 'main_footer_text',
        'type' => 'text',
        'instructions' => 'Copyright Text',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
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
    'location' => array(
      array(
        array(
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

  acf_add_local_field_group(array(
    'key' => 'group_59e0f14981f76',
    'title' => 'Home Page Settings',
    'fields' => array(
      array(
        'key' => 'field_59e0ee0d53a9f',
        'label' => 'Category Bar',
        'name' => 'category_bar',
        'type' => 'group',
        'instructions' => 'This is where you like to put emphasis on category. (i.e: First Impressions)',
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
            'key' => 'field_59e0ee8853aa0',
            'label' => 'enable',
            'name' => 'enable',
            'type' => 'true_false',
            'instructions' => 'Toggle the category bar to show in the home page.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
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
          array(
            'key' => 'field_59e0eee953aa1',
            'label' => 'Category',
            'name' => 'category',
            'type' => 'taxonomy',
            'instructions' => 'What category to show',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_59e0ee8853aa0',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
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
          array(
            'key' => 'field_59e0ef3a53aa2',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'instructions' => 'Cover Image To Show in the Category',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_59e0ee8853aa0',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
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
          array(
            'key' => 'field_59e0ef6753aa3',
            'label' => 'Items Shown',
            'name' => 'items_shown',
            'type' => 'number',
            'instructions' => 'Display what number of items to show in the category.',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_59e0ee8853aa0',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
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
      array(
        'key' => 'field_59e0f16bacad6',
        'label' => 'Call To Action Text',
        'name' => 'call_to_action_text',
        'type' => 'group',
        'instructions' => 'This is where you put some fancy text to inform the user something.',
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
            'key' => 'field_59e0f19cacad7',
            'label' => 'Enable',
            'name' => 'enable',
            'type' => 'true_false',
            'instructions' => 'Hide or Show the CTA',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
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
          array(
            'key' => 'field_59e0f2b8acadd',
            'label' => 'Background Color',
            'name' => 'background_color',
            'type' => 'color_picker',
            'instructions' => 'Display what color to use in the bacground',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_59e0f19cacad7',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
          ),
          array(
            'key' => 'field_59e0f2eeacade',
            'label' => 'Font Color',
            'name' => 'font_color',
            'type' => 'color_picker',
            'instructions' => 'Select what kind of font color to use',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_59e0f19cacad7',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
          ),
          array(
            'key' => 'field_59e0f1cdacad8',
            'label' => 'Display Type',
            'name' => 'display_type',
            'type' => 'select',
            'instructions' => 'Display what type of CTA. Choose between text or link.',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_59e0f19cacad7',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'text' => 'Text',
              'link' => 'link',
            ),
            'default_value' => array(
              0 => 'text',
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
          ),
          array(
            'key' => 'field_59e0f22bacad9',
            'label' => 'Post',
            'name' => 'Post',
            'type' => 'page_link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_59e0f19cacad7',
                  'operator' => '==',
                  'value' => '1',
                ),
                array(
                  'field' => 'field_59e0f1cdacad8',
                  'operator' => '==',
                  'value' => 'link',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'post_type' => array(
            ),
            'taxonomy' => array(
            ),
            'allow_null' => 0,
            'allow_archives' => 1,
            'multiple' => 0,
          ),
          array(
            'key' => 'field_59e0f275acadb',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_59e0f19cacad7',
                  'operator' => '==',
                  'value' => '1',
                ),
                array(
                  'field' => 'field_59e0f1cdacad8',
                  'operator' => '==',
                  'value' => 'text',
                ),
              ),
            ),
            'wrapper' => array(
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
      array(
        'key' => 'field_59e0f41652d78',
        'label' => 'Category Headlines',
        'name' => 'category_headlines',
        'type' => 'repeater',
        'instructions' => 'Add the set of categories to use in the header part of the home page.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 3,
        'max' => 3,
        'layout' => 'block',
        'button_label' => '',
        'sub_fields' => array(
          array(
            'key' => 'field_59e0f45252d7a',
            'label' => 'Category',
            'name' => 'category',
            'type' => 'taxonomy',
            'instructions' => 'Categories to choose to display the latest post in the header.',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
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
    ),
    'location' => array(
      array(
        array(
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
    'hide_on_screen' => array(
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

  acf_add_local_field_group(array(
    'key' => 'group_59dcf028e35a4',
    'title' => 'Medium Template Options',
    'fields' => array(
      array(
        'key' => 'field_59dcf0770d50e',
        'label' => 'Cover Position',
        'name' => 'cover_position',
        'type' => 'select',
        'instructions' => 'Select on what position the image should position itself.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'center' => 'Center',
          'top' => 'Top',
          'bottom' => 'Bottom',
        ),
        'default_value' => array(
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
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
        array(
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

  acf_add_local_field_group(array(
    'key' => 'group_59e222a78d1fa',
    'title' => 'User Profiles',
    'fields' => array(
      array(
        'key' => 'field_59e222b68277e',
        'label' => 'Twitter Handle',
        'name' => 'twitter_handle',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
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
      array(
        'key' => 'field_59e22575e8116',
        'label' => 'Public Email',
        'name' => 'public_email',
        'type' => 'email',
        'instructions' => 'Public email you want users / readers to email you.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
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
    'location' => array(
      array(
        array(
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
    'hide_on_screen' => array(
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
