<?php

// Sidebar Register Function

function zb_widgets_register(){
    register_sidebar( array(
        'name' => __('Main Widget Area', 'zobayerpantho'),
        'id' => 'sidebar-1',
        'description' => __('Appears in the sidebar in blog page & other page', 'zobayerpantho'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',

    ));

    register_sidebar( array(
        'name' => __('Footer 1', 'zobayerpantho'),
        'id' => 'footer-1',
        'description' => __('Appears in the sidebar in blog page & other page', 'zobayerpantho'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',

    ));

    register_sidebar( array(
        'name' => __('Footer 2', 'zobayerpantho'),
        'id' => 'footer-2',
        'description' => __('Appears in the sidebar in blog page & other page', 'zobayerpantho'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',

    ));

    register_sidebar( array(
        'name' => __('Footer 3', 'zobayerpantho'),
        'id' => 'footer-3',
        'description' => __('Appears in the sidebar in blog page & other page', 'zobayerpantho'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',

    ));
}
add_action( 'widgets_init', 'zb_widgets_register');