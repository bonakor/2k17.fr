<?php get_template_part('templates/archive', 'top'); ?>
<section class="category-posts">
<div class="list-posts">
  <?php
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 1, 'paged' => $paged );
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
  <a href="<?php the_permalink(); ?>" rel="<?php the_title(); ?>"><article>
  <figure class="image-une">
    <?php the_post_thumbnail('w800', ['class' => 'img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
   </figure>
   <div class="article-metas">
<div class="first-l">
       <address class="author small byline vcard"><?php the_author(); ?></address>
     <time class="updated small" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_time('j M'); ?>.</time>
   </div>
    <h2 class="entry-title"><?php the_title()?></h2></div>
  </article> </a>
<?php endwhile; ?>
<!-- pagination -->
<?php next_posts_link(); ?>
<?php previous_posts_link(); ?>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>
</div></section>
