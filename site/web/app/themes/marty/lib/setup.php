<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Menu principal', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');
  add_image_size('w800', 800, 800, array( 'center', 'center' ));
  add_image_size('w1820', 650, 892, array( 'center', 'center' ));
/*  add_image_size('w1800', 900, 1125, array( 'center', 'center' ));*/
  add_image_size('w2010', 1340, 820, array( 'center', 'center' ));
  add_image_size('h2036', 750, 1018, array( 'center', 'center' ));
  add_image_size('u-m', 750, 600, array( 'center', 'center' ));
  add_image_size('p-m', 750, 1050, array( 'center', 'center' ));
  add_image_size('fp-m', 750, 1346, array( 'center', 'center' ));
  add_image_size('p-d', 1920, 625, array( 'center', 'center' ));
  add_image_size('u-d', 1920, 725, array( 'center', 'center' ));
    add_image_size('fp-d', 1920, 1080, array( 'center', 'center' ));
  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['video']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');
/*
/**
 * Register sidebars
 *//*
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');
*/
/**
 * Determine which pages should NOT display the sidebar
 *//*
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}
*/
/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
  if (is_single(array('583', '171', '655', '722'))) {
    wp_enqueue_script('d3.min.js', Assets\asset_path('scripts/d3.min.js'), ['jquery'], null, false);
    wp_enqueue_script('d3-legend.js', Assets\asset_path('scripts/d3-legend.js'), ['jquery'], null, false);
    wp_enqueue_script('radarChart.js', Assets\asset_path('scripts/radarChart.js'), ['jquery'], null, false);
  }
  if (is_single(array('583', '171'))) {
  wp_enqueue_script('custom.js', Assets\asset_path('scripts/custom.js'), ['jquery'], null, true);
  }
  if (is_single(array('655'))) {
  wp_enqueue_script('custom-taubira.js', Assets\asset_path('scripts/custom-taubira.js'), ['jquery'], null, true);
  }
  if (is_single(array('722'))) {
  wp_enqueue_script('custom-rue.js', Assets\asset_path('scripts/custom-rue.js'), ['jquery'], null, true);
  }
  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
