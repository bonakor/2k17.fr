<h3 class="cta">Hey, pars pas !<br>
  Tu peux aussi matter ça.</h3>
<div class="flexed">
  <?php

$posts = get_field('articles_lies');

if( $posts ): ?>

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <article class='col-xs-6'><a href="<?php the_permalink(); ?>" rel="<?php the_title(); ?>">
          <div class="card">
          <figure class="image-une">
          <?php the_post_thumbnail('w1820', ['class' => 'card-img img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
         </figure>
         <div class="card-img-overlay">
           <div class="article-metas">
           <div class="chrono d-inline-flex small"><figure class=timer><?php get_template_part( 'assets/svg/inline', 'timer.svg' ); ?></figure><span> <?php the_field('reading_time'); ?>'</span></div>
            <p class="type_article small"><span><?php the_field('type_article'); ?></span></p>
           <h2 class="card-title entry-title"><?php the_title( $before = '', $after = '', $echo = true )?></h2>
           <time class="updated small card-text d-block" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_time('j F'); ?></time>
          </div>
        </div></div>
      </a></article>

    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
</div>
