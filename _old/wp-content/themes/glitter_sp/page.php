<?php get_header(); ?>


		<!--▼▼固定ページ内容▼▼-->
		<?php if (have_posts()) : ?>
		  <?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		  <?php endwhile; ?>
		<?php endif; ?>
		<!--▲▲固定ページ内容▲▲-->


<?php get_footer(); ?>