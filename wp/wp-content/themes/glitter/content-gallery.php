<div class="item">
	<a href="<?php the_permalink() ?>">
		<figure class="img heightLine-group1">
		<?php
			$thumbnail_id = get_post_thumbnail_id();
			$eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
			// アイキャッチ画像
			if (has_post_thumbnail()) {
				echo '<img data-lazy="' .$eye_img[0]. '" alt="'.get_the_title().'">';
			}else {
				echo '<img src="/assets/img/noimage.png" alt="">';
			}
		?>
		</figure>
		<p class="label heightLine-group2">
			<span>オフ無料</span>
			<?php
				//「オーダー」のカテゴリ
				$categories = get_the_category();
				foreach($categories as $category) :
				if(cat_is_ancestor_of(29, $category))
				echo '<span>' . $category->cat_name . '</span>';
				endforeach;
			?>
			<?php
				//「デザイン」のカテゴリ
			      $categories = get_the_category();
			      foreach($categories as $category) :
			        if(cat_is_ancestor_of(21, $category))
			        echo '<span>' . $category->cat_name . '</span>';
			      endforeach;
			?>
		</p>
		<p class="price heightLine-group3">
			<? $price = get_field('金額');?>
			<? if($price): ?>
				<span class="priceNum"><? echo $price; ?></span>円
			<? endif; ?>
		</p>
		<p class="date heightLine-group4">【<?php the_time('Y.m.d'); ?>】</p>
		<p class="text heightLine-group5"><?php the_title(); ?></p>
	</a>
</div>


