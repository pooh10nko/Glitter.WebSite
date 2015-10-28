<?php
/**
 * Template Name: メニューページ
 */
  get_header(); ?>


	<!-- #main -->
	<div id="main">
		<h2><img src="/common/images/menu_h2.png" alt="メニュー" /></h2>
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
			<div id="offImg">いつでもジェルオフ無料！</div>
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
	<!-- /#main -->

<?php get_footer(); ?>