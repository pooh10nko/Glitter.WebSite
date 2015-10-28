<?php get_header(); ?>




	<!-- #main -->
	<div id="main">
		<h2><img src="/common/images/garally_h2.png" alt="Gallery" /></h2>
		<div id="pankuzu" class="breadcrumb">
			<ul class="clearfix">
				<li><a href="<?php bloginfo('url'); ?>">ネイルサロン glitter池袋西口店</a><span>&gt;</span></li>
				<?php if($post -> post_parent != 0 ): ?>
				<?php $ancestors = array_reverse( $post-> ancestors ); ?>
				<?php foreach($ancestors as $ancestor): ?>
				<li><a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a><span>&gt;</span></li>
				<?php endforeach; ?>
				<?php endif; ?>
				<li><a href="/gallery/">Gallery</a><span>&gt;</span></li>
				<li><?php echo nl2br(get_post_meta($post->ID,'年',true)); ?><?php if(get_post_meta($post->ID,'シーズン',true) == '春'): ?>Spring<?php elseif(get_post_meta($post->ID,'シーズン',true) == '夏'): ?>Summer<?php elseif(get_post_meta($post->ID,'シーズン',true) == '秋'): ?>Autumn<?php elseif(get_post_meta($post->ID,'シーズン',true) == '冬'): ?>Winter<?php endif; ?></li>
			</ul>
		</div>





		<!--▼▼固定ページ内容▼▼-->
		<div id="gallery_detail">

			<div id="title" class="clearfix">
				<h3><img src="/common/images/garally/<?php echo nl2br(get_post_meta($post->ID,'年',true)); ?><?php if(get_post_meta($post->ID,'シーズン',true) == '春'): ?>spring<?php elseif(get_post_meta($post->ID,'シーズン',true) == '夏'): ?>summer<?php elseif(get_post_meta($post->ID,'シーズン',true) == '秋'): ?>autumn<?php elseif(get_post_meta($post->ID,'シーズン',true) == '冬'): ?>winter<?php endif; ?>.png" alt="<?php echo nl2br(get_post_meta($post->ID,'年',true)); ?><?php if(get_post_meta($post->ID,'シーズン',true) == '春'): ?>Spring<?php elseif(get_post_meta($post->ID,'シーズン',true) == '夏'): ?>Summer<?php elseif(get_post_meta($post->ID,'シーズン',true) == '秋'): ?>Autumn<?php elseif(get_post_meta($post->ID,'シーズン',true) == '冬'): ?>Winter<?php endif; ?>" /></h3>
				<table class="sub">
					<tr>
						<td>
							<h4><?php echo nl2br(get_post_meta($post->ID,'キャッチコピー',true)); ?></h4>
							<h5><?php echo nl2br(get_post_meta($post->ID,'説明文',true)); ?></h5>
						</td>
					</tr>
				</table>
			</div>

			<?php foreach( $posts as $post ): ?>
				<?php setup_postdata( $post ); ?>

				<?php
			    global $wpdb;
			    $query = "SELECT * FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id DESC";
			    $cf = $wpdb->get_results($query, ARRAY_A);

			    $postImg = array();

			    foreach( $cf as $row ){
			        if( $row['meta_key'] == "ネイル画像" ){
			            array_push( $postImg, $row['meta_value'] );
			        }
			    }
				?>
				<?php $length = count( $postImg ); ?>

				<div id="slider" class="flexslider">
					<ul class="slides">

						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						    <?php $postImg_sp = wp_get_attachment_image_src($postImg[$i],'full' ); ?>

						    <?php if($postImg[$i] !='') { ?>
								<li><table><tr><td><img src="<?php echo $postImg_sp[0]; ?>" alt="" class="resize" /></td></tr></table></li>
						    <?php } ?>
						<?php } ?>
					</ul>
					<div class="frame"><img src="/common/images/garally_frame.png" class="frame" alt="" /></div>
				</div>

				<?php $length = count( $postImg ); ?>
				<div id="carousel" class="flexslider">
					<ul class="slides">
						<?php for( $i = 0; $i < $length; $i ++ ){ ?>
						    <?php $postImg_sp = wp_get_attachment_image_src($postImg[$i],'full' ); ?>
						    <?php if($postImg[$i] !='') { ?>
								<li><table><tr><td><img src="<?php echo $postImg_sp[0]; ?>" alt="" class="resize" /></td></tr></table><div class="frame"><img src="/common/images/garally_frame_thum.png" class="frame" alt="" /></div></li>
						    <?php } ?>
						<?php } ?>
					</ul>
				</div>
			<?php endforeach; ?>

			<div id="pagenav">
				<table>
					<tr>
						<td class="prev"><?php previous_post_link('%link','<img src="/common/images/garally_page_back.png" alt="BACK" />'); ?></td>
						<td class="home"><a href="/gallery/"><img src="/common/images/garally_home.png" alt="GARALLY HOME" /></a></td>
						<td class="next"><?php next_post_link('%link','<img src="/common/images/garally_page_next.png" alt="NEXT" />'); ?></td>
					</tr>
				</table>
			</div>
		</div>

		<!--▲▲固定ページ内容▲▲-->

	</div>
	<!-- /#main -->

<?php get_footer(); ?>