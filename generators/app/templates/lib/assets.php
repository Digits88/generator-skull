<?php
/**
 * Enqueue scripts and styles.
 */
function _theme_assets() {
    wp_enqueue_style( '_theme-style', get_template_directory_uri() . '/style.min.css' );

    wp_enqueue_script( '_theme-js-main-head', get_template_directory_uri() . '/js/main-head.js', array(), null, true );
    wp_enqueue_script( '_theme-js-main', get_template_directory_uri() . '/js/main.js', array(), null, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', '_theme_assets' );
