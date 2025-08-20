<?php
/* セクション設置
* ---------------------------------------- */
add_action('customize_register', 'my_slideshow_customize_register');


function my_customize( $wp_customize ) {

    // セクションパネル追加
    $wp_customize->add_panel('section_panel', array(
        'title'    => 'セクション设置',
        'priority' => 1,
    ));

    // セクション1
    $wp_customize->add_section('section_one_section', array(
        'title'    => 'セクション1',
        'panel'    => 'section_panel',
        'priority' => 2,
    ));


    $wp_customize->add_setting('section_one_text', array(
        'default'           => '長い間私たちのサロンをご愛顧いただきありがとうございます。当店ではお得なキャンベーンを用意しております。',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_one_text_control', array(
        'label'    => 'セクション1テキスト',
        'section'  => 'section_one_section',
        'settings' => 'section_one_text',
        'type'     => 'text',
        'priority' => 3,
    ));

    $wp_customize->add_setting('first_title', array(
        'default'           => 'タイトル1',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('first_title_control', array(
        'label'    => 'タイトル1',
        'section'  => 'section_one_section',
        'settings' => 'first_title',
        'type'     => 'text',
        'priority' => 4,
    ));

    $wp_customize->add_setting('first_text', array(
        'default'           => 'テキスト1',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('first_text_control', array(
        'label'    => 'テキスト1',
        'section'  => 'section_one_section',
        'settings' => 'first_text',
        'type'     => 'text',
        'priority' => 5,
    ));

    $wp_customize->add_setting('first_image', array(
        'default'           => get_template_directory_uri() . '/assets/img/330X180.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'first_image_control', array(
        'label'    => '画像1',
        'section'  => 'section_one_section',
        'settings' => 'first_image',
        'priority' => 6,
    )));

    $wp_customize->add_setting('second_title', array(
        'default'           => 'タイトル2',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('second_title_control', array(
        'label'    => 'タイトル2',
        'section'  => 'section_one_section',
        'settings' => 'second_title',
        'type'     => 'text',
        'priority' => 7,
    ));

    $wp_customize->add_setting('second_text', array(
        'default'           => 'テキスト2',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('second_text_control', array(
        'label'    => 'テキスト2',
        'section'  => 'section_one_section',
        'settings' => 'second_text',
        'type'     => 'text',
        'priority' => 8,
    ));

    $wp_customize->add_setting('second_image', array(
        'default'           => get_template_directory_uri() . '/assets/img/330X180.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_image_control', array(
        'label'    => '图像2',
        'section'  => 'section_one_section',
        'settings' => 'second_image',
        'priority' => 9,
    )));

    $wp_customize->add_setting('third_title', array(
        'default'           => 'タイトル3',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('third_title_control', array(
        'label'    => 'タイトル3',
        'section'  => 'section_one_section',
        'settings' => 'third_title',
        'type'     => 'text',
        'priority' => 10,
    ));

    $wp_customize->add_setting('third_text', array(
        'default'           => 'テキスト3',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('third_text_control', array(
        'label'    => 'テキスト3',
        'section'  => 'section_one_section',
        'settings' => 'third_text',
        'type'     => 'text',
        'priority' => 11,
    ));

    $wp_customize->add_setting('third_image', array(
        'default'           => get_template_directory_uri() . '/assets/img/330X180.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'third_image_control', array(
        'label'    => '图像3',
        'section'  => 'section_one_section',
        'settings' => 'third_image',
        'priority' => 12,
    )));

    $wp_customize->add_setting('forth_title', array(
        'default'           => 'タイトル4',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('forth_title_control', array(
        'label'    => 'タイトル4(省略可)',
        'section'  => 'section_one_section',
        'settings' => 'forth_title',
        'type'     => 'text',
        'priority' => 13,
    ));

    $wp_customize->add_setting('forth_text', array(
        'default'           => 'テキスト4(省略可)',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('forth_text_control', array(
        'label'    => 'テキスト4(省略可)',
        'section'  => 'section_one_section',
        'settings' => 'forth_text',
        'type'     => 'text',
        'priority' => 14,
    ));

    $wp_customize->add_setting('forth_image', array(
        'default'           => get_template_directory_uri() . '/assets/img/330X180.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'forth_image_control', array(
        'label'    => '图像4(省略可)',
        'section'  => 'section_one_section',
        'settings' => 'forth_image',
        'priority' => 15,
    )));

    // セクション2
    $wp_customize->add_section('section_two_section', array(
        'title'    => 'セクション2',
        'panel'    => 'section_panel',
        'priority' => 2,
    ));

    // セクションテキスト

    $wp_customize->add_setting('section_two_text', array(
        'default'           => 'セクション2テキスト',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_text_control', array(
        'label'    => 'セクション2テキスト',
        'section'  => 'section_two_section',
        'settings' => 'section_two_text',
        'type'     => 'text',
        'priority' => 1,
    ));
 // お名前
    $wp_customize->add_setting('section_two_name', array(
        'default'           => 'お名前',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_name_control', array(
        'label'    => 'お名前',
        'section'  => 'section_two_section',
        'settings' => 'section_two_name',
        'type'     => 'text',
        'priority' => 2,
    ));

//セクション2写真
    $wp_customize->add_setting('section_two_image', array(
        'default'           => get_template_directory_uri() . '/assets/img/intro-photo.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_two_image_control', array(
        'label'    => 'セクション2画像',
        'section'  => 'section_two_section',
        'settings' => 'section_two_image',
        'priority' => 3,
    )));
    // タイムライン1
    $wp_customize->add_setting('section_two_year1', array(
        'default'           => '2015',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_year1_control', array(
        'label'    => '時系列1',
        'section'  => 'section_two_section',
        'settings' => 'section_two_year1',
        'type'     => 'text',
        'priority' => 3,
    ));
// timeline1-title
    $wp_customize->add_setting('section_two_title1', array(
        'default'           => '美容専門学校から卒業',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_title1_control', array(
        'label'    => '概要1',
        'section'  => 'section_two_section',
        'settings' => 'section_two_title1',
        'type'     => 'text',
        'priority' => 3,
    ));

    // timeline1-text
    $wp_customize->add_setting('section_two_text1', array(
        'default'           => '心を込めてさまざまなサービスを提供しております。',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_text1_control', array(
        'label'    => '説明文1(省略可)',
        'section'  => 'section_two_section',
        'settings' => 'section_two_text1',
        'type'     => 'text',
        'priority' => 3,
    ));

    // タイムライン2
    $wp_customize->add_setting('section_two_year2', array(
        'default'           => '2018',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_year2_control', array(
        'label'    => '時系列2',
        'section'  => 'section_two_section',
        'settings' => 'section_two_year2',
        'type'     => 'text',
        'priority' => 7,
    ));
// タイムライン2-タイトル
    $wp_customize->add_setting('section_two_title2', array(
        'default'           => '美容専門学校から卒業',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_title2_control', array(
        'label'    => '概要2',
        'section'  => 'section_two_section',
        'settings' => 'section_two_title2',
        'type'     => 'text',
        'priority' => 8,
    ));

    // タイムライン2-テキスト
    $wp_customize->add_setting('section_two_text2', array(
        'default'           => '心を込めてさまざまなサービスを提供しております。',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_text2_control', array(
        'label'    => '説明文2(省略可)',
        'section'  => 'section_two_section',
        'settings' => 'section_two_text2',
        'type'     => 'text',
        'priority' => 9,
    ));


    // タイムライン3
    $wp_customize->add_setting('section_two_year3', array(
        'default'           => '2021',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_year3_control', array(
        'label'    => '時系列3',
        'section'  => 'section_two_section',
        'settings' => 'section_two_year3',
        'type'     => 'text',
        'priority' => 10,
    ));
// タイムライン3-タイトル
    $wp_customize->add_setting('section_two_title3', array(
        'default'           => '美容専門学校から卒業',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_title3_control', array(
        'label'    => '概要3',
        'section'  => 'section_two_section',
        'settings' => 'section_two_title3',
        'type'     => 'text',
        'priority' => 11,
    ));

    // タイムライン3-テキスト
    $wp_customize->add_setting('section_two_text3', array(
        'default'           => '心を込めてさまざまなサービスを提供しております。',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_text3_control', array(
        'label'    => '説明文3(省略可)',
        'section'  => 'section_two_section',
        'settings' => 'section_two_text3',
        'type'     => 'text',
        'priority' => 12,
    ));

    // タイムライン4
    $wp_customize->add_setting('section_two_year4', array(
        'default'           => '2023',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_year4_control', array(
        'label'    => '時系列4',
        'section'  => 'section_two_section',
        'settings' => 'section_two_year4',
        'type'     => 'text',
        'priority' => 13,
    ));
// タイムライン4-タイトル
    $wp_customize->add_setting('section_two_title4', array(
        'default'           => '美容専門学校から卒業',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_title4_control', array(
        'label'    => '概要4',
        'section'  => 'section_two_section',
        'settings' => 'section_two_title4',
        'type'     => 'text',
        'priority' => 14,
    ));

    // タイムライン4-テキスト
    $wp_customize->add_setting('section_two_text4', array(
        'default'           => '心を込めてさまざまなサービスを提供しております。',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_two_text4_control', array(
        'label'    => '説明文4(省略可)',
        'section'  => 'section_two_section',
        'settings' => 'section_two_text4',
        'type'     => 'text',
        'priority' => 15,
    ));

    //セクション3
    $wp_customize->add_section('section_three_section', array(
        'title'    => 'セクション3',
        'panel'    => 'section_panel',
        'priority' => 3,
    ));

    // セクション3テキスト

    $wp_customize->add_setting('section_three_text', array(
        'default'           => '長い間私たちのサロンをご愛顧いただきありがとうございます。当店ではお得なキャンベーンを用意しております。',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_three_text_control', array(
        'label'    => 'セクション3テキスト',
        'section'  => 'section_three_section',
        'settings' => 'section_three_text',
        'type'     => 'text',
        'priority' => 1,
    ));

// セクション3-タイトル1
    $wp_customize->add_setting('section_three_title1', array(
        'default'           => '\初回限定/',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_three_title1_control', array(
        'label'    => 'タイトル1',
        'section'  => 'section_three_section',
        'settings' => 'section_three_title1',
        'type'     => 'text',
        'priority' => 2,
    ));

    // セクション3-テキスト1
    $wp_customize->add_setting('section_three_text1', array(
        'default'           => 'menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_three_text1_control', array(
        'label'    => 'テキスト1',
        'section'  => 'section_three_section',
        'settings' => 'section_three_text1',
        'type'     => 'textarea',
        'priority' => 3,
    ));

// セクション3-タイトル2
    $wp_customize->add_setting('section_three_title2', array(
        'default'           => '\八月限定/',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_three_title2_control', array(
        'label'    => 'タイトル2',
        'section'  => 'section_three_section',
        'settings' => 'section_three_title2',
        'type'     => 'text',
        'priority' => 3,
    ));

    // セクション3-テキスト2
    $wp_customize->add_setting('section_three_text2', array(
        'default'           => 'menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('section_three_text2_control', array(
        'label'    => 'テキスト2',
        'section'  => 'section_three_section',
        'settings' => 'section_three_text2',
        'type'     => 'textarea',
        'priority' => 3,
    ));

// セクション3-タイトル3
$wp_customize->add_setting('section_three_title3', array(
    'default'           => '\回数券/',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_three_title3_control', array(
    'label'    => 'タイトル3(省略可)',
    'section'  => 'section_three_section',
    'settings' => 'section_three_title3',
    'type'     => 'text',
    'priority' => 3,
));

// セクション3-テキスト3
$wp_customize->add_setting('section_three_text3', array(
    'default'           => 'menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1menu1',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_three_text3_control', array(
    'label'    => 'テキスト3(省略可)',
    'section'  => 'section_three_section',
    'settings' => 'section_three_text3',
    'type'     => 'textarea',
    'priority' => 3,
));

 // セクション4
 $wp_customize->add_section('section_four_section', array(
    'title'    => 'セクション4',
    'panel'    => 'section_panel',
    'priority' => 4,
));

// セクション4名前1

$wp_customize->add_setting('section_four_name1', array(
    'default'           => 'XX',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_name1_control', array(
    'label'    => '名前1',
    'section'  => 'section_four_section',
    'settings' => 'section_four_name1',
    'type'     => 'text',
    'priority' => 1,
));

// セクション4出所1

$wp_customize->add_setting('section_four_pro1', array(
    'default'           => 'Hotpper',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_pro1_control', array(
    'label'    => '出所1',
    'section'  => 'section_four_section',
    'settings' => 'section_four_pro1',
    'type'     => 'text',
    'priority' => 1,
));
//セクション4写真1
$wp_customize->add_setting('section_four_image1', array(
    'default'           => get_template_directory_uri() . '/assets/img/profile.jpg',
    'transport'         => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_four_image1_control', array(
    'label'    => '画像1(省略可)',
    'section'  => 'section_four_section',
    'settings' => 'section_four_image1',
    'priority' => 1,
)));

// セクション4フェース1

$wp_customize->add_setting('section_four_phase1', array(
    'default'           => '「効果顕著！」',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_phase1_control', array(
    'label'    => 'セクション4フェース1',
    'section'  => 'section_four_section',
    'settings' => 'section_four_phase1',
    'type'     => 'text',
    'priority' => 1,
));

// セクション4テキスト1

$wp_customize->add_setting('section_four_text1', array(
    'default'           => '当サロンは、閑静な街区に位置しており、メイクルームやシャワー室も完備した完全個室をご用意しています。ご自身だけの静かな空間で、安心して贅沢なひとときをお過ごしください。',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_test1_control', array(
    'label'    => 'セクション4テキスト1',
    'section'  => 'section_four_section',
    'settings' => 'section_four_text1',
    'type'     => 'text',
    'priority' => 1,
));

// セクション4名前2

$wp_customize->add_setting('section_four_name2', array(
    'default'           => '名前',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_name2_control', array(
    'label'    => '名前2',
    'section'  => 'section_four_section',
    'settings' => 'section_four_name2',
    'type'     => 'text',
    'priority' => 1,
));

// セクション4出所2

$wp_customize->add_setting('section_four_pro2', array(
    'default'           => 'Instgram',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_pro2_control', array(
    'label'    => '出所2',
    'section'  => 'section_four_section',
    'settings' => 'section_four_pro2',
    'type'     => 'text',
    'priority' => 2,
));

//セクション4写真2
$wp_customize->add_setting('section_four_image2', array(
    'default'           => get_template_directory_uri() . '/assets/img/profile.jpg',
    'transport'         => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_four_image2_control', array(
    'label'    => '画像2(省略可)',
    'section'  => 'section_four_section',
    'settings' => 'section_four_image2',
    'priority' => 1,
)));
// セクション4フェース2

$wp_customize->add_setting('section_four_phase2', array(
    'default'           => '「効果顕著！」',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_phase2_control', array(
    'label'    => 'セクション4フェース2',
    'section'  => 'section_four_section',
    'settings' => 'section_four_phase2',
    'type'     => 'text',
    'priority' => 1,
));

// セクション4テキスト2

$wp_customize->add_setting('section_four_text2', array(
    'default'           => '当サロンは、閑静な街区に位置しており、メイクルームやシャワー室も完備した完全個室をご用意しています。ご自身だけの静かな空間で、安心して贅沢なひとときをお過ごしください。',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_test2_control', array(
    'label'    => 'セクション4テキスト2',
    'section'  => 'section_four_section',
    'settings' => 'section_four_text2',
    'type'     => 'text',
    'priority' => 1,
));

// セクション4名前3

$wp_customize->add_setting('section_four_name3', array(
    'default'           => '名前',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_name3_control', array(
    'label'    => '名前3',
    'section'  => 'section_four_section',
    'settings' => 'section_four_name3',
    'type'     => 'text',
    'priority' => 1,
));

// セクション4出所3

$wp_customize->add_setting('section_four_pro3', array(
    'default'           => 'Googlemap',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_pro3_control', array(
    'label'    => '出所2',
    'section'  => 'section_four_section',
    'settings' => 'section_four_pro3',
    'type'     => 'text',
    'priority' => 1,
));

//セクション4写真3
$wp_customize->add_setting('section_four_image3', array(
    'default'           => get_template_directory_uri() . '/assets/img/profile.jpg',
    'transport'         => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_four_image3_control', array(
    'label'    => '画像3(省略可)',
    'section'  => 'section_four_section',
    'settings' => 'section_four_image3',
    'priority' => 1,
)));

// セクション4フェース3

$wp_customize->add_setting('section_four_phase3', array(
    'default'           => '「効果顕著！」',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_phase3_control', array(
    'label'    => 'セクション4フェース3',
    'section'  => 'section_four_section',
    'settings' => 'section_four_phase3',
    'type'     => 'text',
    'priority' => 1,
));

// セクション4テキスト3

$wp_customize->add_setting('section_four_text3', array(
    'default'           => '当サロンは、閑静な街区に位置しており、メイクルームやシャワー室も完備した完全個室をご用意しています。ご自身だけの静かな空間で、安心して贅沢なひとときをお過ごしください。',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_four_test3_control', array(
    'label'    => 'セクション4テキスト3',
    'section'  => 'section_four_section',
    'settings' => 'section_four_text3',
    'type'     => 'text',
    'priority' => 1,
));

// セクション5
$wp_customize->add_section('section_five_section', array(
    'title'    => 'セクション5',
    'panel'    => 'section_panel',
    'priority' => 4,
));
// セクション5テキスト

$wp_customize->add_setting('section_five_text', array(
    'default'           => '当サロンは、閑静な街区に位置しており、メイクルームやシャワー室も完備した完全個室をご用意しています。ご自身だけの静かな空間で、安心して贅沢なひとときをお過ごしください。',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_five_text_control', array(
    'label'    => 'セクション5テキスト',
    'section'  => 'section_five_section',
    'settings' => 'section_five_text',
    'type'     => 'text',
    'priority' => 1,
));

// E-mail

$wp_customize->add_setting('section_five_mail', array(
    'default'           => 'your-email@example.com',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_five_mail_control', array(
    'label'    => 'e-mailアドレス',
    'section'  => 'section_five_section',
    'settings' => 'section_five_mail',
    'type'     => 'text',
    'priority' => 1,
));

//Map

$wp_customize->add_setting('section_five_map', array(
    'default'           => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509897!2d144.9559235155041!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5770cbdba769801!2sVictoria%20Harbour!5e0!3m2!1sen!2sau!4v1644965420143!5m2!1sen!2sau',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('section_five_map_control', array(
    'label'    => 'googlemap住所(埋め込む)',
    'section'  => 'section_five_section',
    'settings' => 'section_five_map',
    'type'     => 'text',
    'priority' => 1,
));


}

add_action('customize_register', 'my_customize');