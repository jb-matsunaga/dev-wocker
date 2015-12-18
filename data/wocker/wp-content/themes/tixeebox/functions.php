<?php
//アイキャッチ画像
add_theme_support( 'post-thumbnails' );

//ページネーション
function fn_pagenation($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;//表示するページ数（５ページを表示）

    global $paged;//現在のページ値
    if(empty($paged)) $paged = 1;//デフォルトのページ

    if($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;//全ページ数を取得

        if(!$pages) {//全ページ数が空の場合は、１とする
            $pages = 1;
        }
    }

    if(1 != $pages) {//全ページが１でない場合はページネーションを表示する
        echo "<ul class=\"m-pagenation\">\n";
        //Prev：現在のページ値が１より大きい場合は表示
        if($paged > 1) echo "<li class=\"m-pagenatin-arrow m-pagenation-arrow--left\"><a href='".get_pagenum_link($paged - 1)."'></a></li>\n";

        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
            //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
            }
        }
    //Next：総ページ数より現在のページ値が小さい場合は表示
        if ($paged < $pages) echo "<li class=\"m-pagenatin-arrow m-pagenation-arrow--right\"><a href=\"".get_pagenum_link($paged + 1)."\"></a></li>\n";
        echo "</ul>\n";
    }
};

// パンくずリスト
function breadcrumb(){
    global $post;
    $str ='';
    if(!is_home()&&!is_admin()){
        $str.= '<div id="breadcrumb" class="cf m-breadcrumb-body"><div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
        $str.= '<a href="'. home_url() .'" itemprop="url"><span itemprop="title">トップ</span></a> &gt;</div>';
 
        if(is_category()) {
            $cat = get_queried_object();
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
                    $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a> &gt;</div>';
                }
            }
        $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a></div>';
        } elseif(is_page()){
            if($post -> post_parent != 0 ){
                $ancestors = array_reverse(get_post_ancestors( $post->ID ));
                foreach($ancestors as $ancestor){
                    $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink($ancestor).'" itemprop="url"><span itemprop="title">'. get_the_title($ancestor) .'</span></a></div>';
                }
            }
        } elseif(is_single()){
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
                    $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor).'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor). '</span></a> &gt;</div>';
                }
            }
            $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '一覧</span></a></div>';
        } else{
            $str.='<div>'. wp_title('', false) .'</div>';
        }
        $str.='</div>';
    }
    echo $str;
}
//ログインページ変更
define( 'TIXEEBOX_ADMIN_LOGIN_PAGE', 'tixeebox-admin-login.php' );

add_action( 'login_init', 'tixeebox_admin_login_init' );

add_filter( 'site_url', 'tixeebox_admin_login_site_url', 10, 4 );

add_filter( 'wp_redirect', 'tixeebox_admin_login_wp_redirect', 10, 2 );

if ( ! function_exists( 'tixeebox_admin_login_init' ) ) {

    function tixeebox_admin_login_init() {

        if ( !defined( 'TIXEEBOX_ADMIN_LOGIN' ) || sha1( 'keyword' ) != TIXEEBOX_ADMIN_LOGIN ) {

            status_header( 403 );

            exit;

        }

    }

}

if ( ! function_exists( 'tixeebox_admin_login_site_url' ) ) {

    function tixeebox_admin_login_site_url( $url, $path, $orig_scheme, $blog_id ) {

        if ( ( $path == 'wp-login.php' || preg_match( '/wp-login\.php\?action=\w+/', $path ) ) &&

            ( is_user_logged_in() || strpos( $_SERVER['REQUEST_URI'], TIXEEBOX_ADMIN_LOGIN_PAGE ) !== false ) )

            $url = str_replace( 'wp-login.php', TIXEEBOX_ADMIN_LOGIN_PAGE, $url );

        return $url;

    }

}

if ( ! function_exists( 'tixeebox_admin_login_wp_redirect' ) ) {

    function tixeebox_admin_login_wp_redirect( $location, $status ) {

        if ( strpos( $_SERVER['REQUEST_URI'], TIXEEBOX_ADMIN_LOGIN_PAGE ) !== false )

            $location = str_replace( 'wp-login.php', TIXEEBOX_ADMIN_LOGIN_PAGE, $location );

        return $location;

    }

};

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
        unset($menu[4]); // メニューの線1
        unset($menu[15]); // リンク
        //unset($menu[20]); // ページ
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