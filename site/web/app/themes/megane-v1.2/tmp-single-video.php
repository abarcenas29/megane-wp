<?php
/**
 * Template Name: Video Shell
 * Template Post Type: post
 * Description: Video Embed template
 */
$context = Load_Timber_Context();
$post = Timber::query_post();
$context['post'] = $post;
$context['categories'] = array_map(function ($cat) {
  return array(
    'name' => $cat->category_nicename,
    'link' => get_category_link($cat->term_id)
  );
}, get_the_category($post->ID));

if ( post_password_required( $post->ID ) ) {
  Timber::render( 'single-password.twig', $context );
} else {
  Timber::render('single-video.twig', $context );
}
