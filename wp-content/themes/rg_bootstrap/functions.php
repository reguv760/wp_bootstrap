<?php
/* add css */
function theme_styles() {
    /* update bootstrap path */
    wp_enqueue_style( 'bootstrap_css','/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/css/jumbotron.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
  /* npm install tether, then change js paths to /node_modules to tether + bootstrap */
  wp_enqueue_script( 'tether_js','/node_modules/tether/dist/js/tether.min.js', '', '', true );
  wp_enqueue_script( 'bootstrap_js', '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// Sometimes when logged in, the WordPress Admin CSS gets in your way. You have the ability to override it.
// add_filter( 'show_admin_bar', '__return_false' );

/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );
function rg_wp_project_register_menu() {
  register_nav_menu('main-menu', __( 'Main Menu') );
}
add_action('init', 'rg_wp_project_register_menu');

/* google fonts */
function tutsplus_add_google_fonts() {
  wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'tutsplus_add_google_fonts' );


//// create widgets:::
function create_widget($name, $id, $description) {
  // change h2 -> h3
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

// sidebar
create_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar');

?>
