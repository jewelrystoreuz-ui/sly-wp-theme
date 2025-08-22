<?php
function sly_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'woocommerce' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'sly' ),
            'footer'  => __( 'Footer Menu', 'sly' ),
            'utility' => __( 'Utility Menu', 'sly' ),
        )
    );

    load_theme_textdomain( 'sly', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'sly_theme_setup' );

function sly_enqueue_scripts() {
    wp_enqueue_style( 'sly-main', get_template_directory_uri() . '/assets/css/main.css', array(), null );
    wp_enqueue_script( 'sly-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'sly_enqueue_scripts' );
