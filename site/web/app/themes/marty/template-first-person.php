<?php
/*
Template Name: First Person
Template Post Type: post
*/ ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('first-person'); ?>>
  <?php get_template_part('templates/page', 'header-first-person'); ?>
  <?php get_template_part('templates/content', 'first-person'); ?>
</article>
<?php endwhile; ?>
