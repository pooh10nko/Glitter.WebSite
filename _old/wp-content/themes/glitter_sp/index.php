<?php get_header(); ?>

			<section id="point">
				<h1>高技術×低価格のアットホームサロン</h1>
				<ul>
					<li><img src="/sp/images/point_1.png" alt="池袋徒歩1分"></li>
					<li><img src="/sp/images/point_2.png" alt="夜23時まで営業"></li>
					<li><img src="/sp/images/point_3.png" alt="オフ無料"></li>
				</ul>
			</section>
			<!-- /#point -->

			<section id="gallery" class="section spring">
				<h1>GALLERY</h1>

				<?php while (have_posts()) : the_post(); ?>
			        <?php endwhile; ?>
			        <?php $posts = get_posts(array(
			                    'numberposts' => 1,
			                    'post_type' => 'photo',
			                )); ?>
			                <?php foreach( $posts as $post ): ?>
			                    <?php setup_postdata( $post ); ?>

	                    <h2><?php echo nl2br(get_post_meta($post->ID,'年',true)); ?> <?php if(get_post_meta($post->ID,'シーズン',true) == '春'): ?>Spring<?php elseif(get_post_meta($post->ID,'シーズン',true) == '夏'): ?>Summer<?php elseif(get_post_meta($post->ID,'シーズン',true) == '秋'): ?>Autumn<?php elseif(get_post_meta($post->ID,'シーズン',true) == '冬'): ?>Winter<?php endif; ?></h2>
	                    <h3><?php echo nl2br(get_post_meta($post->ID,'キャッチコピー',true)); ?></h3>

	                    <ul class="bxslider">
				        	<!--繰り返す内容-->
				        	<?php if(get_post_meta($post->ID,'キャッチコピー',true)): ?>

									<?php
								    global $wpdb;
								    $query = "SELECT * FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id DESC";
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
									        <li itemtype="image"><img src="<?php echo $postImg_sp[0]; ?>" alt="<?php echo $postName[$i]; ?>" /></li>
									    <?php } ?>
									<?php } ?>


							<?php endif; ?>
				            <!--/繰り返す内容-->

			            </ul>

						<div id="btn_gallery"><a href="/gallery/">過去のネイルはこちら</a></div>


			          <?php endforeach; ?>
			 <?php wp_reset_query(); ?>

			</section>
			<!-- /#gallery -->

			<section id="menu" class="section">
				<h1>COUPON</h1>
				<ol>
					<?php $loop = new WP_Query( array( 'post_type' => 'coupon', 'posts_per_page' => 1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>


					<li<?php if(get_post_meta($post->ID,'クーポン種類１',true) == 'FOOT'): ?> class="icon"<?php elseif(get_post_meta($post->ID,'クーポン種類１',true) == 'HAND&FOOT'): ?> class="icon"<?php endif; ?>>
						<div class="title"><?php if(get_post_meta($post->ID,'クーポン種類１',true) == 'FOOT'): ?><img src="/sp/images/coupon_f.png" alt="FOOT"><?php elseif(get_post_meta($post->ID,'クーポン種類１',true) == 'HAND&FOOT'): ?><img src="/sp/images/coupon_hf.png" alt="hand&amp;foot"><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前１',true)); ?><span> ≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細１',true)); ?>≫</span></div>

						<div class="price"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額１',true)); ?>円</div>
					</li>
					<li<?php if(get_post_meta($post->ID,'クーポン種類２',true) == 'FOOT'): ?> class="icon"<?php elseif(get_post_meta($post->ID,'クーポン種類２',true) == 'HAND&FOOT'): ?> class="icon"<?php endif; ?>>
						<div class="title"><?php if(get_post_meta($post->ID,'クーポン種類２',true) == 'FOOT'): ?><img src="/sp/images/coupon_f.png" alt="FOOT"><?php elseif(get_post_meta($post->ID,'クーポン種類２',true) == 'HAND&FOOT'): ?><img src="/sp/images/coupon_hf.png" alt="hand&amp;foot"><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前２',true)); ?><span> ≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細２',true)); ?>≫</span></div>

						<div class="price"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額２',true)); ?>円</div>
					</li>
					<li<?php if(get_post_meta($post->ID,'クーポン種類３',true) == 'FOOT'): ?> class="icon"<?php elseif(get_post_meta($post->ID,'クーポン種類３',true) == 'HAND&FOOT'): ?> class="icon"<?php endif; ?>>
						<div class="title"><?php if(get_post_meta($post->ID,'クーポン種類３',true) == 'FOOT'): ?><img src="/sp/images/coupon_f.png" alt="FOOT"><?php elseif(get_post_meta($post->ID,'クーポン種類３',true) == 'HAND&FOOT'): ?><img src="/sp/images/coupon_hf.png" alt="hand&amp;foot"><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前３',true)); ?><span> ≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細３',true)); ?>≫</span></div>

						<div class="price"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額３',true)); ?>円</div>
					</li>
					<li<?php if(get_post_meta($post->ID,'クーポン種類４',true) == 'FOOT'): ?> class="icon"<?php elseif(get_post_meta($post->ID,'クーポン種類４',true) == 'HAND&FOOT'): ?> class="icon"<?php endif; ?>>
						<div class="title"><?php if(get_post_meta($post->ID,'クーポン種類４',true) == 'FOOT'): ?><img src="/sp/images/coupon_f.png" alt="FOOT"><?php elseif(get_post_meta($post->ID,'クーポン種類４',true) == 'HAND&FOOT'): ?><img src="/sp/images/coupon_hf.png" alt="hand&amp;foot"><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前４',true)); ?><span> ≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細４',true)); ?>≫</span></div>

						<div class="price"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額４',true)); ?>円</div>
					</li>
					<li<?php if(get_post_meta($post->ID,'クーポン種類５',true) == 'FOOT'): ?> class="icon"<?php elseif(get_post_meta($post->ID,'クーポン種類５',true) == 'HAND&FOOT'): ?> class="icon"<?php endif; ?>>
						<div class="title"><?php if(get_post_meta($post->ID,'クーポン種類５',true) == 'FOOT'): ?><img src="/sp/images/coupon_f.png" alt="FOOT"><?php elseif(get_post_meta($post->ID,'クーポン種類５',true) == 'HAND&FOOT'): ?><img src="/sp/images/coupon_hf.png" alt="hand&amp;foot"><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前５',true)); ?><span> ≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細５',true)); ?>≫</span></div>

						<div class="price"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額５',true)); ?>円</div>
					</li>
					<li<?php if(get_post_meta($post->ID,'クーポン種類６',true) == 'FOOT'): ?> class="icon"<?php elseif(get_post_meta($post->ID,'クーポン種類６',true) == 'HAND&FOOT'): ?> class="icon"<?php endif; ?>>
						<div class="title"><?php if(get_post_meta($post->ID,'クーポン種類６',true) == 'FOOT'): ?><img src="/sp/images/coupon_f.png" alt="FOOT"><?php elseif(get_post_meta($post->ID,'クーポン種類６',true) == 'HAND&FOOT'): ?><img src="/sp/images/coupon_hf.png" alt="hand&amp;foot"><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前６',true)); ?><span> ≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細６',true)); ?>≫</span></div>

						<div class="price"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額６',true)); ?>円</div>
					</li>

					<?php endwhile; ?>
				</ol>

				<div id="btnMenu"><a href="/menu/"><img src="/sp/images/btn_menu.png" alt="MENU LIST"></a></div>

				<div id="weddingMenu">
					<p id="btnWedding"><a href="/menu/"><img src="/sp/images/btn_bridal.png" alt="ブライダルメニューはこちら"></a></p>
				</div>
				<div id="linkMenu">
					<p id="btnFaq"><a href="/faq/"><img src="/sp/images/btn_faq.png" alt="Q&amp;A"></a></p>
					<!-- <p id="btnBlog"><a href="/blog/"><img src="/sp/images/btn_blog.png" alt="BLOG"></a></p> -->
				</div>

			</section>
			<!-- /#menu -->

			<section id="concept" class="section">
				<h1>CONCEPT</h1>
				<?php $loop = new WP_Query( array( 'post_type' => 'concept', 'posts_per_page' => 1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<p itemprop="description"><span class="txtCopy"><?php echo nl2br(get_post_meta($post->ID,'コンセプトキャッチコピー',true)); ?></span><br>
					<?php echo nl2br(get_post_meta($post->ID,'コンセプト本文',true)); ?></p>
				<?php endwhile; ?>
			</section>
			<!-- /#concept -->

			<section id="access" class="section" itemprop="location" itemscope itemtype="http://schema.org/Map">
				<h1>ACCESS</h1>
				<img src="/sp/images/map.jpg" alt="NAILSALON glitter地図" itemprop="image" />
				<p id="btnMap">
					<a href="http://maps.apple.com/maps?q=東京都豊島区西池袋1-18-8" class="ios">Mapアプリを起動</a>
					<a href="https://goo.gl/maps/52HXl" itemprop="url" content="https://goo.gl/maps/52HXl" class="android">googleMapで見る</a>
				</p>
			</section>
			<!-- /#access -->

			<section id="shop">
				<h1><img src="/sp/images/logo2.png" alt="NAILSALON glitter"></h1>
				<table>
					<tr itemprop="address" itemscope itemtype="http://schema.org/Place" itemref="station">
						<th>住所</th>
						<td itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">：<span itemprop="addressRegion">東京都</span><span itemprop="addressLocality">豊島区</span><span itemprop="streetAddress">西池袋1-18-8</span> 2F,3F</td>
					</tr>
					<tr id="station">
						<th>最寄り駅</th>
						<td>：<span itemprop="containedIn">池袋駅</span><br><span>9番・9C番・10番・11番・12番出口から徒歩1分</span></td>
					</tr>
					<tr>
						<th>営業時間</th>
						<td>
						：<span itemprop="openingHours" content="Mo-Sa 10:00-23:00">平日・土曜 10:00～23:00（受付 22:00）</span><br />
						<span itemprop="openingHours" content="Su 10:00-20:00">日曜・祝日 10:00～20:00（受付 19:00）</span></td>
					</tr>
				</table>
				<address id="btnTel"><p><a href="tel:03-3985-5550" itemprop="telephone" content="03-3985-5550"><img src="/sp/images/btn_tel.png" alt="03-3985-5550"></a></p></address>
			</section>
			<!-- /#shop -->

<?php get_footer(); ?>