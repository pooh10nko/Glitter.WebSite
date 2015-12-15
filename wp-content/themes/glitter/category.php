<?php get_header(); ?>

<!-- ネイル 検索フォーム -->
<?php get_template_part( 'content', 'nail_search' ); ?>

<!-- 記事表示 件数はデフォルト -->
<?php
	if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'nail' ); ?>
	
<?php
	endwhile;
	endif;
?>

<?php get_footer(); ?>
