<?php
/**
 * Template Name: Galleryページ
 */
?>
<?php get_header(); ?>

<!-- ネイル 検索フォーム -->
<?php get_template_part( 'content', 'nail_search' ); ?>



<!-- 記事表示 件数はデフォルト -->

<?php
    query_posts(
    Array(
    'post_type' => 'post',
    // 'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC'
    )
    );
    if (have_posts()) : while (have_posts()) : the_post();
?>
    <?php get_template_part( 'content', 'nail' ); ?>
<?php
    endwhile; endif;
    wp_reset_query();
?>




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

<?php get_footer(); ?>
