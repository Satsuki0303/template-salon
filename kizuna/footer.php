<footer class="footer">
    <!-- Footer Navigation -->
    <div class="footer-nav">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php 
            $menu_title = get_theme_mod("menu{$i}_large_title", __('default', 'kizuna'));
            if ($menu_title !== __('default', 'kizuna')) : ?>
                <a href="#<?php echo strtolower(esc_attr($menu_title)); ?>">
                    <?php echo esc_html($menu_title); ?>
                </a>
                <?php if ($i < 5) : ?>
                    <span>|</span>
                <?php endif; ?>
            <?php endif; ?>
        <?php endfor; ?>
    </div>

    <!-- Footer Logo -->
    <div class="logo pb40">
        <?php
        $default_image_url = get_template_directory_uri() . '/assets/img/logo-trans.png';
        $image_url = get_theme_mod('footer_logo', $default_image_url);

        if ($image_url) : ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> <?php esc_attr_e('Logo', 'kizuna'); ?>">
        <?php endif; ?>
    </div>

    <!-- Social Media Links -->
    <div class="footer-social">
        <?php
        $social_links = array(
            'ins_site_link'    => 'instagram.svg',
            'x_site_link'      => 'X.svg',
            'custom_site_link' => 'Hotpepper.svg',
        );

        foreach ($social_links as $mod_key => $icon_file) :
            $link = get_theme_mod($mod_key);
            if ($link && $link !== __('default', 'kizuna')) : ?>
                <a href="<?php echo esc_url($link); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/' . esc_attr($icon_file)); ?>" alt="<?php echo esc_attr(ucfirst($mod_key)); ?>">
                </a>
            <?php endif;
        endforeach;
        ?>
    </div>

    <!-- Footer Text -->
    <div class="footer-text">
        <p><?php echo esc_html(get_theme_mod('custom_address', __('Address not set.', 'kizuna'))); ?></p>
    </div>
    <div class="footer-copyright f12">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved.', 'kizuna'); ?> |
        <?php printf(__('Theme by %s', 'kizuna'), '<a href="">MakeIT</a>'); ?> |
        <?php _e('Licensed under GPLv2 or later.', 'kizuna'); ?></p>
    </div>
</footer>

