<?php

/* add css */
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'color_css', get_template_directory_uri() . '/css/color.css' );
    wp_enqueue_style( 'layout_css', get_template_directory_uri() . '/css/layout.css' );
    wp_enqueue_style( 'typography', get_template_directory_uri() . '/css/typography.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


/* js */
function theme_js() {
    wp_enqueue_script( 'bootstrap_js', '/node_modules/bootstrap/dist/js/bootstrap.min.css', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );


/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );
function domsters_register_menu() {
  register_nav_menu('main-menu', __( 'Main Menu') );
}
add_action('init', 'domsters_register_menu');

// activate google fonts
function tutsplus_add_google_fonts() {
  wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'tutsplus_add_google_fonts' );

/* widgets */
function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the hompage');
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the hompage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the hompage');
create_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar');
?>
