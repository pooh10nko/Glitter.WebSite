<?php get_header(); ?>
			<h1 class="page-title">

				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
			</h1>

<?php

	rewind_posts();
	get_template_part( 'loop', 'archive' );
?>

<?php get_footer(); ?>
