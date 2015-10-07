<?php
/* アイキャッチ画像 */
add_theme_support( 'post-thumbnails' );

//ログインロゴ画像変更
function custom_login_logo() {
    echo '<style type="text/css">
        h1 a {
            background: url('.get_bloginfo('template_directory').'/img/logo-black.png) 50% 50% no-repeat !important;
            width: 300px !important;
        }
        </style>';
}
add_action('login_head', 'custom_login_logo');

?>
