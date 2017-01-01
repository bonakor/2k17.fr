<?php
/*
Template Name: Article sur les personas
Template Post Type: post
*/ ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('persona'); ?>>
  <?php get_template_part('templates/page', 'header-persona'); ?>
  <?php get_template_part('templates/content', 'persona'); ?>
</article>
<?php endwhile; ?>
