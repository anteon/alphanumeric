<?php

function alphanumeric_setup_theme() {
    load_theme_textdomain( 'alphanumeric' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'alphanumeric_setup_theme' );

function alphanumeric_enqueue_scripts() {
    wp_enqueue_style( 'alphanumeric-styles', get_stylesheet_uri(), array(), date('h:i:s') );
}
add_action( 'wp_enqueue_scripts', 'alphanumeric_enqueue_scripts' );

add_filter( 'show_admin_bar', '__return_false' );