<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">

    <title><?php wp_title( '|', true, 'right' ); ?></title>


    <!-- Custom styles for this template -->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <!-- custom menu php -->
    <?php
      $defaults = array(
        'theme_location'  => 'main-menu',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'main-nav',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
      );
      wp_nav_menu( $defaults );
    ?>
