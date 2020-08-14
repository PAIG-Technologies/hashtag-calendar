<?php
define("HASHTAG_THEME_VERSION","1.34");
define("HASHTAG_STYLE_VERSION","1.0.33");
define("HASHTAG_SCRIPT_VERSION","1.0.33");

define("HASHTAG_CHILD_DIRECTORY",get_stylesheet_directory());
define("HASHTAG_CHILD_URL",get_stylesheet_directory_uri());

add_action("wp_enqueue_scripts","add_stylesheet_script");

function add_stylesheet_script(){
    $css_folder=get_stylesheet_directory_uri()."/assets/css/";
    wp_enqueue_style( 'base-ndis-style', $css_folder."style.css", array(), HASHTAG_STYLE_VERSION );
    wp_enqueue_style( 'ndis-user', $css_folder."user.css", array(), HASHTAG_STYLE_VERSION );
    wp_enqueue_style( 'ndis-color', $css_folder."color.css", array(), HASHTAG_STYLE_VERSION );
    wp_enqueue_style( 'ndis-style', get_stylesheet_uri(), array(), HASHTAG_STYLE_VERSION );
}