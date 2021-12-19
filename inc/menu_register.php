<?php

register_nav_menu( 'main_menu', __('Main Menu', 'zobayerpantho'));

// Walker Menu Properties
function zb_navigation_description($item_output, $item, $depth, $args){
    if(!empty($item->description)){
        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'zb_navigation_description', 10, 4);