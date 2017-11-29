<?php
    function my_theme_enqueue_styles() {

        $parent_style = 'rango-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'cenas-assinadas-style',
            get_stylesheet_uri(),
            NULL,
            filemtime( get_stylesheet_directory() . '/style.css' )
        );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', PHP_INT_MAX );
?>