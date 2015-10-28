<?php include (TEMPLATEPATH.'/header-top.php');?>
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
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額１',true)); ?>円</p></div>
			</li>
			<li class="price2">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類２',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類２',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前２',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細２',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額２',true)); ?>円</p></div>
			</li>
			<li class="price3">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類３',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類３',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前３',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細３',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額３',true)); ?>円</p></div>
			</li>
			<li class="price4">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類４',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類４',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前４',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細４',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額４',true)); ?>円</p></div>
			</li>
			<li class="price5">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類５',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類５',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前５',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細５',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額５',true)); ?>円</p></div>
			</li>
			<li class="price6">
				<h3><?php if(get_post_meta($post->ID,'クーポン種類６',true) == 'FOOT'): ?><img src="/common/images/icon_foot.png" alt="FOOT" /><?php elseif(get_post_meta($post->ID,'クーポン種類６',true) == 'HAND&FOOT'): ?><img src="/common/images/icon_handfoot.png" alt="HAND&FOOT" /><?php endif; ?><?php echo nl2br(get_post_meta($post->ID,'クーポン名前６',true)); ?></h3>
				<span>≪<?php echo nl2br(get_post_meta($post->ID,'クーポン詳細６',true)); ?>≫</span>
				<div class="en"><img src="/common/images/price_kira1.gif" alt="" class="kira" /><p class="priceTxt"><?php echo nl2br(get_post_meta($post->ID,'クーポン金額６',true)); ?>円</p></div>
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
		
