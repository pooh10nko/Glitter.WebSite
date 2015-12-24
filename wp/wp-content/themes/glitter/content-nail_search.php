		<nav class="search">
			<div class="inner">
				<p class="search_customer col_R"><a href="/blog/">お客様ネイル</a></p>
				<p class="search_category col_L">
					<a href="">
						<span class="icon_close">
							<span class="line"></span>
							<span class="line"></span>
						</span>
						カテゴリー検索
					</a>
				</p>
			</div>
			<form class="search_pulldown" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
				<input type="hidden" name="s" id="s" placeholder="検索">
				<div class="inner col_Table">
					<div class="search_list design col_Cell">
						<p class="title">DESIGN</p>
						<label class="active"><input type="radio" name="" value="" checked class="input input_all">ALL</label>
						<?php
							$categories = get_categories('parent=21');
							foreach($categories as $category) :
						?>
						<label><input type="radio" name="catnum[design]" value="<?php echo $category->term_id; ?>" class="input input_cat"><?php echo $category->name; ?></label>
						<?php endforeach; ?>
					</div>
					<div class="search_list parts col_Cell">
						<p class="title">PARTS</p>
						<label class="active"><input type="radio" name="" value="" checked class="input input_all">ALL</label>
						<?php
							$categories = get_categories('parent=22');
							foreach($categories as $category) :
						?>
						<label><input type="radio" name="catnum[parts]" value="<?php echo $category->term_id; ?>" class="input input_cat"><?php echo $category->name; ?></label>
						<?php endforeach; ?>
					</div>
					<div class="search_list order col_Cell">
						<p class="title">ORDER</p><label class="active"><input type="radio" name="" value="" checked class="input input_all">ALL</label>
						<?php
							$categories = get_categories('parent=29');
							foreach($categories as $category) :
						?>
						<label><input type="radio" name="catnum[order]" value="<?php echo $category->term_id; ?>" class="input input_cat"><?php echo $category->name; ?></label>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="btn_area">
					<button type="submit" class="btn green">条件を絞り込む</button>
				</div>
			</form>
		</nav>
		<!-- /.search -->
