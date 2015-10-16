<?php
/**
 * Template Name: ギャラリーページ

 */
  get_header(); ?>


	<!-- #main -->
	<div id="main">
		<h2><img src="/common/images/garally_h2.png" alt="ギャラリー" /></h2>
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
				           <li>
				           <?php $postCustomMulti = post_custom('ネイル画像'); if($postCustomMulti) { ?>
				           	<a href="<?php the_permalink() ?>">
				           	<?php } ?>
								<h3><?php the_time('Y') ?>.<?php the_time('m') ?></h3>
								<h4><?php echo nl2br(get_post_meta($post->ID,'キャッチコピー',true)); ?></h4>
								<p><img src="/common/images/garally_flag1.png" alt="" /></p>
								<h5><?php echo nl2br(get_post_meta($post->ID,'説明文',true)); ?></h5>
								<div class="photo">
									<div class="nail <?php if(get_post_meta($post->ID,'メイン画像の位置',true) == '下'): ?>bottom<?php elseif(get_post_meta($post->ID,'メイン画像の位置',true) == '中'): ?>center<?php elseif(get_post_meta($post->ID,'メイン画像の位置',true) == '上'): ?>top<?php else:?>bottom<?php endif; ?>"><?php echo wp_get_attachment_image(get_post_meta($post->ID,'メイン画像',true),'medium'); ?></div>
									<img src="/common/images/garally_frame_list.png" class="frame" alt="" />
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
	<!-- /#main -->

<?php get_footer(); ?>