<div class="main" id="topmenu">
		<h2><img src="/common/images/menu_h2.png" alt="メニュー"></h2>
		<!--▼▼固定ページ内容▼▼-->

		<div id="menu">
			<div id="menuNavi">
				<ul>
					<li class="menu1"><a href="#box1"><img alt="ジェル" src="/common/images/menu_navi01.png" /></a></li>
					<li class="menu2"><a href="#box2"><img alt="ペディキュア" src="/common/images/menu_navi02.png" /></a></li>
					<li class="menu3"><a href="#box3"><img alt="アートネイル	" src="/common/images/menu_navi03.png" /></a></li>
					<li class="menu4"><a href="#box4"><img alt="スカルプチュア" src="/common/images/menu_navi04.png" /></a></li>
					<li class="menu5"><a href="#box5"><img alt="ジェルオフのみ" src="/common/images/menu_navi05.png" /></a></li>
					<li class="menu6"><a href="#box6"><img alt="マニキュア" src="/common/images/menu_navi06.png" /></a></li>
					<li class="menu7"><a href="/bridal/"><img alt="ブライダルネイル" src="/common/images/menu_navi07.png" /></a></li>
				</ul>
			</div>
			<div id="offImg">
				<?php 
				$fields = get_post_custom(15);
				$val = $fields['メニューキャッチコピー'][0];
				echo $val; ?>
			</div>
			<?php $posts = get_posts(array(
				'numberposts' => -1,
				'post_type' => 'price',
				'orderby' => 'title',
				'order' => 'ASC'
				)); ?>
			<?php foreach( $posts as $post ): ?>
				<?php setup_postdata( $post ); ?>

				<?php
			    global $wpdb;
			    $query = "SELECT * FROM $wpdb->postmeta WHERE post_id = $post->ID";
			    $cf = $wpdb->get_results($query, ARRAY_A);

			    $menuName = array();
			    $menuText = array();
			    $menuPrice = array();

			    foreach( $cf as $row ){
			        if( $row['meta_key'] == "メニュー名前" ){
			            array_push( $menuName, $row['meta_value'] );
			        }
			        if( $row['meta_key'] == "メニュー詳細" ){
			            array_push( $menuText, $row['meta_value'] );
			        }
			        if( $row['meta_key'] == "メニュー金額" ){
			            array_push( $menuPrice, $row['meta_value'] );
			        }
			    }
				?>
				<?php $length = count( $menuName ); ?>


			<?php if($post->ID == 664): ?>
			<div class="box" id="box1">
				<h3><img alt="Gel" src="/common/images/menu_h3_01.png" /></h3>
				<h4><img alt="ジェル HAND／FOOT共に同料金" src="/common/images/menu_h4_01.png" /></h4>
				<table>
					<tbody>
						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
							<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
						    <tr><th><?php if($menuName[$i] !='') { ?><span><?php echo $menuName[$i]; ?></span><?php } ?>
						    <?php if($menuText[$i] !='') { ?><br /><?php echo $menuText[$i]; ?><?php } ?></th>
						    <?php if($menuPrice[$i] !='') { ?><td>¥<span class="price"><?php echo $menuPrice[$i]; ?></span></td><?php } ?>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>

			<?php if($post->ID == 532): ?>
			<div class="box" id="box4">
				<h3><img alt="SCLPTURE" src="/common/images/menu_h3_04.png" /></h3>
				<h4><img alt="スカルプチュア" src="/common/images/menu_h4_04.png" /></h4>
				<table>
					<tbody>
						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
							<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
						    <tr><th><?php if($menuName[$i] !='') { ?><span><?php echo $menuName[$i]; ?></span><?php } ?>
						    <?php if($menuText[$i] !='') { ?><br /><?php echo $menuText[$i]; ?><?php } ?></th>
						    <?php if($menuPrice[$i] !='') { ?><td>¥<span class="price"><?php echo $menuPrice[$i]; ?></span></td><?php } ?>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>

			<?php if($post->ID == 531): ?>
			<div class="box" id="box3">
				<h3><img alt="Art" src="/common/images/menu_h3_03.png" /></h3>
				<h4><img alt="アート" src="/common/images/menu_h4_03.png" /></h4>
				<table>
					<tbody>
						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
							<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
						    <tr><th><?php if($menuName[$i] !='') { ?><span><?php echo $menuName[$i]; ?></span><?php } ?>
						    <?php if($menuText[$i] !='') { ?><br /><?php echo $menuText[$i]; ?><?php } ?></th>
						    <?php if($menuPrice[$i] !='') { ?><td>¥<span class="price"><?php echo $menuPrice[$i]; ?></span>〜</td><?php } ?>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>

			<?php if($post->ID == 530): ?>
			<div class="box" id="box2">
				<h3><img alt="Foot" src="/common/images/menu_h3_02.png" /></h3>
				<h4><img alt="ペディキュアメニュー &lt;フットバス＋角質ケア＋マッサージ&gt; ※足のお手入れをした後にフレグランスクリームでマッサージ致します。足のむくみ改善や保湿に最適です。" src="/common/images/menu_h4_02.png" /></h4>
				<table>
					<tbody>
						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
							<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
						    <tr><th><?php if($menuName[$i] !='') { ?><span><?php echo $menuName[$i]; ?></span><?php } ?>
						    <?php if($menuText[$i] !='') { ?><br /><?php echo $menuText[$i]; ?><?php } ?></th>
						    <?php if($menuPrice[$i] !='') { ?><td>¥<span class="price"><?php echo $menuPrice[$i]; ?></span></td><?php } ?>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>

			<?php if($post->ID == 670): ?>
			<div class="box" id="box7">
				<h3><img alt="Replacement" src="/common/images/menu_h3_07.png" /></h3>
				<h4><img alt="付け替えオフ" src="/common/images/menu_h4_07.png" /></h4>
				<table>
					<tbody>
						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
							<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
						    <tr><th><?php if($menuName[$i] !='') { ?><span><?php echo $menuName[$i]; ?></span><?php } ?>
						    <?php if($menuText[$i] !='') { ?><br /><?php echo $menuText[$i]; ?><?php } ?></th>
						    <?php if($menuPrice[$i] !='') { ?><td>¥<span class="price"><?php echo $menuPrice[$i]; ?></span></td><?php } ?>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>

			<?php if($post->ID == 533): ?>
			<div class="box" id="box5">
				<h3><img alt="Only off" src="/common/images/menu_h3_05.png" /></h3>
				<h4><img alt="オフのみ （当店、他店ともに）" src="/common/images/menu_h4_05.png" /></h4>
				<table>
					<tbody>
						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
							<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
						    <tr><th><?php if($menuName[$i] !='') { ?><span><?php echo $menuName[$i]; ?></span><?php } ?>
						    <?php if($menuText[$i] !='') { ?><br /><?php echo $menuText[$i]; ?><?php } ?></th>
						    <?php if($menuPrice[$i] !='') { ?><td>¥<span class="price"><?php echo $menuPrice[$i]; ?></span></td><?php } ?>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>
			
			<?php if($post->ID == 534): ?>
			<div class="box" id="box6">
				<h3><img alt="Care color" src="/common/images/menu_h3_06.png" /></h3>
				<h4><img alt="マニキュアメニュー" src="/common/images/menu_h4_06.png" /></h4>
				<table>
					<tbody>
						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
							<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
						    <tr><th><?php if($menuName[$i] !='') { ?><span><?php echo $menuName[$i]; ?></span><?php } ?>
						    <?php if($menuText[$i] !='') { ?><br /><?php echo $menuText[$i]; ?><?php } ?></th>
						    <?php if($menuPrice[$i] !='') { ?><td>¥<span class="price"><?php echo $menuPrice[$i]; ?></span></td><?php } ?>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>

			<?php endif; ?>

			<?php endforeach; ?>
			<?php wp_reset_query(); ?>

			<div id="warranty">
				<p class="txt1">当店では、お客様に安心してサービスを受けていただく為に保証制度を設けております。<br />保証期間中にジェルネイル・スカルプチュアなどが完全に取れてしまった場合や浮いてしまった場合、ストーンが取れた場合には</p>
				<p class="txt2">無償で施術させていただきます。</p>
				<p class="txt3">当サロンにお越しいただいてから、7日間を無料保証期間とさせていただきます。<br >※デザインやカラーの変更を希望される場合は別途料金が発生します。</p>
			</div>
		</div>
		<!--▲▲固定ページ内容▲▲-->

	</div>
		
	
