<?php
/*
Template Name: Listicle
Template Post Type: post
*/ ?><?php while (have_posts()) : the_post(); ?>
<article <?php post_class('listicle'); ?>>

  <?php get_template_part('templates/page', 'header-listicle'); ?>
  <?php get_template_part('templates/content', 'listicle'); ?>

</article>
<?php endwhile; ?>
