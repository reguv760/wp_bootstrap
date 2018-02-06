<?php
  /* add css */
function theme_styles() {
  /* update bootstrap path */
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() .'/node_modules/bootstrap/dist/css/bootstrap.min.css' );
  // wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/css/jumbotron.css' );
  // wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  }


  function theme_js() {
    // wp_enqueue_script( 'tether_js', get_template_directory_uri() . '/node_modules/tether/dist/js/tether.min.js', '', '', true );

    // wp_enqueue_script( 'tether_js', get_template_directory_uri() . '/node_modules/tether/dist/js/tether.min.js', '', '', true );

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
  }
  add_action( 'wp_enqueue_scripts', 'theme_js' );
?>
