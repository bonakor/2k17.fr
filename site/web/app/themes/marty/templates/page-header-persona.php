<?php use Roots\Sage\Titles; ?>

<header class="page-header card">    <figure>
    <?php the_post_thumbnail('p-m', ['class' => 'card-img img-fluid hidden-lg-up', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
    <?php

$image = get_field('featured_desktop');
$title = $image['title'];
	$alt = $image['alt'];
$size = 'p-d'; // (thumbnail, medium, large, full or custom size)
$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ]; ?>

<img class="hidden-md-down img-fluid card-img" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
    <?php the_post_thumbnail('p-d', ['class' => 'card-img img-fluid hidden-md-down', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
  </figure>
<div class="card-img-overlay">
<div class="meta">
  <time title="modifié le <?php the_modified_time('d/m/Y G:i:s'); ?>" class="updated small card-text" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_time('j F'); ?></time><?php get_template_part('templates/meta', 'edited'); ?></a>

<figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span>
</div>
<div class="metas">
<span class="type_article"><?php the_field('type_article'); ?></span><br>
<h1 class="entry-title"><?= Titles\title(); ?></h1><br>
  <?php get_template_part('templates/meta', 'coauthor'); ?>
</div>
</header>
