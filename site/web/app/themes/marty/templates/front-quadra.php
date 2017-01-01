<section class="quadra">
  <?php
  $postslist = get_posts( array(
    'posts_per_page'         => '4',
    'ignore_sticky_posts'    => true,
  ) );

  if ( $postslist ) {
      foreach ( $postslist as $post ) :
          setup_postdata( $post );
          ?>
 <article class='col-xs-6'><a href="<?php the_permalink(); ?>" rel="<?php the_title(); ?>">
   <div class="card">
   <figure class="image-une">
   <?php the_post_thumbnail('w1820', ['class' => 'card-img img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
  </figure>
  <div class="card-img-overlay"></div>
    <div class="article-metas">
    <div class="chrono d-inline-flex"><figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span></div>
     <p class="type_article small"><?php the_field('type_article'); ?></p>
    <h2 class="card-title entry-title"><?php the_title( $before = '', $after = '', $echo = true )?></h2>
    <time class="updated small card-text d-block" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_modified_date(); ?></time>
   </div>
 </div>
 <?php get_template_part('templates/meta', 'author'); ?></a>
 </article>
 <?php

 endforeach;

 wp_reset_postdata();
 } ;?>

</section>
