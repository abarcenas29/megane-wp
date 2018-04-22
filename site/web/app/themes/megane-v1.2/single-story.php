<?php

$context = Load_Timber_Context();
$post = Timber::query_post();

$context['post'] = $post;

if (post_password_required( $post->ID )) {
  Timber::render('single-password.twig', $context);
} else {
  Timber::render('single-'.$post->post_type.'.twig', $context);
}
