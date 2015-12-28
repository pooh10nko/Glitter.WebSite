<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- ネイル 検索フォーム -->
<?php get_template_part( 'content', 'nail_search' ); ?>


<?php

	$s = $_GET['s'];
	$catnum = $_GET['catnum'];


	if($catnum){
	//tax_query用
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
<div>カテゴリ</div>
<?php
  if ($catnum[design]==='ALL' ) { 
  	$categories = get_categories('parent=21');

	foreach($categories as $category) :
		echo $category->name; 
	endforeach;
  }else{ 
	if (is_array($catnum)) { 
		foreach($catnum as $val){
			if ($val === end($catnum)) {
				echo get_cat_name($val);

    		}else{
				echo get_cat_name($val).", ";
			}
		}
	}
  }
 ?>


<div>検索結果</div>
<?php
  if ($catnum[design]==='ALL' ) { 
	//	ALL
	$categories = get_categories('parent=21');
	foreach($categories as $category) :
	 //   query_posts(array(
	 //   'tax_query' => $taxquerysp,
	//	'paged' => $paged,
	 //   's' => $s,
	 //   ));
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content', 'gallery' );
           endwhile; 
        else : ?>

	    <div>お探しの条件に当てはまる作品がありません。<br>条件を変更して検索してください。</div>
       <?php 
       endif; 
    endforeach;
	//  ALL
  }else{
	    query_posts(array(
	    'tax_query' => $taxquerysp,
		'paged' => $paged,
	    's' => $s,
	    ));
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content', 'gallery' );
 
           endwhile; 
        else : ?>

	<div>お探しの条件に当てはまる作品がありません。<br>条件を変更して検索してください。</div>
<?php 
  endif; 
  }

?>

<!-- ページャー -->
<?php get_template_part( 'content', 'pager' ); ?>


<?php wp_reset_query(); ?>


<?php get_footer(); ?>
