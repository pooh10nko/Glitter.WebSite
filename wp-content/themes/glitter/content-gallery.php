<div class="item">
	<a href="<?php the_permalink() ?>">
		<figure class="img">
		<?php
			$thumbnail_id = get_post_thumbnail_id();
			$eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
			// アイキャッチ画像
			if (has_post_thumbnail()) {
				echo '<img src="' .$eye_img[0]. '" src="'.get_the_title().'">';
			}else {
				echo '<img src="/assets/img/noimage.gif" alt="">';
			}
		?>
		</figure>
		<p class="label">
		
			<? $off = get_field('オフ有料');?>
			<? if($off != 'はい'): ?>
				<span>オフ無料</span>
			<? endif; ?>

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
		<p class="date">【<?php the_time('Y.m.d'); ?>】</p>
		<p class="text"><?php the_title(); ?></p>
		<p class="price">
			<?php //「定額 ¥4980」の場合
				if(in_category('fix4980')):?>
				<span class="priceNum">4980</span>円
			<?php //「定額 ¥5980」の場合
				elseif(in_category('fix5980')): ?>
				<span class="priceNum">5980</span>円
			<?php
				else: ?>
				<? $price = get_field('金額');?>
				<? if($price): ?>
					<span class="priceNum"><? echo $price; ?></span>円
				<? endif; ?>
			<?php endif; ?>
		</p>
	</a>
</div>


