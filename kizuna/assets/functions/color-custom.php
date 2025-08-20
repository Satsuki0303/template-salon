<?php
function my_theme_color_customize_register($wp_customize) {
    $wp_customize->add_setting('main_color', array(
        'default' => '#8b4513',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('select_color', array(
        'default' => '#ceb6a9',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_color_control', array(
        'label' => __('メインカラー1', 'kizuna'),
        'section' => 'colors',
        'settings' => 'main_color',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'select_color_control', array(
        'label' => __('メインカラー2', 'kizuna'),
        'section' => 'colors',
        'settings' => 'select_color',
    )));
}
add_action('customize_register', 'my_theme_color_customize_register');