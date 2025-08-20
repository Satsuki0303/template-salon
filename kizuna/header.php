<header>
    <div class="top-container">
        <div class="wrap">
            <div class="topbar">

                <!-- Telephone Section -->
                <div class="tel" onclick="showPhoneNumber()">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Telephone.svg" alt="<?php esc_attr_e('Telephone', 'kizuna'); ?>">
                    <p class="teltext"><?php echo esc_html(get_theme_mod('custom_phone_number', __('default', 'kizuna'))); ?></p>
                </div>

                <!-- Logo Section -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <?php
                    $custom_logo_url = get_theme_mod('custom_logo');
                    if ($custom_logo_url) {
                        echo '<img src="' . esc_url($custom_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '">';
                    }
                    ?>
                </a>

                <!-- Call to Action Button -->
                <div class="cta">
                    <div class="cta-container">
                        <a href="<?php echo esc_url(get_theme_mod('custom_site_link', __('default', 'kizuna'))); ?>" class="custom-cta"><?php _e('ご予約', 'kizuna'); ?></a>
                    </div>
                </div>

                <!-- Menu Icons -->
                <div class="menu-icon" id="menu-icon" onclick="toggleMenu()">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu.svg" alt="<?php esc_attr_e('Menu', 'kizuna'); ?>">
                </div>
                <div class="menu-icon" id="close-icon" onclick="toggleMenu()" style="display: none;">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/close.svg" alt="<?php esc_attr_e('Close', 'kizuna'); ?>">
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav" id="main-nav">
            <ul>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <li>
                        <a href="#<?php echo esc_attr(num2words($i)); ?>">
                            <h4><?php echo esc_html(get_theme_mod("menu{$i}_large_title", __("Menu {$i}", 'kizuna'))); ?></h4>
                            <p class="f12"><?php echo esc_html(get_theme_mod("menu{$i}_small_title", __("Submenu {$i}", 'kizuna'))); ?></p>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>

            <!-- Hidden Menu and Social Icons -->
            <div class="hidemenu">
                <div class="cta-container">
                    <a href="<?php echo esc_url(get_theme_mod('custom_site_link', __('default', 'kizuna'))); ?>" class="custom-cta"><?php _e('ご予約', 'kizuna'); ?></a>
                </div>

                <div class="sns-icons">
                    <?php
                    $social_links = array(
                        'ins_site_link' => 'ins-b.svg',
                        'x_site_link'   => 'X-b.svg',
                        'custom_site_link' => 'hot-b.svg',
                    );

                    foreach ($social_links as $mod_key => $icon_file) :
                        $link = get_theme_mod($mod_key, __('default', 'kizuna'));
                        if ($link && $link !== __('default', 'kizuna')) : ?>
                            <a href="<?php echo esc_url($link); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/<?php echo esc_attr($icon_file); ?>" alt="<?php echo ucfirst($mod_key); ?>">
                            </a>
                        <?php endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </nav>
    </div>
</header>

<?php
function num2words($num)
{
    $words = array(__('one', 'kizuna'), __('two', 'kizuna'), __('three', 'kizuna'), __('four', 'kizuna'), __('five', 'kizuna'));
    return $words[$num - 1];
}
?>

