<section class="lista">
  <?php
  // WP_Query arguments
$args = array(
	'posts_per_page'         => '3',
	'ignore_sticky_posts'    => true,
	'offset'                 => '0',
);

// The Query
$get_list = new WP_Query( $args );

// The Loop
if ( $get_list->have_posts() ) {
	while ( $get_list->have_posts() ) {
		$get_list->the_post(); ?>
    <article <?php post_class('col-md-6'); ?>>
      <div class="card">
      <figure class="image-une">
      <?php the_post_thumbnail('w2010', ['class' => 'card-img img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
     </figure>
     <div class="card-img-overlay"></div>
       <div class="article-metas">
       <div class="chrono d-inline-flex"><figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span></div>
        <div><span class="type_article small"><?php the_field('type_article'); ?></span></div>
       <div><h1 class="card-title entry-title"><?php the_title( $before = '', $after = '', $echo = true )?></h1></div>
       <div class="d-inline-flex">
         <figure class="avatar-container">
         <?php echo get_avatar( get_the_author_meta( 'ID' ), '35', '', '', array('class' => 'rounded-circle')); ?>
       </figure>
       <span class="card-text byline vcard d-block"><?php the_author(); ?></span>
       <time class="updated card-text d-block" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_modified_date(); ?></time>
       </div>
    </div>
    </article><?php
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>
</section>
