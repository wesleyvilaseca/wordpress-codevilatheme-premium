<?php

function ju_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = JU_DEV_MODE ? time() : false;

    wp_register_style('ju_google_fonts',    'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver);
    wp_register_style('ju_bootstrap',       'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_style('ju_style',           $uri . '/assets/css/style.css', [], $ver);
    wp_register_style('ju_dark',            $uri . '/assets/css/dark.css', [], $ver);
    wp_register_style('ju_font_icons',      $uri . '/assets/css/font-icons.css', [], $ver);
    wp_register_style('ju_animate',         $uri . '/assets/css/animate.css', [], $ver);
    wp_register_style('ju_magnific_popup',  $uri . '/assets/css/magnific-popup.css', [], $ver);
    wp_register_style('ju_responsive',      $uri . '/assets/css/custom.css', [], $ver);
    wp_register_style('ju_custom',          $uri . '/asssets/css/responsive.css', [], $ver);

    wp_enqueue_style('ju_google_fonts');
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_style');
    wp_enqueue_style('ju_dark');
    wp_enqueue_style('ju_font_icons');
    wp_enqueue_style('ju_animate');
    wp_enqueue_style('ju_magnific_popup');
    wp_enqueue_style('ju_responsive');
    wp_enqueue_style('ju_custom');

    $read_mode_color = get_theme_mod('ju_read_more_color');
    wp_add_inline_style(
        'ju_custom',
        'a.more-link{color: ' . $read_mode_color . '; border-color: ' . $read_mode_color . ';}'
    );

    $title_post = get_theme_mod('ju_post_title_color');
    wp_add_inline_style(
        'ju_custom',
        '.entry-title h2 a{color: ' . $title_post . '; border-color: ' . $title_post . ';}'
    );

    $title_post_hover = get_theme_mod('ju_post_title_color_hover');
    wp_add_inline_style(
        'ju_custom',
        '.entry-title h2 a:hover{color: ' . $title_post_hover . '; border-color: ' . $title_post_hover . ';}'
    );

    // $read_mode_color = get_theme_mod('title_post');
    // wp_add_inline_style(
    //     'ju_custom',
    //     'entry-title{color: ' . $read_mode_color . '; border-color: ' . $read_mode_color . ';}'
    // );


    //name register | route | depends on another scripts | script version | load script on final 
    wp_register_script('ju_plugins', $uri . '/assets/js/plugins.js', [], $ver, $in_footer = true);
    wp_register_script('ju_functions', $uri . '/assets/js/functions.js', [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_plugins');
    wp_enqueue_script('ju_functions');
}
