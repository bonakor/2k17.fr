<section class="quadra">
<?php
$args = array(
'posts_per_page'         => '4',
'ignore_sticky_posts'    => true,
);

// The Query
$get_quadra = new WP_Query( $args );

// The Loop
if ( $get_quadra->have_posts() ) {
while ( $get_quadra->have_posts() ) {
 $get_quadra->the_post(); ?>
 <article <?php post_class('col-xs-6'); ?>>
   <div class="card">
   <figure class="image-une">
   <?php the_post_thumbnail('w1820', ['class' => 'card-img img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
  </figure>
  <div class="card-img-overlay"></div>
    <div class="article-metas">
    <div class="chrono d-inline-flex"><figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span></div>
     <p class="type_article small"><?php the_field('type_article'); ?></p>
    <h1 class="card-title entry-title"><?php the_title( $before = '', $after = '', $echo = true )?></h1>
    <time class="updated small card-text d-block" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_modified_date(); ?></time>
   </div>
 </div>
 <?php get_template_part('templates/meta', 'author'); ?>
 </article>

<?php
}
} else {
// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>
</section>
