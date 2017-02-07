<?php
    function custom_script_enqueue(){
        wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/custom.css', array(), '0.1', 'all' );
        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/custom.js' ,array(), 0.1, true);
    }
    add_action( 'wp_enqueue_scripts', 'custom_script_enqueue');

    function () {
        //Theme Support Menus
        add_theme_support( 'menus' );
    }

    add_action( 'after_setup_theme', 'custom_theme_setup' );