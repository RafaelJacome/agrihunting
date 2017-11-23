<?php

function myFiles() {
  wp_enqueue_style( 'customStyles', get_stylesheet_uri() );
  wp_enqueue_script( 'customScript', get_template_directory_uri().'/dist/js/script.min.js');
}
add_action( 'wp_enqueue_scripts', 'myFiles' );

function main_menu() {
  register_nav_menu('new-menu',__( 'Main Menu' ));
}
add_action( 'init', 'main_menu' );

function the_breadcrumbs() {
    if (!is_home()) {
        echo '<a href="/">Inicio</a> / ';
        if (is_category() || is_single() || is_page()) {
            if(is_category()){
                $category = get_the_category();
                echo $category[0]->cat_name;
            }else{
                the_category(' - ');
            }if(is_page()) {
                echo the_title();
            }if (is_single()) {
                echo " / ";
                the_title();
            }
        }
    }
}


add_filter( 'show_admin_bar', '__return_false' );