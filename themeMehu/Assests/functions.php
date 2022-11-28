<?php 

wp_enqueue_style('style1',get_stylesheet_uri());
wp_enqueue_style('style_bootstrap',get_template_directory_uri().'/CSS/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . './JS/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support('custom-logo');

register_nav_menus([
    'TM'=> 'primary',
    'FM'=> 'footer'
]);
?>