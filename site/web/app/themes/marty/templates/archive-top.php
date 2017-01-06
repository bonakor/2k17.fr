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
$terms = get_terms( 'category' );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    echo '<ul class="category-list">';
    foreach ( $terms as $term ) {
        echo '<li>' . $term->name . '</li>';
    }
    echo '</ul>';
} ?>
 <header class="page-header card">

  <?php use Roots\Sage\Titles; ?>

  <div class="page-header">
    <div class="metas-top">
    <?php

$image = get_field('illustration_categorie', $taxonomy . '_' . $term_id);

if( !empty($image) ): ?>

	<figure><img class="rounded-circle img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></figure>

<?php endif; ?>
    <h1><?= Titles\title(); ?></h1>
  </div></div>


</header>
