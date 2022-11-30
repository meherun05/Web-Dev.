<?php 

wp_enqueue_style('style1',get_stylesheet_uri());
wp_enqueue_style('style_bootstrap',get_template_directory_uri().'/CSS/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . './JS/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

register_nav_menus([
    'TM'=> 'primary',
    'FM'=> 'footer'
]);

register_sidebar(array(
    'name'=> 'Main Banner',
    'id'=> 'mainbanner',
    'before_widget'=>'',
    'after_widget'=>''
));
register_sidebar(array(
    'name'=> 'Sidebar image',
    'id'=> 'sideimg',
    'before_widget'=>' ',
    'after_widget'=>' '
));
register_sidebar(array(
    'name'=> 'Sidebar video',
    'id'=> 'sidevideo',
    'before_widget'=>' ',
    'after_widget'=>' '
));
register_sidebar(array(
    'name'=> 'footer top image',
    'id'=> 'fbimg',
    'before_widget'=>' ',
    'after_widget'=>' '
));
register_sidebar(array(
    'name'=> 'List',
    'id'=> 'list',
    'before_widget'=>' ',
    'after_widget'=>' '
));
update_option( 'thumbnail_size_w', 160 );
?>