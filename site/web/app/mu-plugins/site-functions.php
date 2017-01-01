<?php
/*
Plugin Name:  2K17 en fonctions
Plugin URI:   http://nuuk.fr
Description:  Les fonctions essentielles pour un site cooly
Version:      1.0.0
Author:       Studio Nuük
Author URI:   http://nuuk.fr
License:      MIT License
*/
// Register Custom Post Type
// Register Custom Taxonomy
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_personas_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_personas_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Personas', 'taxonomy general name' ),
    'singular_name' => _x( 'Persona', 'taxonomy singular name' ),
    'search_items' =>  __( 'Rechercher un persona' ),
    'all_items' => __( 'Tous les Personas' ),
    'edit_item' => __( 'Editer persona' ),
    'update_item' => __( 'Mettre à jour' ),
    'add_new_item' => __( 'Nouveau persona' ),
    'new_item_name' => __( 'Nom du persona' ),
    'menu_name' => __( 'Persona' ),
  );

// Now register the taxonomy

  register_taxonomy('personas',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'personas' ),
  ));

}
