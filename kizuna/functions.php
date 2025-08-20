<?php
require_once get_template_directory() . '/assets/functions/menu-custom.php';
require_once get_template_directory() . '/assets/functions/common-custom.php';
require_once get_template_directory() . '/assets/functions/color-custom.php';
require_once get_template_directory() . '/assets/functions/slideshow.php';
require_once get_template_directory() . '/assets/functions/section-custom.php';


function my_theme_setup() {
    // RSS feedリンクの設定
    add_theme_support('automatic-feed-links');

    // タイトルタグの設定
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_theme_setup');


 // CSSとJS
function my_landing_page_scripts() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_landing_page_scripts');

function my_scripts_method() {
    wp_enqueue_script(
        'custom_script',
        get_template_directory_uri() . '/assets/js/custom-scripts.js'
    );
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

 // telクリック
function add_custom_phone_number_script() {
    ?>
    <script type="text/javascript">
        function showPhoneNumber() {
            var phoneNumber = "<?php echo esc_js(get_theme_mod('custom_phone_number', 'default')); ?>";
            alert('電話番号：' + phoneNumber);
        }
    </script>
    <?php
}
add_action('wp_head', 'add_custom_phone_number_script');

//スペースキーを押すと改行になる
function custom_add_space_to_line_break_script() {
    ?>
    <script type="text/javascript">
        document.addEventListener('keydown', function(e) {
            if (e.key === ' ') {
                var textarea = document.activeElement;
                if (textarea.tagName === 'TEXTAREA' || textarea.tagName === 'INPUT') {
                    e.preventDefault();
                    var start = textarea.selectionStart;
                    var end = textarea.selectionEnd;
                    textarea.value = textarea.value.substring(0, start) + "\n" + textarea.value.substring(end);
                    textarea.selectionStart = textarea.selectionEnd = start + 1;
                }
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'custom_add_space_to_line_break_script');


?>