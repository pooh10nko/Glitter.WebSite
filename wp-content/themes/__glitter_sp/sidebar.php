
					<?php query_posts(array(
					    'post_type' => 'photo',
					    'posts_per_page' => -1
					)); ?>
					<!-- ループ開始 -->
					<?php if (have_posts()): while(have_posts()):the_post(); ?>
 <li>
 	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  </li>
					 <?php endwhile; endif; ?>
					<?php wp_reset_postdata(); wp_reset_query(); ?>
					
					