<?php
/**
 * Template Name: メニューページ

 */
  get_header(); ?>


			<section id="menulist" class="section">
				<h1>MENU LIST</h1>
				<ul>
			
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
			
			<li>
				<h2><img src="/sp/images/menu_gel.png" alt="ジェル"></h2>
				<h3>HAND／FOOT共に同料金</h3>
				<dl>
					<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
					    <dt><?php if($menuName[$i] !='') { ?><?php echo $menuName[$i]; ?><?php } ?></dt>
					    <dd>
					    <?php if($menuText[$i] !='') { ?><p><?php echo $menuText[$i]; ?></p><?php } ?>
					    <?php if($menuPrice[$i] !='') { ?><p class="price">￥<?php echo $menuPrice[$i]; ?></p><?php } ?>
					    </dd>
						<?php } ?>
					<?php } ?>
				</dl>
			</li>

			<?php endif; ?>

			<?php if($post->ID == 532): ?>
			
			<li>
				<h2><img src="/sp/images/menu_sclpture.png" alt="スカルプチュア"></h2>
				<h3>スカルプチュア</h3>
				<dl>
					<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
					    <dt><?php if($menuName[$i] !='') { ?><?php echo $menuName[$i]; ?><?php } ?></dt>
					    <dd>
					    <?php if($menuText[$i] !='') { ?><p><?php echo $menuText[$i]; ?></p><?php } ?>
					    <?php if($menuPrice[$i] !='') { ?><p class="price">￥<?php echo $menuPrice[$i]; ?></p><?php } ?>
					    </dd>
						<?php } ?>
					<?php } ?>
				</dl>
			</li>
			
			<?php endif; ?>

			<?php if($post->ID == 531): ?>
			
			<li>
				<h2><img src="/sp/images/menu_art.png" alt="アート"></h2>
				<h3>アート</h3>
				<dl>
					<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
					    <dt><?php if($menuName[$i] !='') { ?><?php echo $menuName[$i]; ?><?php } ?></dt>
					    <dd>
					    <?php if($menuText[$i] !='') { ?><p><?php echo $menuText[$i]; ?></p><?php } ?>
					    <?php if($menuPrice[$i] !='') { ?><p class="price">￥<?php echo $menuPrice[$i]; ?></p><?php } ?>
					    </dd>
						<?php } ?>
					<?php } ?>
				</dl>
			</li>
			<?php endif; ?>

			<?php if($post->ID == 530): ?>
			
			<li>
				<h2><img src="/sp/images/menu_foot.png" alt="Foot"></h2>
				<h3>ペディキュアメニュー<br>フットバス＋角質ケア＋マッサージ</h3>
				<dl>
					<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
					    <dt><?php if($menuName[$i] !='') { ?><?php echo $menuName[$i]; ?><?php } ?></dt>
					    <dd>
					    <?php if($menuText[$i] !='') { ?><p><?php echo $menuText[$i]; ?></p><?php } ?>
					    <?php if($menuPrice[$i] !='') { ?><p class="price">￥<?php echo $menuPrice[$i]; ?></p><?php } ?>
					    </dd>
						<?php } ?>
					<?php } ?>
				</dl>
			</li>
			
			<?php endif; ?>

			<?php if($post->ID == 670): ?>
			
			<li>
				<h2><img src="/sp/images/menu_replacement.png" alt="Replacement"></h2>
				<h3>付け替えオフ</h3>
				<dl>
					<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
					    <dt><?php if($menuName[$i] !='') { ?><?php echo $menuName[$i]; ?><?php } ?></dt>
					    <dd>
					    <?php if($menuText[$i] !='') { ?><p><?php echo $menuText[$i]; ?></p><?php } ?>
					    <?php if($menuPrice[$i] !='') { ?><p class="price">￥<?php echo $menuPrice[$i]; ?></p><?php } ?>
					    </dd>
						<?php } ?>
					<?php } ?>
				</dl>
			</li>
			
			<?php endif; ?>

			<?php if($post->ID == 533): ?>
			
			<li>
				<h2><img src="/sp/images/menu_onlyoff.png" alt="Only off"></h2>
				<h3>オフのみ （当店、他店ともに）</h3>
				<dl>
					<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
					    <dt><?php if($menuName[$i] !='') { ?><?php echo $menuName[$i]; ?><?php } ?></dt>
					    <dd>
					    <?php if($menuText[$i] !='') { ?><p><?php echo $menuText[$i]; ?></p><?php } ?>
					    <?php if($menuPrice[$i] !='') { ?><p class="price">￥<?php echo $menuPrice[$i]; ?></p><?php } ?>
					    </dd>
						<?php } ?>
					<?php } ?>
				</dl>
			</li>
			
			<?php endif; ?>
			
			<?php if($post->ID == 534): ?>
			
			<li>
				<h2><img src="/sp/images/menu_care.png" alt="Care color"></h2>
				<h3>マニキュアメニュー</h3>
				<dl>
					<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						<?php if($menuName[$i] !='' && $menuPrice[$i] !='') { ?>
					    <dt><?php if($menuName[$i] !='') { ?><?php echo $menuName[$i]; ?><?php } ?></dt>
					    <dd>
					    <?php if($menuText[$i] !='') { ?><p><?php echo $menuText[$i]; ?></p><?php } ?>
					    <?php if($menuPrice[$i] !='') { ?><p class="price">￥<?php echo $menuPrice[$i]; ?></p><?php } ?>
					    </dd>
						<?php } ?>
					<?php } ?>
				</dl>
			</li>
			

			<?php endif; ?>

			<?php endforeach; ?>
			<?php wp_reset_query(); ?>
		
		
		
		
				</ul>
				
			</section>
			<!-- /#menulist -->

			<section id="bridal" class="section">
				<h1>
					<img src="/sp/images/bridal_title.png" alt="">
					<img src="/sp/images/bridal_text.png" class="txt" alt="">
				</h1>
				<dl>
					<dt>【ブライダル】ジェルアート</dt>
					<dd>
						<p>※デザインにより料金は異なります<br>●ファイル+ドライケア+ジェル+アート+ジェルコート<br>●ご予算に応じたブライダルネイルを提案致します</p>
						<p class="price">￥6,500〜</p>
					</dd>
					<dt>【ブライダル】スカルプアート</dt>
					<dd>
						<p>※デザインにより料金は異なります<br>●ファイル+ドライケア+スカルプ（長さだし）10本+アート+ジェルコート<br>●ご予算に応じたブライダルネイルを提案</p>
						<p class="price">￥8,500〜</p>
					</dd>
					<dt>【ブライダル】マニキュアアート</dt>
					<dd>
						<p>※デザインにより料金は異なります<br>●ファイル+磨き+甘皮処理+カラー+アート<br>●ご予算に応じたブライダルネイルを提案致します</p>
						<p class="price">￥4,500〜</p>
					</dd>
				</dl>
				<p><img src="/sp/images/bridal_frame.png" class="frame" alt=""></p>
			</section>
			<!-- /#bridal -->
			
			<div id="btn_top"><a href="/">TOPに戻る</a></div>
			

<?php get_footer(); ?>