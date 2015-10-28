<?php
/**
 * Template Name: ギャラリーページ

 */
  get_header(); ?>


			<section id="gallery" class="section">
				<h1>GALLERY</h1>
				<ul>

				<?php while (have_posts()) : the_post(); ?>
			        <?php endwhile; ?>
			        <?php $posts = get_posts(array(
			                    'numberposts' => -1,
			                    'post_type' => 'photo',
			                )); ?>
			                <?php foreach( $posts as $post ): ?>
			                    <?php setup_postdata( $post ); ?>
			                    
			            <li class="<?php if(get_post_meta($post->ID,'シーズン',true) == '春'): ?>spring<?php elseif(get_post_meta($post->ID,'シーズン',true) == '夏'): ?>summer<?php elseif(get_post_meta($post->ID,'シーズン',true) == '秋'): ?>autumn<?php elseif(get_post_meta($post->ID,'シーズン',true) == '冬'): ?>winter<?php endif; ?>">

	                    <h2><?php echo nl2br(get_post_meta($post->ID,'年',true)); ?> <?php if(get_post_meta($post->ID,'シーズン',true) == '春'): ?>Spring<?php elseif(get_post_meta($post->ID,'シーズン',true) == '夏'): ?>Summer<?php elseif(get_post_meta($post->ID,'シーズン',true) == '秋'): ?>Autumn<?php elseif(get_post_meta($post->ID,'シーズン',true) == '冬'): ?>Winter<?php endif; ?></h2>
	                    <h3><?php echo nl2br(get_post_meta($post->ID,'キャッチコピー',true)); ?></h3>

	                    <ul class="bxslider">
				        	<!--繰り返す内容-->
				        	<?php if(get_post_meta($post->ID,'キャッチコピー',true)): ?>

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

									<?php for( $i = 0; $i < $length; $i ++ ){ ?>
									    <?php $postImg_sp = wp_get_attachment_image_src($postImg[$i],'full' ); ?>
										<?php if($postImg[$i] !='') { ?>
											 <li itemtype="image"><img src="<?php echo $postImg_sp[0]; ?>" alt="<?php echo $postName[$i]; ?>" /></li>
									    <?php } ?>
									<?php } ?>


							<?php endif; ?>
				            <!--/繰り返す内容-->

			            </ul>

						</li>


			          <?php endforeach; ?>
			 <?php wp_reset_query(); ?>
				</ul>

				<div id="btn_top"><a href="/">TOPに戻る</a></div>

			</section>
			<!-- /#gallery -->

<?php get_footer(); ?>