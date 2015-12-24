<?php
//記事やページを作成すると自動的にはい<p>タグを削除
remove_filter('the_content', 'wpautop');

//headerの管理ページ削除
add_filter( 'show_admin_bar', '__return_false' );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );

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
    $translated = str_replace(  '投稿',  'Nail',  $translated );
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
    $restricted = array(  __('ツール'),__('ダッシュボード'), __('リンク'), __('コメント'));
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');

// バージョン更新を非表示にする
// add_filter('pre_site_transient_update_core', '__return_zero');
// APIによるバージョンチェックの通信をさせない
// remove_action('wp_version_check', 'wp_version_check');
// remove_action('admin_init', '_maybe_update_core');

//wp_head不要削除
remove_action( 'wp_head',             'feed_links',                      2     );
remove_action( 'wp_head',             'feed_links_extra',                3     );
remove_action( 'wp_head',             'rsd_link'                               );
remove_action( 'wp_head',             'wlwmanifest_link'                       );
remove_action( 'wp_head',             'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head',             'print_emoji_detection_script',     7    );
remove_action( 'wp_head',             'wp_print_styles',                  8    );
remove_action( 'wp_head',             'wp_print_head_scripts',            9    );
remove_action( 'wp_head',             'wp_generator'                           );
remove_action( 'wp_head',             'rel_canonical'                          );

//特定カテゴリーアーカイプページの1ページの表示件数
//固定ページの表示件数はarchive.phpで指定
// add_action( 'parse_query', 'category_posts_per_page', 10, 1 );
// function category_posts_per_page( $q_obj ) {
//     if( is_category(array(81,121,131)) ) {
//         $q_obj->query_vars['posts_per_page'] = 10; // カスタマイズ
//     }else if( is_category(array(1,101,111,141,151,161,171)) ){
//         $q_obj->query_vars['posts_per_page'] = 20; // カスタマイズ
//     }
// }

//管理画面のカテゴリ選択 チャックボックスからラジオボタンに変更
// function my_print_footer_scripts() {
// echo '<script type="text/javascript">
//   //<![CDATA[
//   jQuery(document).ready(function($){
//     $(".categorychecklist input[type=checkbox]").each(function(){
//       $(this).replaceWith($(this).clone().attr("type","radio"));
//     });
//   });
//   //]]>
//   </script>';
// }
// add_action('admin_print_footer_scripts', 'my_print_footer_scripts', 21);

//ログインページ用の外部CSS読み込み
// function custom_login() {
//     $files = '<link rel="stylesheet" id="login-css" href="/html/css/page/login.css" type="text/css" media="all">';
//     echo $files;
// }
// add_action( 'login_enqueue_scripts', 'custom_login' );

//検索ページから固定ページを除外
// function my_posy_search($search) {
//   if(is_search()) {
//     $search .= " AND post_type = 'post'";
//   }
//   return $search;
// }
// add_filter('posts_search', 'my_posy_search');

// 管理画面のカテゴリ一覧に親カテゴリを選択できないようにする
require_once(ABSPATH . '/wp-admin/includes/template.php');
class Danda_Category_Checklist extends Walker_Category_Checklist {
 
     function start_el( &$output, $category, $depth, $args, $id = 0 ) {
        extract($args);
        if ( empty($taxonomy) )
            $taxonomy = 'category';
 
        if ( $taxonomy == 'category' )
            $name = 'post_category';
        else
            $name = 'tax_input['.$taxonomy.']';
 
        $class = in_array( $category->term_id, $popular_cats ) ? ' class="popular-category"' : '';
        //親カテゴリの時はチェックボックス表示しない
        if($category->parent == 0){
               $output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" . '<label class="selectit">' . esc_html( apply_filters('the_category', $category->name )) . '</label>';
        }else{
            $output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" . '<label class="selectit"><input value="' . $category->term_id . '" type="checkbox" name="'.$name.'[]" id="in-'.$taxonomy.'-' . $category->term_id . '"' . checked( in_array( $category->term_id, $selected_cats ), true, false ) . disabled( empty( $args['disabled'] ), false, false ) . ' /> ' . esc_html( apply_filters('the_category', $category->name )) . '</label>';
        }
    }
 
}

function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
    $args['checked_ontop'] = false;
    $args['walker'] = new Danda_Category_Checklist();
    return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );



//投稿記事一覧にアイキャッチ画像を表示
function customize_admin_manage_posts_columns($columns) {
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
function customize_admin_add_column($column_name, $post_id) {
    if ( 'thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:75px;height:auto;' ));
    }
    if ( isset($thum) && $thum ) {
        echo $thum;
    }
}

function customize_admin_css_list() {
    echo '<style TYPE="text/css">.column-thumbnail{width:80px;}</style>';
}
add_filter( 'manage_posts_columns', 'customize_admin_manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'customize_admin_add_column', 10, 2 );
add_action('admin_print_styles', 'customize_admin_css_list', 21);
?>