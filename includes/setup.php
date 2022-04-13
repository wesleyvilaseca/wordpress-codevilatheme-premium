<?php

function ju_setup_theme()
{
    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_theme_support('custom-log');

    add_theme_support('automatic-feed-links');

    add_theme_support('html5', ['comment-lis', 'comment-form', 'search-form', 'gallery', 'caption']);

    add_theme_support('stater-content', [
        'widgets'           => [
            'ju_sidebar' => [
                'text_business_info', 'search', 'text_about'
            ]
        ],
        //create the cystom image attachments used as post thumbnails for pages
        'attachments'       => [
            'image-about'   => [
                'post_title'    => __('About', 'codeVilaTheme'),
                'file'          => 'assets/images/about/1.jpg'
            ]
        ],

        // specify the core-defined pages to create and add custom thumbnails to some of them
        'posts'             => [
            'home'          => [
                'thumbnail'     => '{{image-about}}'
            ],
            'about'          => [
                'thumbnail'     => '{{image-about}}'
            ],
            'contact'          => [
                'thumbnail'     => '{{image-about}}'
            ],
            'blog'          => [
                'thumbnail'     => '{{image-about}}'
            ],
            'homepage-section'          => [
                'thumbnail'     => '{{image-about}}'
            ]
        ],

        //default to a static front page and assing the front and post pages
        'options'           => [
            'show_on_front'     => 'page',
            'page_on_front'     => '{{home}}',
            'page_for_posts'    => '{{blog}}'
        ],

        //set the front page section theme mods to the ids of the core-registered pages
        'theme_mods'        => [
            'ju_facebook_handle'    => 'codeVilaTheme',
            'ju_twitter_handle'     => 'codeVilaTheme',
            'ju_instagram_handle'   => 'codeVilaTheme',
            'ju_email'              => 'codeVilaTheme',
            'ju_phone_number'       => 'codeVilaTheme',
            'ju_header_show_search' => 'yes',
            'ju_header_show_cart'   => 'yes'
        ],

        //set up nav menus for each of the two areas registered in the theme
        'nav_menus'         => [
            'primary'       => [
                'name'      => __('Primary menu', 'codeVilaTheme'),
                'items'     => [
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact'
                ]
            ],

            'secondary'       => [
                'name'      => __('Secondary menu', 'codeVilaTheme'),
                'items'     => [
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact'
                ]
            ]
        ]
    ]);

    register_nav_menu('primary', __('Primary Menu', 'codeVilaTheme'));
    register_nav_menu('secondary', __('Secondary Menu', 'codeVilaTheme'));

    if (function_exists('quads_register_ad')) {
        quads_register_ad(
            [
                'location' => 'codeVilaTheme_header',
                'description' => 'codeVilaTheme_header Header position'
            ]
        );
    }

    load_theme_textdomain('codeVilaTheme', get_template_directory() . '/languages/');
}
