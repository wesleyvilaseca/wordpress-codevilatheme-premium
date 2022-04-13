<?php

class JU_Custom_Nav_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '<ul id="menu-navbar" class="menu"> ';
    }

    public function start_el(&$output, $data_object, $depth = 0, $args = [], $current_object_id = 0)
    {
        $output .= '<li class="nav-item dropdown">';
        $output .= $args->before;
        $output .= '<a href="' . $data_object->url . '">';
        $output .= $args->link_before . $data_object->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
    }

    public function end_el(&$output, $data_object, $depth = 0, $args = [])
    {
       $output .= '</li>'; 
    }

    public function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
}
