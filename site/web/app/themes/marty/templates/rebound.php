<?php
$postslist = get_posts( array(
    'posts_per_page' => 2,
) );

if ( $postslist ) {
    foreach ( $postslist as $post ) :
        setup_postdata( $post );
        ?>
    <a href="<?php the_permalink(); ?>" rel="<?php the_title(); ?>"><article>
    <figure class="image-une">
      <?php the_post_thumbnail('w800', ['class' => 'img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
     </figure>
     <div class="article-metas">
<div class="first-l">
         <address class="author small byline vcard"><?php the_author(); ?></address>
       <time class="updated small" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_modified_date(); ?></time>
     </div>
      <h2 class="entry-title"><?php the_title( $before = '', $after = '', $echo = true )?></h2></div>
    </article> </a>    <?php
    endforeach;

    wp_reset_postdata();
}
