<?php
/* アイキャッチ画像 */
add_theme_support( 'post-thumbnails' );

//以下権限によって管理画面項目の表示・非表示設定/////////////////////////////////////////////////////////////////////////////////
//ログインロゴ画像変更
function custom_login_logo() {
    echo '<style type="text/css">
        h1 a {
            background: url('.get_bloginfo('template_directory').'/img/logo-black.png) 50% 50% no-repeat !important;
            background-size: contain !important;
            width: 200px !important;
            margin-bottom: 0 !important;
        }
        </style>';
    }
add_action('login_head', 'custom_login_logo');

// バージョン更新を非表示にする
add_filter('pre_site_transient_update_core', '__return_zero');

// APIによるバージョンチェックの通信をさせない
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');

// フッターWordPressリンクを非表示に
function custom_admin_footer() {
    echo '<a href="mailto:support@livestyles.tv">お問い合わせ</a>';
}
add_filter('admin_footer_text', 'custom_admin_footer');

// 管理バーの項目を非表示
function remove_admin_bar_menu( $wp_admin_bar ) {
    $wp_admin_bar->remove_menu( 'wp-logo' ); // WordPressシンボルマーク
    $wp_admin_bar->remove_menu('my-account'); // マイアカウント
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 70 );

// 管理バーのヘルプメニューを非表示にする
function my_admin_head(){
   echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
}
add_action('admin_head', 'my_admin_head');

// 管理バーにログアウトを追加
function add_new_item_in_admin_bar() {
   global $wp_admin_bar;
   $wp_admin_bar->add_menu(array(
       'id' => 'new_item_in_admin_bar',
       'title' => __('ログアウト'),
       'href' => wp_logout_url()
       ));
}
add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');

// ダッシュボードウィジェット非表示
function example_remove_dashboard_widgets() {
    if (!current_user_can('level_10')) { //level10以下のユーザーの場合ウィジェットをunsetする
        global $wp_meta_boxes;
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
    }
 }
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');

// メニューを非表示にする
function remove_menus () {
    if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューをunsetする
        remove_menu_page('wpcf7'); //Contact Form 7
        global $menu;
        unset($menu[2]); // ダッシュボード
        unset($menu[4]); // メニューの線1
        //unset($menu[5]); // 投稿
        //unset($menu[10]); // メディア
        unset($menu[15]); // リンク
        unset($menu[20]); // ページ
        unset($menu[25]); // コメント
        unset($menu[59]); // メニューの線2
        unset($menu[60]); // テーマ
        unset($menu[65]); // プラグイン
        unset($menu[70]); // プロフィール
        unset($menu[75]); // ツール
        unset($menu[80]); // 設定
        unset($menu[90]); // メニューの線3
    }
}
add_action('admin_menu', 'remove_menus');


?>