<?php

require get_theme_file_path('/inc/menu.php');
// require get_theme_file_path('/inc/cards.php');
// require get_theme_file_path('/inc/tiles.php');
// require get_theme_file_path('/inc/footer.php');
require get_theme_file_path('/inc/logo.php');
require get_theme_file_path('/inc/page_header.php');
require get_theme_file_path('/inc/subtitle.php');

// function eindland_theme_custom_rest() {
//   register_rest_field('post', 'authorName', array(
//     'get_callback' => function() {
//       return get_the_author();
//     }
//   ));
// }

// add_action('rest_api_init', 'eindland_theme_custom_rest');

// THEME FILES
function eindland_theme_files() {
  wp_enqueue_style('sedgwick_font', 'https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap');
  // wp_enqueue_style('josefin_slab', 'https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@100;400;700&display=swap');
  wp_enqueue_style('alegreya', 'https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap');
  wp_enqueue_style('uikit_css', 'https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css');
  wp_enqueue_script('uikit_js', 'https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js', NULL, '1.0', true);
  wp_enqueue_script('uikit_js_icons', 'https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js', NULL, '1.0', true);
  if(strstr($_SERVER['SERVER_NAME'], 'localhost')) {
    wp_enqueue_script('eindland_main_script', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    //wp_enqueue_script('our_verdors', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
    wp_enqueue_script('eindland_main_script', get_theme_file_uri('/bundled-assets/scripts.c9deea9aa6aa3f084cf5.js'), NULL, '1.0', true);
    wp_enqueue_style('eindland_main_styles', get_theme_file_uri('/bundled-assets/styles.c9deea9aa6aa3f084cf5.css'));
  }

  wp_localize_script('eindland_main_script', 'eindlandData', array(
    'root_url' => get_site_url()
  ));
}

add_action('wp_enqueue_scripts', 'eindland_theme_files');


// THEME FEATURES
function eindland_theme_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('square', 450, 450, true);
  // add_image_size('front', 1200, 600, true);

}
add_action('after_setup_theme', 'eindland_theme_features');

// REMOVE EDITOR FROM PAGES
function hide_editor() {  
  remove_post_type_support('page', 'editor');
}
add_action( 'admin_init', 'hide_editor' );
