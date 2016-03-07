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
//$translated = str_replace(  '外観',  'デザイン管理',  $translated );
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

//タクソノミーを管理画面に表示
function show_term_area( $defaults ) {
    $defaults['addcat'] = 'タクソノミー';
    return $defaults;
}
add_filter('manage_qa_posts_columns', 'show_term_area', 15, 1);

function show_term_area_id($column_name, $id) {
    if( $column_name == 'addcat' ) {
        $terms = $terms = get_the_terms( $id, 'addcat' );
        $cnt = 0;
        foreach($terms as $var) {
            echo $cnt != 0 ? ", " : "";
            echo "<a href=\"" . get_admin_url() . "edit.php?addcat=" . $var->slug . "&post_type=qa" . "\">" . $var->name . "</a>";
            ++$cnt;
        }
    }
}
add_action('manage_qa_posts_custom_column', 'show_term_area_id', 15, 2);

//アーカイブ一覧表示
global $my_archives_post_type;
add_filter( 'getarchives_where', 'my_getarchives_where', 10, 2 );
function my_getarchives_where( $where, $r ) {
  global $my_archives_post_type;
  if ( isset($r['post_type']) ) {
    $my_archives_post_type = $r['post_type'];
    $where = str_replace( '\'post\'', '\'' . $r['post_type'] . '\'', $where );
  } else {
    $my_archives_post_type = '';
  }
  return $where;
}
add_filter( 'get_archives_link', 'my_get_archives_link' );
function my_get_archives_link( $link_html ) {
  global $my_archives_post_type;
  if ( '' != $my_archives_post_type )
    $add_link .= '?post_type=' . $my_archives_post_type;
    $link_html = preg_replace("/href=\'(.+)\'\s/","href='$1".$add_link." '",$link_html);
 
  return $link_html;
}


?>