<?php

class Codevila_Test_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_options = [
            'description' => __('Your most beloved testmonials', 'codeVilaTheme')
        ];
        parent::__construct(
            'codevila-widget-test',
            'CodeVila WidGet Test',
            $widget_options
        );

        add_action('widgets_init', function(){
            register_widget('Codevila_Test_Widget');
        });
    }

    public function form($instance)
    {
    }

    public function widget( $args, $instance)
    {
    }

    public function update( $newinstance, $oldinstance)
    {
    }
}