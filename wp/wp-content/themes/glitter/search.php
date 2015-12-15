<?php get_header(); ?>

<!-- ネイル 検索フォーム -->
<?php get_template_part( 'content', 'nail_search' ); ?>

<?php
$s = $_GET['s'];
$catnum = $_GET['catnum'];
 
//tax_query用
if($catnum){
    $taxquerysp[] = array(

            'taxonomy'=>'category',
            'terms'=> $catnum,
            'include_children'=>false,
            'field'=>'term_id',
            'operator'=>'AND'
            );
}
?>
 
<div>検索条件</div>
<?php if($s){ ?>検索キーワード：<?php echo $s; ?><br><?php } ?>
<?php
if (is_array($catnum)) { ?>カテゴリ：<?php
foreach($catnum as $val){
if ($val === end($catnum)) {
echo get_cat_name($val);
    }else{
echo get_cat_name($val).", ";
}
}
}
 ?>
<div>検索結果</div>
 
<?php
query_posts( array(
    'tax_query' => $taxquerysp,
    'post_type' => 'post',
    'paged' => $paged,
    's' => $s,
    )
);
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<?php get_template_part( 'content', 'nail' ); ?>
 
<?php endwhile; else : ?>
 
<div>該当なし</div>
 
<?php endif; ?>


<!-- ページャー -->
<div class="pager">
	<?php global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }
    else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
    }
    echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 4,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '前へ',
        'next_text' => '次へ',
    )); ?>
</div>
<?wp_reset_query(); ?>
<?php get_footer(); ?>