<div class="main" id="topgallery">
		<h2><img src="/common/images/garally_h2.png" alt="ギャラリー"></h2>
		
		
		
		<!--▼▼固定ページ内容▼▼-->

		<div id="gallery">
			<div id="imgList">
				<ul class="clearfix">
				<?php while (have_posts()) : the_post(); ?>
			        <?php endwhile; ?>
			        <?php $posts = get_posts(array(
			                    'numberposts' => -1,
			                    'post_type' => 'photo',
			                )); ?>
			                <?php foreach( $posts as $post ): ?>
			                    <?php setup_postdata( $post ); ?>
			        	<!--繰り返す内容-->
			        	<?php if(get_post_meta($post->ID,'キャッチコピー',true)): ?>
				           <li style="opacity: 1;">
				           <?php $postCustomMulti = post_custom('ネイル画像'); if($postCustomMulti) { ?>
				           	<a href="<?php the_permalink() ?>" target="_blank">
				           	<?php } ?>
								<h3><?php the_time('Y') ?>.<?php the_time('m') ?></h3>
								<h4><?php echo nl2br(get_post_meta($post->ID,'キャッチコピー',true)); ?></h4>
								<p><img src="/common/images/garally_flag1.png" alt="" /></p>
								<h5><?php echo nl2br(get_post_meta($post->ID,'説明文',true)); ?></h5>
								<div class="photo">
									<div class="nail <?php if(get_post_meta($post->ID,'メイン画像の位置',true) == '下'): ?>bottom<?php elseif(get_post_meta($post->ID,'メイン画像の位置',true) == '中'): ?>center<?php elseif(get_post_meta($post->ID,'メイン画像の位置',true) == '上'): ?>top<?php else:?>bottom<?php endif; ?>"><?php echo wp_get_attachment_image(get_post_meta($post->ID,'メイン画像',true),'medium'); ?></div>
									<img src="/common/images/garally_frame_list.png" class="frame" alt="<?php echo nl2br(get_post_meta($post->ID,'キャッチコピー',true)); ?>" />
								</div>
	
								<div class="btnMore"></div>
							<?php $postCustomMulti = post_custom('ネイル画像'); if($postCustomMulti) { ?>
				           	</a>
				           	<?php } ?>
							</li>
						<?php endif; ?>
			            <!--/繰り返す内容-->
			          <?php endforeach; ?>
			 <?php wp_reset_query(); ?>
				</ul>
			
			</div>


		</div>
		<!--▲▲固定ページ内容▲▲-->

	</div>
	
	
			
	<div class="main" id="topconcept">
		<h2><img src="/common/images/concept_h2.png" alt="コンセプト" /></h2>

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
	
	
	
	
		<div class="main" id="topfaq">
		<h2><img src="/common/images/faq_h2.png" alt="よくあるご質問" /></h2>
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

<div class="main" id="topaccess">
		<h2><img src="/common/images/access_h2.png" alt="アクセス"></h2>

		<!--▼▼固定ページ内容▼▼-->
		<?php
$page_id = 25;  
$content = get_page($page_id);
echo $content->post_content;
?>
		</div>		  				<!--▲▲固定ページ内容▲▲-->



<!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://facebook.com/pages/%E3%83%8D%E3%82%A4%E3%83%AB%E3%82%B5%E3%83%AD%E3%83%B3-glitter-%E6%B1%A0%E8%A2%8B%E8%A5%BF%E5%8F%A3%E5%BA%97/131115330318851" data-width="500" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://facebook.com/pages/%E3%83%8D%E3%82%A4%E3%83%AB%E3%82%B5%E3%83%AD%E3%83%B3-glitter-%E6%B1%A0%E8%A2%8B%E8%A5%BF%E5%8F%A3%E5%BA%97/131115330318851"><a href="https://facebook.com/pages/%E3%83%8D%E3%82%A4%E3%83%AB%E3%82%B5%E3%83%AD%E3%83%B3-glitter-%E6%B1%A0%E8%A2%8B%E8%A5%BF%E5%8F%A3%E5%BA%97/131115330318851">ネイルサロン glitter 池袋西口店</a></blockquote></div></div>
-->


	</div>
	<!-- /#main -->
	</div>
	<!-- /#mainTop -->
<?php get_footer(); ?>