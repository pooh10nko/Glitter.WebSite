<?php
/**
 * Template Name: Q&Aページ
 */
  get_header(); ?>

			<section id="faq" class="section">
				<h1>Q&amp;A</h1>

				<div id="gel" class="faq_box">
					<h2><img alt="GEL" src="/common/images/menu_h3_01.png" /></h2>
					<h3>ジェル</h3>
					<dl class="accordion inner">
					<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'gel',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<dt><span><?php the_title(); ?></span></dt>
						<dd><span><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></span></dd>
					<?php endwhile; ?>
					</dl>
				</div>
				<!-- /#gel -->

				<div id="sculpture" class="faq_box">
					<h2><img alt="sculpture" src="/common/images/menu_h3_04.png" /></h2>
					<h3>スカルプチュア</h3>
					<dl class="accordion inner">
					<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'sculpture',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<dt><span><?php the_title(); ?></span></dt>
						<dd><span><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></span></dd>
					<?php endwhile; ?>
					</dl>
				</div>
				<!-- /#sculpture -->

				<div id="art" class="faq_box">
					<h2><img alt="art" src="/common/images/menu_h3_03.png" /></h2>
					<h3>アート</h3>
					<dl class="accordion inner">
					<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'art',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<dt><span><?php the_title(); ?></span></dt>
						<dd><span><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></span></dd>
					<?php endwhile; ?>
					</dl>
				</div>
				<!-- /#art -->

				<div id="other" class="faq_box">
					<h2><img alt="other" src="/common/images/menu_h3_08.png" /></h2>
					<h3>その他</h3>
					<dl class="accordion inner">
					<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'other',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<dt><span><?php the_title(); ?></span></dt>
						<dd><span><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></span></dd>
					<?php endwhile; ?>
					</dl>
				</div>
				<!-- /#other -->
			</section>
			
			<div id="btn_top"><a href="/">TOPに戻る</a></div>

<?php get_footer(); ?>