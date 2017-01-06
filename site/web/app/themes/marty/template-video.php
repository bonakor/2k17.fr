<?php
/*
Template Name: Video
Template Post Type: post
*/ ?><?php while (have_posts()) : the_post(); ?>
<article <?php post_class('video'); ?>>
<div class="top-video"><?php get_template_part('templates/content', 'video'); ?>
  <?php get_template_part('templates/page', 'header-video'); ?></div>
  <?php get_template_part('templates/content', 'listicle'); ?>

</article>
<?php endwhile; ?>
