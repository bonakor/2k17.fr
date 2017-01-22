<?php get_template_part('templates/fil-ariane'); ?>
<div class="chapeau op-kicker"><p><?php the_field('chapeau')?></p></div>
<div class="entry-content"><?php the_content(); ?></div>
<?php
	$person = get_field('edite_par');
  $person_name = $person['display_name'];
	$person_id = $person['ID'];
?>
<div class="fp-edited">
	<div class="fp-edited-in">
  <figure class="avatar-container">
  <?php echo get_avatar( $person_id, '25', '', '', array('class' => 'rounded-circle')); ?>
</figure>
<div class="author">
  <span class="edited-by">ÉDITÉ PAR</span>
<address class="card-text small byline vcard d-block"><?php echo $person_name; ?></address>
</div>
</div>
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
