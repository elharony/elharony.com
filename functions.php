<?php

/*
 * add_styles
 */
function add_styles() {
  wp_enqueue_style("main-css", get_template_directory_uri() . "/css/app.css");
}


function add_scripts() {

  wp_enqueue_script("jquery");
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
 * Hooks
 */
add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
add_action("init", "add_custom_menu");

?>