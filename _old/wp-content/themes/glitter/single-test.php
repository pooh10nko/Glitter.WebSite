<?php get_header(); ?>

<?php the_time('Y年m月d日(D)'); ?><br />

				<?php 
					$thumbnail_id = get_post_thumbnail_id($post->ID);
					$image = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
					$src = $image[0];
					$width = $image[1];
					$height = $image[2];
					echo '<img src="'.$src.'" alt="" />';
				?><br />
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

	</div>
	<!-- /#main -->

<?php get_footer(); ?>