<?php
  $postslist = get_posts( array(
    'posts_per_page'         => '4',
  	'ignore_sticky_posts'    => true,
  	'offset'                 => '0',
  ) ); ?>
  <section class="lista">
    <?php
  if ( $postslist ) {
      foreach ( $postslist as $post ) :
          setup_postdata( $post );
          ?>
    <article class='col-md-6'><a href="<?php the_permalink(); ?>" rel="<?php the_title(); ?>">
      <div class="card">
      <figure class="image-une">
        <?php

    $image = get_field('featured_desktop');
    $title = $image['title'];
    	$alt = $image['alt'];
    $size = 'w2010'; // (thumbnail, medium, large, full or custom size)
    $thumb = $image['sizes'][ $size ];
    	$width = $image['sizes'][ $size . '-width' ];
    	$height = $image['sizes'][ $size . '-height' ]; ?>

    <img class="hidden-md-down img-fluid card-img" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
     </figure>
     <div class="card-img-overlay">
       <div class="article-metas">
       <div class="d-flex"><p><span class="type_article small"><?php the_field('type_article'); ?></span></p><div class="chrono d-inline-flex"><figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span></div>
      </div>
       <h2 class="card-title entry-title"><span><?php the_title( $before = '', $after = '', $echo = true )?></span></h2>
       <div class="d-inline-flex">
         <div class="author-nom d-inline-flex">
          <figure class="avatar-container">
         <?php echo get_avatar( get_the_author_meta( 'ID' ), '25', '', ''); ?>
       </figure>
       <address class="byline vcard"><?php the_author(); ?></address></div>
       <time class="updated small" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_modified_date(); ?></time>
       </div>
    </div></div>
  </a></article><?php

endforeach;

wp_reset_postdata();
} ?>
</section>
