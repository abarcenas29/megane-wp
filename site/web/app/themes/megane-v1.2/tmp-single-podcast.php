<?php
/**
 * Template Name: Podcast Shell
 * Template Post Type: post
 * Description: Podcast template for post
 */

 $context = Load_Timber_Context();
 $post = Timber::query_post();
 $context['post'] = $post;

 $tags = get_the_tags($post->ID);
 $context['tags'] = array_map(function($n){
   return [
     'name' => $n->name,
     'slug' => $n->slug
   ];
 }, $tags);

 $category_ids = array_map(function ($cat) {
  return $cat->term_id;
 }, get_the_category($post->ID));

 $q = array(
   'cat' => $category_ids,
   'status' => 'published',
   'post__not_in' => array($post->ID),
   'post_per_page' => 10
 );
 $context['other_posts'] = new Timber\PostQuery($q);

 $twigs = ['single-podcast.twig'];
 Timber::render($twigs, $context);
