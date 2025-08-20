<?php
/*スライドショー設置
* ---------------------------------------- */
function my_slideshow_customize_register($wp_customize) {
    // Slideshow Panel
    $wp_customize->add_panel('slideshow_panel', array(
        'title'    => 'スライドショー設定',
        'priority' => 1,
    ));

    // Slideshow Section
    $wp_customize->add_section('slideshow_section', array(
        'title'    => 'スライドショーセクション',
        'panel'    => 'slideshow_panel',
        'priority' => 2,
    ));

    // キャッチコピー1
    $wp_customize->add_setting('slideshow_text1', array(
        'default'           => '心も体も癒される、',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('slideshow_text1_control', array(
        'label'    => 'キャッチコピー1',
        'section'  => 'slideshow_section',
        'settings' => 'slideshow_text1',
        'type'     => 'text',
    ));
    //キャッチコピー2
    $wp_customize->add_setting('slideshow_text2', array(
        'default'           => '贅沢なひととき。',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('slideshow_text2_control', array(
        'label'    => 'キャッチコピー2',
        'section'  => 'slideshow_section',
        'settings' => 'slideshow_text2',
        'type'     => 'text',
    ));

    // スライド画像1枚目
    $wp_customize->add_setting('slideshow_image1', array(
        'default'           => get_template_directory_uri() . '/assets/img/1440.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slideshow_image1_control', array(
        'label'    => 'スライド画像1枚目',
        'section'  => 'slideshow_section',
        'settings' => 'slideshow_image1',
    )));

     // スライド画像2枚目
     $wp_customize->add_setting('slideshow_image2', array(
        'default'           => get_template_directory_uri() . '/assets/img/1440.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slideshow_image2_control', array(
        'label'    => 'スライド画像2枚目',
        'section'  => 'slideshow_section',
        'settings' => 'slideshow_image2',
    )));

     // スライド画像3枚目
     $wp_customize->add_setting('slideshow_image3', array(
        'default'           => get_template_directory_uri() . '/assets/img/1440.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slideshow_image3_control', array(
        'label'    => 'スライド画像3枚目',
        'section'  => 'slideshow_section',
        'settings' => 'slideshow_image3',
    )));

    //Top見出し（セクション3と繋がる）
    $wp_customize->add_setting('slideshow_campaign_text', array(
        'default'           => '\八月のおすすめ/',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('slideshow_campaign_text_control', array(
        'label'    => 'Top見出し(セクション3と繋がる)',
        'section'  => 'slideshow_section',
        'settings' => 'slideshow_campaign_text',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'my_slideshow_customize_register');