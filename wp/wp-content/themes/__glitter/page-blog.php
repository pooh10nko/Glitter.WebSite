<?php
/**
 * Template Name: ブログページ
 */
  /* get_header(); */ ?>
<style>
	.flower{
		display: none !important;
	}
</style>

	<!-- #main -->
	<div id="main">
<!-- 		<h2><img src="/common/images/blog_h2.png" alt="Blog" /></h2> -->
		<div id="pankuzu" class="breadcrumb">
			<ul class="clearfix">
				<li><a href="<?php bloginfo('url'); ?>">ネイルサロン glitter池袋西口店</a><span>&gt;</span></li>
				<?php if($post -> post_parent != 0 ): ?>
				<?php $ancestors = array_reverse( $post-> ancestors ); ?>
				<?php foreach($ancestors as $ancestor): ?>
				<li><a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a><span>&gt;</span></li>
				<?php endforeach; ?>
				<?php endif; ?>
				<li><?php the_title(); ?></li>
			</ul>
		</div>

		<!--▼▼固定ページ内容▼▼-->

		<div id="blog" class="listPage">

			<?php $paged = get_query_var('paged'); ?>
			<?php query_posts( array( 'post_type' => 'blog_detail',
			'posts_per_page' => 1,
			'paged' => $paged
			)); ?>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>

				<?php the_time('Y年m月d日(D)'); ?><br />

				<!--
<?php 
					$thumbnail_id = get_post_thumbnail_id($post->ID);
					$image = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
					$src = $image[0];
					$width = $image[1];
					$height = $image[2];
					echo '<img src="'.$src.'" alt="" />';
				?>
--><br />
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				<?php echo mb_substr(strip_tags($post-> post_content),0,10).'...'; ?><br />

			<?php endwhile; endif; ?>


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
				'mid_size' => 1	,
				'current' => ($paged ? $paged : 1),
				'prev_text' => '< 前へ',
				'next_text' => '次へ >',
			)); ?>



			<p>最新の記事</p>
			<?php $loop = new WP_Query( array( 'post_type' => 'blog_detail', 'posts_per_page' => 4 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>

			 	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
			<?php endwhile; ?>

			<p>アーカイブ</p>
			<?php wp_get_archives('post_type=blog_detail&type=monthly'); ?>


		</div>
		<!--▲▲固定ページ内容▲▲-->

	</div>
	<!-- /#main -->

<?php /* get_footer(); */ ?>