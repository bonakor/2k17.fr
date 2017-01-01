<?php use Roots\Sage\Titles; ?>

<header class="page-header card">    <figure>
    <?php the_post_thumbnail('w1800', ['class' => 'card-img img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
  </figure>
<div class="card-img-overlay">
<div class="meta d-inline-flex">
<?php get_template_part('templates/meta', 'edited'); ?>
<figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span>
</div>
<div class="metas">
<span class="type_article"><?php the_field('type_article'); ?></span><br>
<h1 class="entry-title"><?= Titles\title(); ?></h1><br>
  <?php get_template_part('templates/meta', 'author-date'); ?>
</div>
</header>
