<?php

/**
 * Functions for 37celsius Bento child theme
 */


/* enqueue child theme's CSS stylesheet */

function fse_child_styles() {
    wp_enqueue_style( 'fse-child-style', get_stylesheet_uri() );
    }
add_action( 'wp_enqueue_scripts', 'fse_child_styles' );