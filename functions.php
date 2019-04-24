<?php

/*
 * Theme Support
 */
add_theme_support("post-thumbnails");


/*
 * add_styles
 */
function add_styles() {
  wp_enqueue_style("main-css", get_template_directory_uri() . "/css/app.css");
  wp_enqueue_style("fontawesome", "https://use.fontawesome.com/releases/v5.0.13/css/all.css");
  wp_enqueue_style("fonts", "https://fonts.googleapis.com/css?family=Audiowide|Montserrat");
  wp_enqueue_style("swiper-css", "https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css");

}


function add_scripts() {

  wp_enqueue_script("jquery");
  wp_enqueue_script("main-script", get_template_directory_uri() . "/js/app.js", array(), "", true);
  wp_enqueue_script("swiper-script", "https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js", array(), "", true);


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
 * Limit the excerpt length
 * Change the style of the read more; The default is […]
*/

function change_excerpt_length($length) {
  return 60;
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
add_filter("excerpt_length", "change_excerpt_length");


?>