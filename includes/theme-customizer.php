<?php

function ju_customize_register($wp_customize)
{
    $wp_customize->add_panel('codeVilaTheme', [
        'title'         => __('CodeVila', 'codeVilaTheme'),
        'description'   => '<p> Udemy Theme Settings </p>',
        'priority'      => 160
    ]);

    $wp_customize->get_section('title_tagline')->title = 'General';

    ju_social_customizer_section($wp_customize);
    ju_misc_customizer_section($wp_customize);
}
