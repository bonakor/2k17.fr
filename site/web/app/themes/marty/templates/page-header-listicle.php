<?php use Roots\Sage\Titles; ?>

<header class="page-header">
  <div class="meta">
  	<span class="type_article"><?php the_field('type_article'); ?></span>
    <div class="chrono">
  <figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span></div>
  </div>
<time class="updated small card-text" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_modified_date(); ?></time><?php get_template_part('templates/meta', 'edited'); ?></a>
  <h1 class="entry-title"><?= Titles\title(); ?></h1>
  <?php get_template_part('templates/meta', 'coauthor'); ?>
</header>
