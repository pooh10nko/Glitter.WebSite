<?php
/**
 * Template Name: Q&Aページ
 */
  get_header(); ?>


	<!-- #main -->
	<div id="main">
		<h2><img src="/common/images/faq_h2.png" alt="Concept" /></h2>
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

		<div id="faq">
			<div id="gel" class="faq_box">
				<h3><img alt="GEL" src="/common/images/menu_h3_01.png" /></h3>
				<h4>ジェル</h4>
				<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'gel',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<p class="question"><?php the_title(); ?></p>
					<p class="answer"><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></p>
					<p class="answer_btm"><img src="/common/images/base_a_btm.png" alt=""></p>
				<?php endwhile; ?>
			</div>
			<!-- /#gel -->

			<div id="sculpture" class="faq_box">
				<h3><img alt="SCLPTURE" src="/common/images/menu_h3_04.png" /></h3>
				<h4>スカルプチュア</h4>
				<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'sculpture',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<p class="question"><?php the_title(); ?></p>
					<p class="answer"><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></p>
					<p class="answer_btm"><img src="/common/images/base_a_btm.png" alt=""></p>
				<?php endwhile; ?>
			</div>
			<!-- /#sculpture -->

			<div id="art" class="faq_box">
				<h3><img alt="SCLPTURE" src="/common/images/menu_h3_03.png" /></h3>
				<h4>アート</h4>
				<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'art',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<p class="question"><?php the_title(); ?></p>
					<p class="answer"><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></p>
					<p class="answer_btm"><img src="/common/images/base_a_btm.png" alt=""></p>
				<?php endwhile; ?>
			</div>
			<!-- /#art -->

			<div id="other" class="faq_box">
				<h3><img alt="SCLPTURE" src="/common/images/menu_h3_08.png" /></h3>
				<h4>その他</h4>
				<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'other',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<p class="question"><?php the_title(); ?></p>
					<p class="answer"><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></p>
					<p class="answer_btm"><img src="/common/images/base_a_btm.png" alt=""></p>
				<?php endwhile; ?>
			</div>
			<!-- /#other -->
		</div>
		<!--▲▲固定ページ内容▲▲-->

	</div>
	<!-- /#main -->

<?php get_footer(); ?>