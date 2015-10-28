<?php get_header(); ?>
<?php
	$img = '';
	$alt = '';
	switch( true ){
		case is_page('access'):
			$img = 'access';
			$alt = 'アクセス';
			break;
		case is_page('menu'):
			$img = 'menu';
			$alt = 'メニュー';
			break;
		case is_page('gallery'):
			$img = 'garally';
			$alt = 'ギャラリー';
			break;
		case is_page('concept'):
			$img = 'concept';
			$alt = 'コンセプト';
			break;
		case is_page('bridal'):
			$img = 'bridal';
			$alt = 'ブライダル';
			break;
		case is_page('blog'):
			$img = 'blog';
			$alt = 'ブログ';
			break;
		default:
			'';
	}
?>
	<!-- #main -->
	<div id="main">
		<h2><img src="/common/images/<?php echo $img; ?>_h2.png" alt="<?php echo $alt; ?>" /></h2>
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
		<?php if (have_posts()) : ?>
		  <?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		  <?php endwhile; ?>
		<?php endif; ?>
		<!--▲▲固定ページ内容▲▲-->

	</div>
	<!-- /#main -->

<?php get_footer(); ?>