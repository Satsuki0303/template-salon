<?php
/* ナビーメニュのカスタマイズ
* ---------------------------------------- */
function my_theme_menu_titles_customize_register($wp_customize) {
    $wp_customize->add_section('menu_titles_section', array(
        'title'    => 'メニューカスタマイズ',
        'priority' => 0,
    ));

    // メニュー1大
    $wp_customize->add_setting('menu1_large_title', array(
        'default'           => 'SALON',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu1_large_title_control', array(
        'label'    => 'メニュー1大',
        'section'  => 'menu_titles_section',
        'settings' => 'menu1_large_title',
        'type'     => 'text',
    ));

    //  メニュー1小
    $wp_customize->add_setting('menu1_small_title', array(
        'default'           => 'サロンの特徴',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu1_small_title_control', array(
        'label'    => 'メニュー1小',
        'section'  => 'menu_titles_section',
        'settings' => 'menu1_small_title',
        'type'     => 'text',
    ));

     // メニュー2大
     $wp_customize->add_setting('menu2_large_title', array(
        'default'           => 'ESTHETICIAN',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu2_large_title_control', array(
        'label'    => 'メニュー2大',
        'section'  => 'menu_titles_section',
        'settings' => 'menu2_large_title',
        'type'     => 'text',
    ));

    // メニュー2小
    $wp_customize->add_setting('menu2_small_title', array(
        'default'           => 'エステティシャン紹介',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu2_small_title_control', array(
        'label'    => 'メニュー2小',
        'section'  => 'menu_titles_section',
        'settings' => 'menu2_small_title',
        'type'     => 'text',
    ));

     // メニュー3大
     $wp_customize->add_setting('menu3_large_title', array(
        'default'           => 'CAMPAGIN',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu3_large_title_control', array(
        'label'    => 'メニュー3大',
        'section'  => 'menu_titles_section',
        'settings' => 'menu3_large_title',
        'type'     => 'text',
    ));

    // メニュー3小
    $wp_customize->add_setting('menu3_small_title', array(
        'default'           => 'お得なキャンベーン',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu3_small_title_control', array(
        'label'    => 'メニュー3小',
        'section'  => 'menu_titles_section',
        'settings' => 'menu3_small_title',
        'type'     => 'text',
    ));

    // メニュー4大
    $wp_customize->add_setting('menu4_large_title', array(
        'default'           => 'VOICE',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu4_large_title_control', array(
        'label'    => 'メニュー4大',
        'section'  => 'menu_titles_section',
        'settings' => 'menu4_large_title',
        'type'     => 'text',
    ));

    // メニュー4小
    $wp_customize->add_setting('menu4_small_title', array(
        'default'           => 'お客の声',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu4_small_title_control', array(
        'label'    => 'メニュー4小',
        'section'  => 'menu_titles_section',
        'settings' => 'menu4_small_title',
        'type'     => 'text',
    ));

    // メニュー5大
    $wp_customize->add_setting('menu5_large_title', array(
        'default'           => 'ACCESS',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu5_large_title_control', array(
        'label'    => 'メニュー5大',
        'section'  => 'menu_titles_section',
        'settings' => 'menu5_large_title',
        'type'     => 'text',
    ));

    // メニュー5小
    $wp_customize->add_setting('menu5_small_title', array(
        'default'           => 'アクセス',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('menu5_small_title_control', array(
        'label'    => 'メニュー5小',
        'section'  => 'menu_titles_section',
        'settings' => 'menu5_small_title',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'my_theme_menu_titles_customize_register');