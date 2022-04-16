<?php

/**
 * setup
 */
define('JU_DEV_MODE', true);

/**
 * includes
 */
include(get_theme_file_path('includes/front/enqueue.php'));
include(get_theme_file_path('includes/setup.php'));
include(get_theme_file_path('includes/custom-nav-walker.php'));

include(get_theme_file_path('includes/widgets.php'));

include(get_theme_file_path('includes/theme-customizer.php'));
include(get_theme_file_path('includes/customizer/social.php'));
include(get_theme_file_path('includes/customizer/misc.php'));
include(get_theme_file_path('includes/customizer/enqueue.php'));

include(get_theme_file_path('widgets/class.test-widget.php'));


/**
 * hooks
 */
add_action('wp_enqueue_scripts',        'ju_enqueue');
add_action('after_setup_theme',         'ju_setup_theme');
add_action('widgets_init',              'ju_widgets');
add_action('customize_register',        'ju_customize_register'); // this is the hook to set up the theme customizer
add_action('customize_preview_init',    'ju_customize_preview_init');


/**
 * shortcodes
 */



 /**
  * widget init classes
  */
  $CodeVilaThemeTestWidget = new Codevila_Test_Widget();