<?php
/**
 * Template Name: Q&Aページ
 */
  get_header(); ?>



		<section class="faq section">
			<div class="inner">
				<p class="text text_read">お客様の疑問や不安にお応えします。<br>ネイルが初めての方でも安心してご利用できるよう、様々な質問に対する答えをカテゴリー別に掲載しています。</p>
			</div>
			<div class="tab">
				<nav class="tab_header">
					<p id="nav1" class="nav_area">ジェル</p>
					<p id="nav2" class="nav_area">スカルプ</p>
					<p id="nav3" class="nav_area">アート</p>
					<p id="nav4" class="nav_area">その他</p>
				</nav>
				<div class="tab_body">
					<div id="tab1" class="tab_area">
						<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'gel',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<dl class="accordion inner">
								<dt><span class="line"><?php the_title(); ?></span></dt>
								<dd><span class="line"><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></span></dd>
							</dl>
						<?php endwhile; ?>
					</div>
					<div id="tab2" class="tab_area">
						<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'sculpture',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<dl class="accordion inner">
								<dt><span class="line"><?php the_title(); ?></span></dt>
								<dd><span class="line"><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></span></dd>
							</dl>
						<?php endwhile; ?>
					</div>
					<div id="tab3" class="tab_area">
						<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'art',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<dl class="accordion inner">
								<dt><span class="line"><?php the_title(); ?></span></dt>
								<dd><span class="line"><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></span></dd>
							</dl>
						<?php endwhile; ?>
					</div>
					<div id="tab4" class="tab_area">
						<?php $loop = new WP_Query( array( 'post_type' => 'qa', 'taxonomy' => 'addcat' , 'term' => 'other',  'posts_per_page' => -1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<dl class="accordion inner">
								<dt><span class="line"><?php the_title(); ?></span></dt>
								<dd><span class="line"><?php echo nl2br(get_post_meta($post->ID,'回答',true)); ?></span></dd>
							</dl>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /.faq -->

		<section class="contact section">
			<div class="inner">
				<p class="text text_read large">不安なことや分からないことがございましたら<br class="sp">いつでもお問い合わせくださいませ。</p>
				<div class="btn_area">
					<a href="tel:03-3985-5550" class="btn gray_light tel"><small>池袋店</small>03-3985-5550</a>
					<a href="tel:049-298-3696 " class="btn gray_light tel"><small>川越店</small>049-298-3696</a>
				</div>
			</div>
		</section>
		<!-- /.contact -->

<?php get_footer(); ?>