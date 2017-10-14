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
  return array(
    'name' => $cat->category_nicename,
    'link' => get_category_link($cat->term_id),
  );
}, get_the_category($post->ID));

$category_ids = array_map(function ($cat) {
  return $cat->term_id;
}, get_the_category($post->ID));

$q = array(
  'cat' => $category_ids,
  'status' => 'published',
  'post__not_in' => array($post->ID),
  'post_per_page' => 10
);
$other_posts = new Timber\PostQuery($q);
if (count($other_posts) > 0)
  $context['other_posts'] = $other_posts;



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
