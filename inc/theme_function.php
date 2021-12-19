<?php

function zb_customizar_register($wp_customize){
    // Header Area Function
    $wp_customize->add_section('zb_header_area', array(
        'title'=>__('Header Area', 'zobayerpantho'),
        'description'=> __('If you interested to update your header area, you can do it here.', 'zobayerpantho'),

    ));

    $wp_customize->add_setting('zb_logo', array(
        'default'=>get_bloginfo('template_directory').'/img/rsz_logo_en.png',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'zb_logo', array(
        'label'=>__('Logo Upload', 'zobayerpantho'),
        'description'=> __('If you interested to change or update your logo, you can do it.', 'zobayerpantho'), 
        'setting'=>'zb_logo',
        'section'=>'zb_header_area',
    )));

    // Menu Position Option
    $wp_customize->add_section('zb_menu_option', array(
        'title'=>__('Menu Position', 'zobayerpantho'),
        'description'=>'If you interested to change your menu position you can do it',
    ));

    $wp_customize->add_setting('zb_menu_position', array(
        'default'=>'right_menu',
    ));

    $wp_customize->add_control('zb_menu_position', array(
        'label'=>'Menu Position',
        'description'=>'Select your menu position',
        'setting'=>'zb_menu_position',
        'section'=>'zb_menu_option',
        'type'=>'radio',
        'choices'=>array(
            'left_menu'=>'Left Menu',
            'right_menu'=>'Right Menu',
            'center_menu'=>'Center Menu',
        ),
    ));

    // Footer Area Function
    $wp_customize->add_section('zb_footer_area', array(
        'title' => __('Footer Area', 'zobayerpantho'),
        'description' => ('If you interested to change or update your footer area, you can do it here.'),
    ));

    $wp_customize->add_setting('zb_copyright_section', array(
        'default' => '&copy; Copyright 2021 | 2022',
    ));

    $wp_customize->add_control('zb_copyright_section', array(
        'label' => 'Copyright Text',
        'description' => 'If need you can update your copyright text from here',
        'setting' => 'zb_copyright_section',
        'section' => 'zb_footer_area',
    ));
}
add_action('customize_register', 'zb_customizar_register');
