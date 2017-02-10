<?php

$ids = get_field('articles_slider', false, false);

$the_query = new WP_Query(array(
'posts_per_page'	=> 3,
'tag'                    => 'diapa',
));
if ($the_query->have_posts()) {      ?>
  <section class="diapa">
        <div id="carousel-diapa" class="carousel slide carousel-fade" data-slideout-ignore data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php
              $count = count($the_query->posts);
              for ($i=0; $i<$count; $i++) {
                ?>
                  <li id="#carousel-example-2" data-slide-to="<?php echo $i; ?>"<?php
                      if ($i == 0) {
                        ?> class="active"<?php
                      }
                    ?>></li>
                <?php
              }
            ?>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="lisbox">
            <?php
              $count = 0;
              while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                  <div class="carousel-item<?php
                      if ($count == 0) {
                        echo ' active';
                      }
                    ?>">
                    <a href="<?php the_permalink(); ?>"><article <?php post_class(''); ?>>
                      <?php if ( has_post_format( 'video' )) { ?>
<figure><svg><?php get_template_part( 'assets/svg/inline', 'play_button.svg' ); ?></svg></figure>
<?php }; ?>
        <h1 class="h4"><?php the_title( $before = '', $after = '', $echo = true )?></h1>
        <div><figure class="avatar-container">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), '25', '', '', array('class' => 'rounded-circle')); ?>
      </figure><div class="author">
        <address class="card-text byline vcard d-block"><?php the_author(); ?></address>
      </div></div>
    </article></a></div>
                <?php
                $count++;
              }
            ?>
          </div><!-- end .carousel-inner -->

      <?php
      wp_reset_postdata();
    }; // end if have posts

  ?>
  <a class="left carousel-control" href="#carousel-diapa" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-diapa" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </section>
