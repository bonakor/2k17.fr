<?php use Roots\Sage\Titles; ?>
<header class="page-header card">
    <figure>
    <?php the_post_thumbnail('fp-m', ['class' => 'card-img img-fluid hidden-lg-up', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
    <?php the_post_thumbnail('fp-d', ['class' => 'card-img img-fluid hidden-md-down', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
  </figure>
<div class="card-img-overlay image-une">
  <div class="chrono d-inline-flex">
  <figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span></div>
  <div class="fp-center">
    <p><span class="type_article"><?php the_field('type_article'); ?></span></p>
  <h1 class="entry-title"><span><?= Titles\title(); ?></span></h1>
  <?php get_template_part('templates/meta', 'coauthor-noif'); ?>
  <time class="updated small card-text d-block" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_time('j F'); ?></time>
  <?php get_template_part('templates/meta', 'edited'); ?>
</div>
</div>
</header>
