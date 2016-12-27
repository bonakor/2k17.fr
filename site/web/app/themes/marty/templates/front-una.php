<section class="una"><?php
// WP_Query arguments
$args = array(
	'tag'                    => 'una',
	'posts_per_page'         => '1',
	'ignore_sticky_posts'    => false,
);

// The Query
$get_una = new WP_Query( $args );
// The Loop
if ( $get_una->have_posts() ) {
	while ( $get_una->have_posts() ) {
		$get_una->the_post();?>
    <article <?php post_class('card'); ?>>
			<figure>
			<?php the_post_thumbnail('w1800', ['class' => 'card-img img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
		</figure>
  <div class="card-img-overlay">
<div class="meta d-inline-flex">
	<p class="type_article"><?php the_field('type_article'); ?></p>
<figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span>
</div>
    <div><h1 class="card-title entry-title"><?php the_title( $before = '', $after = '', $echo = true )?></h1></div>
    <?php get_template_part('templates/meta', 'author-date'); ?>
  </div>
</article>
<?php }
} else {
// no posts found
}
// Restore original Post Data
wp_reset_postdata(); ?>
</section>
