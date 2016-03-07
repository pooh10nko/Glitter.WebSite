<?php get_header(); ?>

		<section class="detail_area section">
			<div class="inner col_Table">
				<div class="detail_main post_area col_Cell">
					<div class="inner">
						<?php
							$thumbnail_id = get_post_thumbnail_id();
							$eye_img = wp_get_attachment_image_src( $thumbnail_id , 'large' );
							// アイキャッチ画像
							if (has_post_thumbnail()) {
								echo '<img src="' .$eye_img[0]. '" alt="' .get_the_title(). '">';
							}else {
								echo '<img src="/assets/img/noimage.gif" alt="">';
							}
						?>
						<p class="label">

							<? $off = get_field('オフ有料');?>
							<? if($off != 'はい'): ?>
								<span>オフ無料</span>
							<? endif; ?>

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
									<?php //「定額 ¥4980」の場合
										if(in_category('fix4980')):?>
											<span class="priceNum">4980</span>円
									<?php //「定額 ¥5980」の場合
										elseif(in_category('fix5980')): ?>
											<span class="priceNum">5980</span>円
									<?php
										else: ?>
											<? $price = get_field('金額');?>
											<? if($price): ?>
												<span class="priceNum"><? echo $price; ?></span>円
											<? else: ?>
												<? echo '--'; ?>
											<? endif; ?>
									<?php endif; ?>
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
						<div class="shopinfo">
							<p class="text text_read large">Webからのご予約は<br class="sp">24時間承っております。</p>
							<div class="btn_area">

							<?php if(have_rows('池袋店',25)): ?>
					            <?php while(have_rows('池袋店',25)): the_row(); ?>
									<a href="<?php the_sub_field('予約url'); ?>" target="_blank" class="btn brown" onClick="ga('send', 'event', 'hotpeppar_ikebukuro', 'click', 'single')">池袋店のご予約はこちら</a>                        
					            <?php endwhile; ?>
					        <?php endif; ?>

							<?php if(have_rows('川越店',25)): ?>
					            <?php while(have_rows('川越店',25)): the_row(); ?>
									<a href="<?php the_sub_field('予約url'); ?>" target="_blank" class="btn brown" onClick="ga('send', 'event', 'hotpeppar_kawagoe', 'click', 'single')">川越店のご予約はこちら</a>                     
					            <?php endwhile; ?>
					        <?php endif; ?>
					        
							</div>
						</div>
					</div>
					<div class="pager_area">
						<p class="pager_btn prev">
							<?php if(get_previous_post()):?>
								<?php //「お客様ネイル」の場合は同カテゴリ内のみ
									if(in_category('customer')):?>
									<span class="btn gray square"><?php previous_post_link( '%link', 'PREV', true); ?></span>
								<?php //Galerryページの場合は「お客様ネイル」を除く
									else: ?>
									<span class="btn gray square"><?php previous_post_link( '%link', 'PREV', false, '31' ); ?></span>
								<?php endif; ?>
							<?php endif; ?>
						</p>
						<p class="pager_btn next">
							<?php if(get_next_post()):?>
								<?php //「お客様ネイル」の場合は同カテゴリ内のみ
									if(in_category('customer')):?>
									<span class="btn gray square"><?php next_post_link( '%link', 'NEXT', true); ?></span>
								<?php //Galerryページの場合は「お客様ネイル」を除く
									else: ?>
									<span class="btn gray square"><?php next_post_link( '%link', 'NEXT', false, '31' ); ?></span>
								<?php endif; ?>
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

					<?php
						
						if(in_category('customer')){
							$targetClass = 'post_area_blog'; //「お客様ネイル」のみ
						}else{
							$targetClass = 'post_area_gallery'; //「お客様ネイル」を除く
						};
					?>


					<div class="post_area <?php echo $targetClass; ?>">
						<?php
						
							if(in_category('customer')){
								$targetId = 31; //「お客様ネイル」のみ
							}else{
								$targetId = -31; //「お客様ネイル」を除く
							};

							query_posts(
								Array(
								'post_type' => 'post',
                            	'cat' => $targetId,
                            	'post__not_in' => array($post->ID),
								'posts_per_page' => 4,
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
