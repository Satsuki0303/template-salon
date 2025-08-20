<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/splide.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/stylesheet.css" rel="stylesheet">
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/custom-script.js" type="text/javascript" charset="utf-8"></script>
    <?php
    // カスタマカラー設置
    $main_color = get_theme_mod('main_color', '#8B4513');
    $select_color = get_theme_mod('select_color', '#CEB6A9');
    ?>
    <style>
        :root {
            --main-color: <?php echo esc_attr($main_color); ?>;
            --select-color: <?php echo esc_attr($select_color); ?>;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body
<?php body_class(); ?>>
<?php get_header(); ?>
<?php wp_body_open(); ?>
<main>
<section id="image-carousel" class="splide" aria-label="<?php _e('お気に入りの写真', 'kizuna'); ?>">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <?php if (get_theme_mod('slideshow_image1')) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('slideshow_image1')); ?>" alt="">
                <?php endif; ?>
            </li>
            <li class="splide__slide">
                <?php if (get_theme_mod('slideshow_image2')) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('slideshow_image2')); ?>" alt="">
                <?php endif; ?>
            </li>
            <li class="splide__slide">
                <?php if (get_theme_mod('slideshow_image3')) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('slideshow_image3')); ?>" alt="">
                <?php endif; ?>
            </li>
        </ul>
    </div>

    <div class="wrap1">
        <h2 class="text"><?php echo esc_html(get_theme_mod('slideshow_text1', __('心も体も癒される、', 'kizuna'))); ?><br><span><?php echo esc_html(get_theme_mod('slideshow_text2', __('贅沢なひととき。', 'kizuna'))); ?></span></h2>
        <div class="circle">
            <a href="#three">
                <h3><?php echo esc_html(get_theme_mod('slideshow_campaign_text', __('\八月のおすすめ/', 'kizuna'))); ?></h3>
            </a>
        </div>
    </div>
</section>

