<article style="border:1px solid #ccc;padding:20px;margin:20px;">
	<a href="<?php the_permalink() ?>">
		<div class="img">
			<?php
				// アイキャッチ画像
				if (has_post_thumbnail()) {
					the_post_thumbnail('medium');
				}else {
					echo '<img src="/html/img/noimg.png" alt="">';
				}
			?>
		</div>
			<h2>タイトル：<?php the_title(); ?></h2>
			<p class="category">
				カテゴリ：
				<?php
					$categories = get_the_category();
					foreach($categories as $category) :
						$args = array(
							'cat' => $category->cat_ID,
							'showposts' => -1,
							'post__not_in' => array($post->ID)
							);

					// query_posts($args);
					echo '<span>' . $category->cat_name . '</span>｜';
					
					endforeach;
					// wp_reset_query();
				?>

			</p>
			<span class="date"><?php the_time('Y年m月d日') ?></span>
		</div>
	</a>
</article>