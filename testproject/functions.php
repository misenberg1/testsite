
<?php

function testproject_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'testproject_theme_support');


function testproject_menus(){

    $location = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($location);

}

add_action('init', 'testproject_menus');

function testproject_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array('mytheme-bootstrap'), $version,'all'); 
    wp_enqueue_style('mytheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all'); 
    wp_enqueue_style('mytheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5,13.0', 'all'); 


}

add_action('wp_enqueue_scripts', 'testproject_register_styles');



function testproject_register_scripts(){

    wp_enqueue_script('mytheme-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('mytheme-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '3.4.1', true);
    wp_enqueue_script('mytheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
    wp_enqueue_script('mytheme-main',"http://localhost/wordpress/wp-content/themes/testproject/assets/js/main.js", array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'testproject_register_scripts');

?>