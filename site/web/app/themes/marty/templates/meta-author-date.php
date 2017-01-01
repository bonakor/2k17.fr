<div class="author-and-date d-inline-flex">
  <figure class='avatar-container'>
  <?php echo get_avatar( get_the_author_meta( 'ID' ), '35', '', '', array('class' => 'rounded-circle')); ?>
</figure>
<div>
<address class="card-text byline vcard d-block"><?php the_author(); ?></address>
<time class="updated small card-text d-block" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_date(); ?></time></div>
</div>
