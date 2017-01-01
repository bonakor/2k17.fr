<?php //Ici, on récupère les infos de la taxonomie affichée
// on définit les variables
$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
/*
Pour chaque field et répéteur, on doit préciser qu'il doit récupérer les informations de la taxonomie affichée.
Pour ça, on accole au nom habituelle du field :
, $taxonomy . '_' . $term_id
*/
 ?>
<div class="basic-id">
  <figure>
    <?php

  $image = get_field('photo_persona', $taxonomy . '_' . $term_id);

  if( !empty($image) ): ?>

  	<img class="pic-perso" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
  </figure>
  <div class="h1eth2">
  <h1><?php the_field('prenom', $taxonomy . '_' . $term_id); ?></h1>
  <h2 class="h5"><?php the_field('age', $taxonomy . '_' . $term_id); ?>ans, <?php the_field('lieu_residence', $taxonomy . '_' . $term_id); ?></h2>
</div></div>
<div class="bio-longue"><?php the_field('bio', $taxonomy . '_' . $term_id); ?></div>
<div class="liens-parente">
<h3>Liens de parenté</h3>
  <?php

// on regarde si le contneu flexible a du contenu connu, on pnse à préciser quel taxonomie nous intéresse
if( have_rows('liens_parente', $taxonomy . '_' . $term_id ) ):
?> <div class="parents"><?php
     // s'il en a, on le récupère, toujours en précisant la taxonomie
    while ( have_rows('liens_parente', $taxonomy . '_' . $term_id) ) : the_row();

        if( get_row_layout() == 'nouveau_parent' ):

          $terms = get_sub_field('parent', 'personas');

          if( $terms ):
  foreach( $terms as $term ): $termid = $term->term_id;
  $termslug = $term->slug  ?>

    <div class="parent">
      <a href="/personas/<?php echo $termslug;?>">
        <?php

      $image = get_field('photo_persona', 'personas_' . $termid);

      if( !empty($image) ): ?>

        <img class="pic-perso-fam rounded-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
        <p><?php the_field('prenom', 'personas_' . $termid);?>,</p>
    <p><?php the_sub_field('type_lien'); ?></p>
  </a>
</div>


	<?php endforeach;
 endif;
  endif;

    endwhile;
endif; ?>
</div></div>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

  <section class="author-posts">
    <h2>Les articles liés</h2>
  <div class="list-posts">
      <a href="<?php the_permalink(); ?>" rel="<?php the_title(); ?>"><article>
      <figure class="image-une">
        <?php the_post_thumbnail('w800', ['class' => 'img-fluid', 'title' => get_the_title(), 'alt' => get_the_title()]); ?>
       </figure>
       <div class="article-metas">
  <div class="first-l">
<address class="author small byline vcard"><?php the_author(); ?></address>
         <time class="updated small" datetime="<?php the_modified_time('Y/m/d G:i:s'); ?>" pubdate itemprop="datePublished"><?php the_modified_date(); ?></time>
       </div>
        <h2 class="entry-title"><?php the_title( $before = '', $after = '', $echo = true )?></h2>
      </div>
      </article>
    </a>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endwhile; ?>
<?php the_posts_navigation(); ?>