<section id="one">
    <a href="#" id="back-to-top" class="back-to-top">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/back.png" alt="<?php _e('Back to Top', 'kizuna'); ?>">
    </a>
    <div class="wrap">
        <div class="section-title-box">
            <div class="title-wrapper">
                <h4 class="maincolor"><?php echo esc_html(get_theme_mod('menu1_large_title', __('default', 'kizuna'))); ?></h4>
                <div class="divider"></div>
            </div>
            <p class="f12"><?php echo esc_html(get_theme_mod('menu1_small_title', __('default', 'kizuna'))); ?></p>
        </div>
        <div class="text-box">
            <p class="f16"><?php echo esc_html(get_theme_mod('section_one_text', __('default', 'kizuna'))); ?></p>
        </div>
        <div class="section-one-box">
            <div class="row">
                <div class="section">
                    <div class="onetitle">
                        <div class="number">1</div>
                        <div class="title"><?php echo esc_html(get_theme_mod('first_title', __('default', 'kizuna'))); ?></div>
                    </div>
                    <?php if (get_theme_mod('first_image')) : ?>
                        <img src="<?php echo esc_url(get_theme_mod('first_image')); ?>" alt="<?php _e('画像1', 'kizuna'); ?>">
                    <?php endif; ?>
                    <p><?php echo esc_html(get_theme_mod('first_text', __('default', 'kizuna'))); ?></p>
                </div>
                <div class="section">
                    <div class="onetitle">
                        <div class="number">2</div>
                        <div class="title"><?php echo esc_html(get_theme_mod('second_title', __('default', 'kizuna'))); ?></div>
                    </div>
                    <?php if (get_theme_mod('second_image')) : ?>
                        <img src="<?php echo esc_url(get_theme_mod('second_image')); ?>" alt="<?php _e('画像2', 'kizuna'); ?>">
                    <?php endif; ?>
                    <p><?php echo esc_html(get_theme_mod('second_text', __('default', 'kizuna'))); ?></p>
                </div>
                <div class="section">
                    <div class="onetitle">
                        <div class="number">3</div>
                        <div class="title"><?php echo esc_html(get_theme_mod('third_title', __('default', 'kizuna'))); ?></div>
                    </div>
                    <?php if (get_theme_mod('third_image')) : ?>
                        <img src="<?php echo esc_url(get_theme_mod('third_image')); ?>" alt="<?php _e('画像3', 'kizuna'); ?>">
                    <?php endif; ?>
                    <p><?php echo esc_html(get_theme_mod('third_text', __('default', 'kizuna'))); ?></p>
                </div>
                <?php if (!empty(get_theme_mod('forth_title')) || !empty(get_theme_mod('forth_text')) || !empty(get_theme_mod('forth_image'))) : ?>
                    <div class="section">
                        <div class="onetitle">
                            <div class="number">4</div>
                            <div class="title"><?php echo esc_html(get_theme_mod('forth_title', __('default', 'kizuna'))); ?></div>
                        </div>
                        <?php if (get_theme_mod('forth_image')) : ?>
                            <img src="<?php echo esc_url(get_theme_mod('forth_image')); ?>" alt="<?php _e('画像4', 'kizuna'); ?>">
                        <?php endif; ?>
                        <p><?php echo esc_html(get_theme_mod('forth_text', __('default', 'kizuna'))); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="two">
    <div class="wrap">
        <div class="section-title-box">
            <div class="title-wrapper">
                <h4 class="maincolor"><?php echo esc_html(get_theme_mod('menu2_large_title', __('default', 'kizuna'))); ?></h4>
                <div class="divider"></div>
            </div>
            <p class="f12"><?php echo esc_html(get_theme_mod('menu2_small_title', __('default', 'kizuna'))); ?></p>
        </div>
        <div class="section-two-box">
            <div class="photo">
                <?php if (get_theme_mod('section_two_image')) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('section_two_image')); ?>" alt="">
                <?php endif; ?>
                <p class="name pt20"><?php echo esc_html(get_theme_mod('section_two_name', __('default', 'kizuna'))); ?></p>
            </div>
            <div class="intro-box">
                <div class="text-box mw">
                    <p class="f16"><?php echo esc_html(get_theme_mod('section_two_text', __('default', 'kizuna'))); ?></p>
                </div>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="year"><?php echo esc_html(get_theme_mod('section_two_year1', __('2015', 'kizuna'))); ?></div>
                        <div class="content">
                            <h5 class="title"><?php echo esc_html(get_theme_mod('section_two_title1', __('美容専門学校から卒業', 'kizuna'))); ?></h5>
                            <h6 class="subtitle"><?php echo esc_html(get_theme_mod('section_two_text1', __('心を込めてさまざまなサービスを提供しております。', 'kizuna'))); ?></h6>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="year"><?php echo esc_html(get_theme_mod('section_two_year2', __('2018', 'kizuna'))); ?></div>
                        <div class="content">
                            <h5 class="title"><?php echo esc_html(get_theme_mod('section_two_title2', __('美容専門学校から卒業', 'kizuna'))); ?></h5>
                            <h6 class="subtitle"><?php echo esc_html(get_theme_mod('section_two_text2', __('心を込めてさまざまなサービスを提供しております。', 'kizuna'))); ?></h6>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="year"><?php echo esc_html(get_theme_mod('section_two_year3', __('2021', 'kizuna'))); ?></div>
                        <div class="content">
                            <h5 class="title"><?php echo esc_html(get_theme_mod('section_two_title3', __('美容専門学校から卒業', 'kizuna'))); ?></h5>
                            <h6 class="subtitle"><?php echo esc_html(get_theme_mod('section_two_text3', __('心を込めてさまざまなサービスを提供しております。', 'kizuna'))); ?></h6>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="year"><?php echo esc_html(get_theme_mod('section_two_year4', __('2023', 'kizuna'))); ?></div>
                        <div class="content">
                            <h5 class="title"><?php echo esc_html(get_theme_mod('section_two_title4', __('美容専門学校から卒業', 'kizuna'))); ?></h5>
                            <h6 class="subtitle"><?php echo esc_html(get_theme_mod('section_two_text4', __('心を込めてさまざまなサービスを提供しております。', 'kizuna'))); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="three">
    <div class="wrap">
        <div class="section-title-box">
            <div class="title-wrapper">
                <h4 class="maincolor"><?php echo esc_html(get_theme_mod('menu3_large_title', __('default', 'kizuna'))); ?></h4>
                <div class="divider"></div>
            </div>
            <p class="f12"><?php echo esc_html(get_theme_mod('menu3_small_title', __('default', 'kizuna'))); ?></p>
        </div>
        <div class="text-box">
            <p class="f16"><?php echo esc_html(get_theme_mod('section_three_text', __('default', 'kizuna'))); ?></p>
        </div>
        <div class="campaign-box">
            <div class="campaign-item">
                <h5 class="campaign-title"><?php echo esc_html(get_theme_mod('section_three_title1', __('default', 'kizuna'))); ?></h5>
                <p class="campaign-content"><?php echo esc_html(get_theme_mod('section_three_text1', __('default', 'kizuna'))); ?></p>
            </div>
            <div class="campaign-item">
                <h5 class="campaign-title"><?php echo esc_html(get_theme_mod('section_three_title2', __('default', 'kizuna'))); ?></h5>
                <p class="campaign-content"><?php echo esc_html(get_theme_mod('section_three_text2', __('default', 'kizuna'))); ?></p>
            </div>
            <?php if (!empty(get_theme_mod('section_three_title3')) || !empty(get_theme_mod('section_three_text3'))) : ?>
                <div class="campaign-item">
                    <h5 class="campaign-title"><?php echo esc_html(get_theme_mod('section_three_title3', __('default', 'kizuna'))); ?></h5>
                    <p class="campaign-content"><?php echo esc_html(get_theme_mod('section_three_text3', __('default', 'kizuna'))); ?></p>
                </div>
            <?php endif; ?>
        </div>
        <div class="cta-container pb40">
            <a href="<?php echo esc_url(get_theme_mod('custom_site_link', __('default', 'kizuna'))); ?>" class="custom-cta"><?php _e('ご予約', 'kizuna'); ?></a>
        </div>
    </div>
</section>

