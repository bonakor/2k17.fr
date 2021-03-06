<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }
/*
  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }*/

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {

        $title = single_cat_title( '', false );

    }

    return $title;

});

add_theme_support('soil-google-analytics', 'UA-89977365-1');

/**
 * Wrap the inserted image html with <figure>
 * if the theme supports html5 and the current image has no caption:
 */

add_filter( 'image_send_to_editor',
    function( $html, $id, $caption, $title, $align, $url, $size, $alt )
    {
        if( current_theme_supports( 'html5' )  && ! $caption )
            $html = sprintf( '<figure>%s</figure>', $html ); // Modify to your needs!

        return $html;
    }
, 10, 8 );
