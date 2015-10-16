<?php
/**
 * Template Name: コンセプトページ
 */
  get_header(); ?>


	<!-- #main -->
	<div id="main">
		<h2><img src="/common/images/concept_h2.png" alt="コンセプト" /></h2>
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

		<div id="concept">
			<?php $loop = new WP_Query( array( 'post_type' => 'concept', 'posts_per_page' => 1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div id="bgConcept">
				<h3><img alt="Nail Salon Glitter" src="/common/images/concept_img01.png" /></h3>
				<p class="txtCopy"><?php echo nl2br(get_post_meta($post->ID,'コンセプトキャッチコピー',true)); ?></p>
			</div>
			<p class="txtMain"><?php echo nl2br(get_post_meta($post->ID,'コンセプト本文',true)); ?></p>
			<?php endwhile; ?>
		</div>

		<!--▲▲固定ページ内容▲▲-->

	</div>
	<!-- /#main -->

<?php get_footer(); ?>