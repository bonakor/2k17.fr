<?php $term = get_sub_field('personnage', 'personas');

if( $term ):
$termid = $term->term_id;
$termslug = $term->slug ?>
  <figure class="fiche"><h2><?php the_field('prenom', 'personas_' . $termid);?></h2>
  <figcaption class="h6"><?php the_field('age', 'personas_' . $termid);?> ans, <?php the_field('courte_bio', 'personas_' . $termid);?></figcaption>
  <a class="to-profil" href="/personas/<?php echo $termslug;?>">Profil complet</a>
  <?php

$image = get_field('photo_persona', 'personas_' . $termid);

if( !empty($image) ): ?>

	<img class="pic-perso perso-pic" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></figure>

<?php endif; ?>
<?php endif; ?>
