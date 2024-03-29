<?php

/*
 * Theme Support
 */
add_theme_support("post-thumbnails");


/*
 * add_styles
 */
function add_styles() {
  wp_enqueue_style("main-css", get_template_directory_uri() . "/css/main.css");
}

function add_scripts() {

  // wp_enqueue_script("jquery");
  wp_enqueue_script("main-script", get_template_directory_uri() . "/js/app.js", array(), "", true);


  // // Conditional Scripts [ Web Compatibility ]
  // wp_enqueue_script("html5shiv", get_template_directory_uri() . "/js/html5shiv.min.js");
  // wp_script_add_data("html5shiv", "conditional", "lt IE 9");
  // wp_enqueue_script("respond", get_template_directory_uri() . "/js/respond.min.js");
  // wp_script_add_data("respond", "conditional", "lt IE 9");

}


/*
 * Menu
 * 
 * Let our theme support WP menus and give them unique names
 * 
 */
function add_custom_menu() {
    register_nav_menus(array(
      "header" => "Main Navbar"
    ));
  }

function display_menu() {
    wp_nav_menu(array(
        "theme-location" => "header",
        "menu_class"     => "menu-links",
        "container"      => false,
        "depth"          => 2,
    ));
}


/*
 * custom_post_type_testimonials
 *
 * Create new Custom Page for the "Testimonials"
 *
 * @params: NO
 * @return: NO
 */
function custom_post_type_testimonials() {

  // Labels
 $labels = array(
   'name' => "Testimonials",
   'singular_name' => "testimonials",
   'menu_name' => 'Testimonials',
   'add_new' => "Add Testimonial",
   'add_new_item' => "Add New Testimonial",
   'edit_item' => "Edit Testimonial",
   'new_item' => "New Testimonial",
   'view_item' => "View Testimonial",
   'all_items' => "View all",
   'search_items' => __("Search Testimonials"),
   'not_found' =>  __("No Testimonials Found"),
   'not_found_in_trash' => __("No Testimonials Found in Trash"),
   'parent_item_colon' => ''
 );

 // Register post type
 register_post_type('testimonials' , array(
   'labels' => $labels,
   'public' => true,
   'has_archive' => false,
   'menu_icon' => 'dashicons-book',
   'rewrite' => false,
   'supports' => array('title', 'editor', 'thumbnail')
 ) );
}

/*
 * custom_post_type_clients
 *
 * Create new Custom Post Type for the "Clients"
 *
 * @params: NO
 * @return: NO
 */
function custom_post_type_clients() {

// Labels
$labels = array(
  'name' => "Clients",
  'singular_name' => "clients",
  'menu_name' => 'Clients',
  'add_new' => "Add Client",
  'add_new_item' => "Add New Client",
  'edit_item' => "Edit Client",
  'new_item' => "New Client",
  'view_item' => "View Client",
  'all_items' => "View all",
  'search_items' => __("Search Clients"),
  'not_found' =>  __("No Clients Found"),
  'not_found_in_trash' => __("No Clients Found in Trash"),
  'parent_item_colon' => ''
);

// Register post type
  register_post_type('clients' , array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-groups',
    'rewrite' => false,
    'supports' => array('title', 'thumbnail')
  ) );
}


/*
 * Limit the excerpt length
 * Change the style of the read more; The default is […]
*/

function change_excerpt_length($length) {
  return 30;
}

function change_excerpt_more($more) {
  return " ...";
}
  
add_filter("excerpt_length", "change_excerpt_length"); 				
add_filter("excerpt_more", "change_excerpt_more"); 					


/*
 * Hooks
 */
add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
add_action("init", "add_custom_menu");
add_action( 'init', 'custom_post_type_testimonials', 0 );
add_action( 'init', 'custom_post_type_clients', 0 );
add_filter("excerpt_length", "change_excerpt_length");


?>