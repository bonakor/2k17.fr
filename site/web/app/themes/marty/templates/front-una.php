<section class="una">  <?php
  $postslist = get_posts( array(
		'tag'                    => 'una',
		'posts_per_page'         => '1',
		'ignore_sticky_posts'    => false,
  ) );

  if ( $postslist ) {
      foreach ( $postslist as $post ) :
          setup_postdata( $post );
          ?>
    <article <?php post_class('card'); ?>><a href="<?php the_permalink(); ?>" rel="<?php the_title(); ?>">
			<figure>
			<?php the_post_thumbnail('u-m', ['class' => 'card-img img-fluid hidden-lg-up', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
      <?php

    $image = get_field('featured_archive');
    $title = $image['title'];
      $alt = $image['alt'];
    $size = 'u-d'; // (thumbnail, medium, large, full or custom size)
    $thumb = $image['sizes'][ $size ];
      $width = $image['sizes'][ $size . '-width' ];
      $height = $image['sizes'][ $size . '-height' ]; ?>

    <img class="img-fluid hidden-md-down card-img" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
		</figure>
  <div class="card-img-overlay"><div class="container-una">
<div class="meta d-inline-flex">
	<p class="type_article"><?php the_field('type_article'); ?></p>
<figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span>
</div>
    <h2 class="card-title h1 entry-title"><span><?php the_title( $before = '', $after = '', $echo = true )?></span></h2>
    <?php get_template_part('templates/meta', 'author-date'); ?>
  </div></div>
</a></article>
<?php

endforeach;

wp_reset_postdata();
}; ?>

</section>
