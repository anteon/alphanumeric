<?php

function alphanumeric_setup_theme() {

}
add_action( 'after_setup_theme', 'alphanumeric_setup_theme' );

function alphanumeric_enqueue_scripts() {

}
add_action( 'wp_enqueue_scripts', 'alphanumeric_enqueue_scripts' );

add_filter( 'show_admin_bar', '__return_false' );