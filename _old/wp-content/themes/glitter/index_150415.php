<?php get_header(); ?>
	<!-- #mainTop -->
	<div id="mainTop">
		<!-- 装飾 -->
		<div class="deco">
			<img src="/common/images/nail01.png" alt="" class="nail01" />
			<img src="/common/images/nail02.png" alt="" class="nail02" />
			<img src="/common/images/nail03.png" alt="" class="nail03" />
			<img src="/common/images/nail_img01.png" alt="" class="nail_img01" />
			<img src="/common/images/nail_img02.png" alt="" class="nail_img02" />
			<img src="/common/images/nail_img03.png" alt="" class="nail_img03" />
		</div>
		<!-- /装飾 -->
		<div id="campaogn">
		<h2><img src="/common/images/campaign_title.png" alt="キャンペーン" /></h2>
		

		<?php $loop = new WP_Query( array( 'post_type' => 'coupon', 'posts_per_page' => 1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<p class="txt"><?php the_title(); ?></p>
			<ul>

			<li class="price1">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類１',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類１',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前１',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細１',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額１',true)); ?></p></div>
			</li>
			<li class="price2">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類２',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類２',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前２',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細２',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額２',true)); ?></p></div>
			</li>
			<li class="price3">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類３',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類３',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前３',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細３',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額３',true)); ?></p></div>
			</li>
			<li class="price4">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類４',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類４',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前４',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細４',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額４',true)); ?></p></div>
			</li>
			<li class="price5">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類５',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類５',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前５',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細５',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額５',true)); ?></p></div>
			</li>
			<li class="price6">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類６',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類６',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前６',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細６',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額６',true)); ?></p></div>
			</li>
			</ul>
	<?php endwhile; ?>
		
		</div>
		<div id="newsWra">
			<div id="news">
				<h2><img src="/common/images/news_h2.png" alt="" /></h2>
				<ul id="slider" class="slider">


				<?php $posts = get_posts(array(
					'numberposts' => 20,
					'post_type' => 'photo',
				)); ?>
				<?php foreach( $posts as $post ): ?>
					<?php setup_postdata( $post ); ?>

					<?php
				    global $wpdb;
				    $query = "SELECT * FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
				    $cf = $wpdb->get_results($query, ARRAY_A);

				    $postName = array();
				    $postImg = array();

				    foreach( $cf as $row ){
				        if( $row['meta_key'] == "ネイル名前" ){
				            array_push( $postName, $row['meta_value'] );
				        }
				        if( $row['meta_key'] == "ネイル画像" ){
				            array_push( $postImg, $row['meta_value'] );
				        }
				    }
					?>
					<?php $length = count( $postName ); ?>

					<?php for( $i = 0; $i < $length; $i ++ ){ ?>
					    <?php $postImg_sp = wp_get_attachment_image_src($postImg[$i],'full' ); ?>

					    <?php if($postName[$i] !='') { ?>
					        <li class="slide1">
								<a href="<?php the_permalink() ?>" target="_blank"><img src="<?php echo $postImg_sp[0]; ?>" alt="<?php echo $postName[$i]; ?>" /></a>
								<div class="box">
									<p class="title"><?php echo $postName[$i]; ?></p>
								</div>
							</li>
					    <?php } ?>
					<?php } ?>

				<?php endforeach; ?>
				<?php wp_reset_query(); ?>






				</ul>
			</div>
		</div>
		
				
		
		
	</div>
	<!-- /#mainTop -->
<?php get_footer(); ?>