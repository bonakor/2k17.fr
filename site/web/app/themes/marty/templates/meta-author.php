<div class="d-inline-flex">
  <figure class="avatar-container">
  <?php echo get_avatar( get_the_author_meta( 'ID' ), '35', '', '', array('class' => 'rounded-circle')); ?>
</figure>
<div class="author">
<address class="card-text byline vcard d-block"><?php the_author(); ?></address>
</div>
</div>
