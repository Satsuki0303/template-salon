<?php
/* サイト基本情報
* ---------------------------------------- */

function my_custom_site_identity_settings($wp_customize) {
    //電話番号
    $wp_customize->add_setting('custom_phone_number', array(
        'default'           => '012-1234-5678',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
        'priority' => 1,
    ));


    $wp_customize->add_control('custom_phone_number_control', array(
        'label'    => '電話番号',
        'section'  => 'title_tagline',
        'settings' => 'custom_phone_number',
        'type'     => 'text',
    ));

    //住所
    $wp_customize->add_setting('custom_address', array(
        'default'           => 'XXXXXXXXXXXXXXXX',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
        'priority' => 1,
    ));


    $wp_customize->add_control('custom_address_control', array(
        'label'    => '住所',
        'section'  => 'title_tagline',
        'settings' => 'custom_address',
        'type'     => 'textarea',
    ));

    //予約サイト（hotpepper）
    $wp_customize->add_setting('custom_site_link', array(
        'default'           => 'https://beauty.hotpepper.jp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
        'priority' => 2,
    ));


    $wp_customize->add_control('custom_site_link_control', array(
        'label'    => '予約サイトのリンク',
        'section'  => 'title_tagline',
        'settings' => 'custom_site_link',
        'type'     => 'url',
    ));

    //Instagram
    $wp_customize->add_setting('ins_site_link', array(
        'default'           => 'https://www.instagram.com/',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
        'priority' => 3,
    ));


    $wp_customize->add_control('ins_site_link_control', array(
        'label'    => 'Instagram',
        'section'  => 'title_tagline',
        'settings' => 'ins_site_link',
        'type'     => 'url',
    ));

    //X
    $wp_customize->add_setting('x_site_link', array(
        'default'           => 'https://x.com/',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
        'priority' => 4,
    ));


    $wp_customize->add_control('x_site_link_control', array(
        'label'    => 'X',
        'section'  => 'title_tagline',
        'settings' => 'x_site_link',
        'type'     => 'url',
    ));
    //ヘッダーLogo
    $wp_customize->add_setting('custom_logo', array(
        'default'           => get_template_directory_uri() . '/assets/img/logo.png',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_logo_control', array(
        'label'    => __('サイトロゴ', ''),
        'section'  => 'title_tagline',
        'settings' => 'custom_logo',
        'priority' => 7,
    )));

    //フッターLogo
    $wp_customize->add_setting('footer_logo', array(
        'default'           => get_template_directory_uri() . '/assets/img/logo-trans.png',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_control', array(
        'label'    => __('フッターロゴ', 'kizuna'),
        'section'  => 'title_tagline',
        'settings' => 'footer_logo',
        'priority' => 8,
    )));


}
add_action('customize_register', 'my_custom_site_identity_settings');