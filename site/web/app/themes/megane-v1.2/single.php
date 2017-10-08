<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Load_Timber_Context();
$post = Timber::query_post();
$context['post'] = $post;
$context['excerpt'] = get_the_excerpt($post);
$context['categories'] = array_map(function ($cat) {
  return $cat->name;
}, get_the_category($post->ID));

if ( post_password_required( $post->ID ) ) {

	Timber::render( 'single-password.twig', $context );

} else {
  $twigs = [
    'single'. $post->ID. '.twig',
    'single'. $post->post_type. '.twig',
    'single.twig'
  ];

	Timber::render( $twigs, $context );
}