<section id="four">
    <div class="wrap">
        <div class="section-title-box">
            <div class="title-wrapper">
                <h4 class="maincolor"><?php echo esc_html(get_theme_mod('menu4_large_title', __('default', 'kizuna'))); ?></h4>
                <div class="divider"></div>
            </div>
            <p class="f12"><?php echo esc_html(get_theme_mod('menu4_small_title', __('default', 'kizuna'))); ?></p>
        </div>
        <div class="voice-box">
            <div class="voice-item">
                <div class="voice-content">
                    <div class="voice-profile">
                        <div class="voice-image">
                            <?php
                            $image_url = get_theme_mod('section_four_image1', get_template_directory_uri() . '/assets/img/profile.jpg');
                            if ($image_url) : ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="voice-text">
                            <p class="pt20">@<?php echo esc_html(get_theme_mod('section_four_name1', __('XXX', 'kizuna'))); ?> 様<br><?php echo esc_html(get_theme_mod('section_four_pro1', __('default', 'kizuna'))); ?> より</p>
                        </div>
                    </div>
                    <div class="voice-comment">
                        <blockquote>
                            <h4 class="keyword"><?php echo esc_html(get_theme_mod('section_four_phase1', __('default', 'kizuna'))); ?></h4>
                        </blockquote>
                        <p class="f16"><?php echo esc_html(get_theme_mod('section_four_text1', __('default', 'kizuna'))); ?></p>
                    </div>
                </div>
            </div>
            <div class="voice-item">
                <div class="voice-content2">
                    <div class="voice-comment">
                        <blockquote>
                            <h4 class="keyword"><?php echo esc_html(get_theme_mod('section_four_phase2', __('default', 'kizuna'))); ?></h4>
                        </blockquote>
                        <p class="f16"><?php echo esc_html(get_theme_mod('section_four_text2', __('default', 'kizuna'))); ?></p>
                    </div>
                    <div class="voice-profile">
                        <div class="voice-image">
                            <?php
                            $image_url = get_theme_mod('section_four_image2', get_template_directory_uri() . '/assets/img/profile.jpg');
                            if ($image_url) : ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="voice-text">
                            <p class="pt20">@<?php echo esc_html(get_theme_mod('section_four_name2', __('XXX', 'kizuna'))); ?> 様<br><?php echo esc_html(get_theme_mod('section_four_pro2', __('default', 'kizuna'))); ?> より</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="voice-item">
                <div class="voice-content">
                    <div class="voice-profile">
                        <div class="voice-image">
                            <?php
                            $image_url = get_theme_mod('section_four_image3', get_template_directory_uri() . '/assets/img/profile.jpg');
                            if ($image_url) : ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="voice-text">
                            <p class="pt20">@<?php echo esc_html(get_theme_mod('section_four_name3', __('XXX', 'kizuna'))); ?> 様<br><?php echo esc_html(get_theme_mod('section_four_pro3', __('default', 'kizuna'))); ?> より</p>
                        </div>
                    </div>
                    <div class="voice-comment">
                        <blockquote>
                            <h4 class="keyword"><?php echo esc_html(get_theme_mod('section_four_phase3', __('default', 'kizuna'))); ?></h4>
                        </blockquote>
                        <p class="f16"><?php echo esc_html(get_theme_mod('section_four_text3', __('default', 'kizuna'))); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="five">
    <div class="wrap">
        <div class="section-title-box">
            <div class="title-wrapper">
                <h4 class="maincolor"><?php echo esc_html(get_theme_mod('menu5_large_title', __('ACCESS', 'kizuna'))); ?></h4>
                <div class="divider"></div>
            </div>
            <p class="f12"><?php echo esc_html(get_theme_mod('menu5_small_title', __('アクセス', 'kizuna'))); ?></p>
        </div>
    </div>
    <div class="rev-box wrap">
        <div class="cta-box">
            <a href="<?php echo esc_url(get_theme_mod('custom_site_link', 'https://beauty.hotpepper.jp')); ?>" class="custom-cta wd50"><?php _e('ご予約', 'kizuna'); ?></a>
            <a href="mailto:your-email@example.com?subject=<?php _e('お問い合わせ', 'kizuna'); ?>&body=<?php _e('ここにメッセージを入力してください', 'kizuna'); ?>" class="custom-cta wd50"><?php _e('お問い合わせ', 'kizuna'); ?></a>
        </div>
        <div class="text-box">
            <p class="f16 pt20">
                <?php echo esc_html(get_theme_mod('section_five_text', __('当サロンは、閑静な街区に位置しており、メイクルームやシャワー室も完備した完全個室をご用意しています。ご自身だけの静かな空間で、安心して贅沢なひとときをお過ごしください', 'kizuna'))); ?>
            </p>
        </div>
    </div>
    <div class="map-box wrap">
        <iframe
            src="<?php echo esc_url(get_theme_mod('section_five_map', 'default')); ?>"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</section>
</main>
<?php get_footer(); ?>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/splide.min.js" type="text/javascript" charset="utf-8"></script>

<?php wp_footer(); ?>
</body>
</html>
