<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails');

register_nav_menus([
    'TM'=>'Top Menu'
]);

register_sidebar([
    'name'=>'Slider right header',
    'id'=>'sllefth',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Slider right text',
    'id'=>'slleftt',
    'after_widget'=>'',
    'before_widget'=>''
]);



register_sidebar([
    'name'=>'Card 1',
    'id'=>'card1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Card 2',
    'id'=>'card2',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Card 3',
    'id'=>'card3',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Card right 1',
    'id'=>'cardright1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Card right 2',
    'id'=>'cardright2',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Card right 3',
    'id'=>'cardright3',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Card right 4',
    'id'=>'cardright4',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Footer Top Left',
    'id'=>'ftleft',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Footer Top center',
    'id'=>'ftcenter',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Footer Top Right',
    'id'=>'ftright',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Footer Bottom',
    'id'=>'fb',
    'after_widget'=>'',
    'before_widget'=>''
]);




