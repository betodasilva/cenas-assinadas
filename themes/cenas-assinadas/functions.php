<?php
    function my_theme_enqueue_styles() {

        $parent_style = 'rango-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'rango-child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', PHP_INT_MAX );

    
    function load_scripts() {
        // Don't load JS if current product type is bundle to prevent the page from not working
        if (!(wc_get_product() && wc_get_product()->is_type('bundle'))) {
            wp_deregister_script( 'wc-add-to-cart-variation' );
            wp_register_script( 'wc-add-to-cart-variation', get_stylesheet_directory_uri() . '/assets/js/add-to-cart-variation.js', array( 'jquery', 'wp-util' ));
        }
        wp_enqueue_script('wc-add-to-cart-variation');
        wp_enqueue_script('ca-frame-preview', get_stylesheet_directory_uri() . '/assets/js/ca-frame-preview.js', '1.0.0' );
    }

    add_action( 'wp_enqueue_scripts', 'load_scripts', 999 );


    function child_theme_slug_setup() {
        load_theme_textdomain( 'rango', get_stylesheet_directory() . '/languages/rango' );
        load_child_theme_textdomain( 'cenas-assinadas', get_stylesheet_directory() . '/languages' );
    }
    add_action( 'after_setup_theme', 'child_theme_slug_setup' );

    /* change single product layout */

    function change_single_product_layout() {

        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 2);
        remove_action('woocommerce_single_product_summary', 'ftc_template_single_availability', 4);
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 6);
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

        add_action('bt_after_product_image', 'woocommerce_template_single_rating', 20);
        add_action('bt_after_product_image', 'ftc_template_single_availability', 30);
        add_action('bt_after_product_image', 'woocommerce_template_single_excerpt', 40);

    }
    add_action( 'init', 'change_single_product_layout' );

    // remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);

    // add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

?>



