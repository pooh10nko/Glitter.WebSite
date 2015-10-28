<?php
//記事やページを作成すると自動的にはい<p>タグを削除
remove_filter('the_content', 'wpautop');

//headerの管理ページ削除
add_filter( 'show_admin_bar', '__return_false' );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(500, 500, true ); // 幅 220px、高さ 165px、切り抜きモード

//ヘルプ非表示
function disable_help_link() {
    echo '<style type="text/css">
        #contextual-help-link-wrap {display: none !important;}
        </style>';
}
add_action('admin_head', 'disable_help_link');

//サイドメニュー項目名カスタマイズ
add_filter('gettext',  'change_side_text');
add_filter('ngettext',  'change_side_text');
function change_side_text( $translated ) {
    $translated = str_replace(  'ダッシュボード',  '管理画面TOP',  $translated );
    $translated = str_replace(  'メディア',  '画像の管理',  $translated );
    $translated = str_replace(  '固定ページ',  'ページ',  $translated );
    $translated = str_replace(  '外観',  'デザイン管理',  $translated );
    $translated = str_replace(  '投稿',  '新着情報',  $translated );
    return $translated;
}

//RSSの配信を停止する
function fb_disable_feed() {
    wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}

add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);


//管理画面の不要なメニューを削除
function remove_menus () {
    global $menu;
     //$restricted = array(  __('ツール'),__('投稿'),__('メディア'),__('ダッシュボード'),__('プラグイン'),__('ユーザー'), __('リンク'), __('外観'), __('コメント'));
    $restricted = array(  __('ユーザー'), __('リンク'), __('コメント'));
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');

// バージョン更新を非表示にする
add_filter('pre_site_transient_update_core', '__return_zero');
// APIによるバージョンチェックの通信をさせない
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');

//wp_head不要削除
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
?>