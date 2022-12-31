<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assests/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assests/js/bootstrap.bundle.min.js', array(), '1.0.0', true );



add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails');

register_nav_menus([
    'PM'=>'primary'
]);

register_sidebar([
    'name'=>'BD logo',
    'id'=>'ltr',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'Hero title',
    'id'=>'herotitle',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'Hero card 1',
    'id'=>'card1',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'photo line left',
    'id'=>'lineleft',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'photo title',
    'id'=>'phototitle',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'photo line right',
    'id'=>'lineright',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'photo card 1',
    'id'=>'photocard1',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'news title',
    'id'=>'newstitle',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'footer top left',
    'id'=>'ftleft',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'footer top right',
    'id'=>'ftright',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'footer buttom right',
    'id'=>'fblrft',
    'before_widget'=>'',
    'after_widget'=>""
]);
register_sidebar([
    'name'=>'footer buttom left',
    'id'=>'fbright',
    'before_widget'=>'',
    'after_widget'=>""
]);