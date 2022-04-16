<?php

function ju_widgets()
{
    register_sidebar([
        'name'              => __('my first theme sidebar', 'codeVilaTheme'),
        'id'                => 'ju_sidebar',
        'description'       => __('Sidebar for the theme udemy', 'codeVilaTheme'),
        'before_widget'     => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'      => '</div>',
        'before_title'      => '<h4>',
        'after_title'       => '</h4>' 
    ]);

    register_sidebar([
        'name'              => __('Services 1', 'codeVilaTheme'),
        'id'                => 'ju_services1',
        'description'       => __('First area', 'codeVilaTheme'),
        'before_widget'     => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'      => '</div>',
        'before_title'      => '<h4>',
        'after_title'       => '</h4>' 
    ]);

    register_sidebar([
        'name'              => __('Services 2', 'codeVilaTheme'),
        'id'                => 'ju_services2',
        'description'       => __('Second area', 'codeVilaTheme'),
        'before_widget'     => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'      => '</div>',
        'before_title'      => '<h4>',
        'after_title'       => '</h4>' 
    ]);

    register_sidebar([
        'name'              => __('Services 3', 'codeVilaTheme'),
        'id'                => 'ju_services3',
        'description'       => __('Third area', 'codeVilaTheme'),
        'before_widget'     => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'      => '</div>',
        'before_title'      => '<h4>',
        'after_title'       => '</h4>' 
    ]);
}
