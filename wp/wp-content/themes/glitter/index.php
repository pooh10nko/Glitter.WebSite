<?php get_header(); ?>

			<?php
				query_posts(
					Array(
					'post_type' => 'post',
					'posts_per_page' => 20,
					'orderby' => 'date',
					'order' => 'DESC'
					)
				);
				if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'nail' ); ?>
				
			<?php
				endwhile;
				endif;
			?>


<?php get_footer(); ?>
