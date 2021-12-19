<?php

// Theme title
add_theme_support('title-tag');

// Thumnail Image Area
add_theme_support('post-thumbnails', array('page','post'));
add_image_size('post-thumbnails', 516, 100, true);

// Excerpt
function zb_excerpt_more($more){
    return '<a href="'.get_permalink($post->ID).'">'.'Read more'.'</a>';
}
add_filter('excerpt_more', 'zb_excerpt_more');

function zb_excerpt_length(){
    return 20;
}
add_filter('excerpt_length', 'zb_excerpt_length', 999);

// Page Nav Function

function zb_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999, '%#%', get_pagenum_link(999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = __('Prev', 'zobayerpantho');
    $args['next_text'] = __('Next', 'zobayerpantho');
    if($max > 1)
    echo '<pre><div class="wp_pagenav">';
    if($total==1 && $max>1) $pages = '<p class="Page"> Page'.$current.'<span> of </span>'.$max.'</p>';
    echo $pages.paginate_links( $args);
    if($max > 1) echo '</div></pre>';
}
