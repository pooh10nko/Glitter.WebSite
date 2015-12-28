<?php get_header(); ?>

		<section class="detail_area section">
			<div class="inner col_Table">
				<div class="detail_main post_area col_Cell">
					<div class="inner">
						<?php
							$thumbnail_id = get_post_thumbnail_id();
							$eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
							// アイキャッチ画像
							if (has_post_thumbnail()) {
								echo '<img src="' .$eye_img[0]. '" alt="' .get_the_title(). '">';
							}else {
								echo '<img src="/assets/img/noimage.png" alt="">';
							}
						?>
						<p class="label">
							<span>オフ無料</span>
							<?php
								//全てのカテゴリ
								$categories = get_the_category();
								foreach($categories as $category) :
									$args = array(
										'cat' => $category->cat_ID,
										'showposts' => -1,
										'post__not_in' => array($post->ID)
										);
								echo '<span>' . $category->cat_name . '</span>';
								endforeach;
							?>
						</p>
						<h1><?php the_title(); ?></h1>

						<div class="data_table">
							<dl>
								<dt>金額</dt>
								<dd>
									<? $price = get_field('金額');?>
									<? if($price): ?>
										<span class="priceNum"><? echo $price; ?></span>円
									<? else: ?>
										<? echo '--'; ?>
									<? endif; ?>
								</dd>
							</dl>
							<dl>
								<dt>店舗</dt>
								<dd>
									<? $shop = get_field('店舗');?>
									<? if($shop): ?>
										<? echo $shop; ?>
									<? else: ?>
										<? echo '--'; ?>
									<? endif; ?>
								</dd>
							</dl>
							<dl>
								<dt>スタッフ</dt>
								<dd>
									<? $staff = get_field('スタッフ');?>
									<? if($staff): ?>
										<? echo $staff; ?>
									<? else: ?>
										<? echo '--'; ?>
									<? endif; ?>
								</dd>
							</dl>
							<dl>
								<dt>メッセージ</dt>
								<dd>
									<? $message = get_field('メッセージ');?>
									<? if($message): ?>
										<? echo $message; ?>
									<? else: ?>
										<? echo '--'; ?>
									<? endif; ?>
								</dd>
							</dl>
						</div>
					</div>
					<div class="pager_area">
						<p class="pager_btn prev">
							<?php if( get_previous_post()) : ?>
								<span class="btn gray square"><?php previous_post_link( '%link', 'PREV' ); ?></span>
							<?php endif; ?>
						</p>
						<p class="pager_btn next">
							<?php if( get_next_post()  ) : ?>
								<span class="btn gray square"><?php next_post_link( '%link', 'NEXT' ); ?></span>
							<?php endif; ?>
						</p>
					</div>
				</div>
				<div class="detail_side col_Cell">
					<h2>
						<img src="/assets/img/frame_top_s.png" alt="" class="frame">
						<div class="inner">RECOMMEND<br>DESIGN</div>
						<img src="/assets/img/frame_btm_s.png" alt="" class="frame">
					</h2>


					<div class="post_area">
						<?php
							query_posts(
								Array(
								'post_type' => 'post',
								'posts_per_page' => 2,
								'orderby' => 'rand',
								'order' => 'DESC'
								)
							);
							if ( have_posts() ) :
							while ( have_posts() ) : the_post();
						?>

							<?php get_template_part( 'content', 'gallery_list' ); ?>
							
						<?php
							endwhile;
							endif;
						?>
					</div>
				</div>
			</div>
		</section>
		<!-- /.detail_area -->

		<div class="btn_area">
			<a href="/gallery/" class="btn green">すべてのデザインを見る</a>
			<a href="/menu/" class="btn yellow">料金メニューを見る</a>
		</div>


<?php get_footer(); ?>
