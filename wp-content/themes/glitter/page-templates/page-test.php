<?php
/**
 * Template Name: ABテストページ
 */
  get_header(); ?>


		<section class="gallery section">
			<div class="inner">
				<h1 class="base">NEW DESIGN</h1>
				<div class="slider_area">
					<div class="slider_gallery post_area post_area_gallery">
					<?php
						query_posts(
							Array(
							'post_type' => 'post',
							'posts_per_page' => 10,
                            'cat' => -31, //お客様ネイルを除く
							'orderby' => 'date',
							'order' => 'DESC'
							)
						);
						if ( have_posts() ) :
						while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'gallery' ); ?>
						
					<?php
						endwhile;
						endif;
					?>
					</div>
					<div class="control"></div>
				</div>
				<!-- /.slider_area -->
				<div class="btn_area">
					<a href="/gallery/" class="btn green">すべてのデザインを見る</a>
					<a href="/menu/" class="btn yellow">料金メニューを見る</a>
				</div>
			</div>
		</section>
		<!-- /.gallery -->

		<section class="blog section">
			<div class="inner">
				<h1 class="base">BLOG</h1>
				<div class="slider_area">
					<div class="slider_blog post_area post_area_blog">
						<?php
						query_posts(
							Array(
							'post_type' => 'post',
                            'cat' => 31, //お客様ネイルのみ
							'posts_per_page' => 10,
							'orderby' => 'date',
							'order' => 'DESC'
							)
						);
						if ( have_posts() ) :
						while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'gallery' ); ?>
						
					<?php
						endwhile;
						endif;
					?>
					</div>
					<div class="control"></div>
				</div>
				<!-- /.slider_area -->
				<div class="btn_area">
					<a href="/blog/" class="btn white">ブログ一覧を見る</a>
				</div>
			</div>
			
		</section>
		<!-- /.blog -->

		<section class="access section frame_bg">
			<img src="/assets/img/frame_top.png" alt="" class="frame">
			<div class="inner">
				<div class="col_R">
					<h1 class="base">
						<span class="en">NAIL SALON</span>
						<img src="/assets/img/logo_text_l.png" width="200" alt="glitter">
						<span class="jp">ネイルサロン　グリッター</span>
					</h1>
					<?php $loop = new WP_Query( array( 'post_type' => 'concept', 'posts_per_page' => 1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<p class="text text_read large">無理なくネイルを<br class="sp">楽しんでもらいたい。</p>
						<p class="text text_body">glitter（グリッター）のお客様のリピーターは80%と、<br class="pc tb">とても好評いただいております。<br>常にトレンドデザインのアートサンプルを揃え<br class="pc tb">ラメ・カラー共に200色あり、<br class="pc tb">ストーンの種類も150種以上、毎月最新ネイル商材を入荷し<br class="pc tb">プロのネイリストがお客様に合ったネイルをご提案いたします。</p>
					<?php endwhile; ?>
					<div class="btn_area">
						<a href="/access/" class="btn pink short">池袋店<span class="sp">の情報を見る</span></a>
						<a href="/access/" class="btn pink short">川越店<span class="sp">の情報を見る</span></a>
					</div>
				</div>
				<div class="col_L">
					<div class="slider_shop">
						<div class="item"><figure><img src="/assets/img/access_shop_01.jpg" alt=""></figure></div>
					</div>
				</div>
			</div>
			<img src="/assets/img/frame_btm.png" alt="" class="frame">
		</section>
		<!-- /.access -->

		<section class="faq section">
			<div class="inner">
				<h1 class="base white">Q &amp; A</h1>
				<p class="text text_read">お客様の疑問や不安にお応えします。<br>ネイルが初めての方でも安心してご利用できるよう、様々な質問に対する答えをカテゴリー別に掲載しています。</p>
				<div class="btn_area">
					<a href="/faq/" class="btn yellow">よくある質問を見る</a>
				</div>
			</div>
		</section>
		<!-- /.faq -->

		<section class="recruit section">
			<div class="inner">
				<h1 class="base">RECRUIT</h1>
				<figure class="img"><img src="/assets/img/top/top_recruit_img.png" alt=""></figure>
				<p class="text text_read large">お客様の笑顔のために<br class="sp">一緒に働ける仲間を募集しています！</p>
				<p class="text text_body">トレンドを抑えたアートが定評のglitterでセンスを磨きませんか？<br class="pc">旬なアートを低価格・高技術で提供するのがコンセプト。向上心のある方、アートの好きな方歓迎です! </p>
				<div class="btn_area">
					<a href="/recruit/" class="btn yellow">求人情報を見る</a>
				</div>
			</div>
		</section>
		<!-- /.recruit -->

<?php get_footer(); ?>
