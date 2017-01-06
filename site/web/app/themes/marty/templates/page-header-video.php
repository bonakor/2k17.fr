<?php use Roots\Sage\Titles; ?>

<header class="page-header">
  <div class="meta">
  	<span class="type_article"><?php the_field('type_article'); ?></span>

<time class="updated small card-text" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished">
  <?php the_time('j F'); ?>
</time>
<?php get_template_part('templates/meta', 'edited'); ?></div>
  <h1 class="entry-title"><?= Titles\title(); ?></h1>
  <?php get_template_part('templates/meta', 'coauthor'); ?>
</header>
