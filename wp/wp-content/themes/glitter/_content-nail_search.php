<!-- カテゴリ一覧 -->
<!-- <nav class="navi">
	【デザイン】
	<ul>
        <?php
            // カテゴリー一覧
            $categories = get_categories(array('parent'=>2, 'hide_empty'=>true));
            foreach($categories as $category) :
        ?>
        <li><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></li>

        <?php endforeach; ?>
	</ul>
</nav>
<nav class="navi">
	【オーダー】
	<ul>
        <?php
            // カテゴリー一覧
            $categories = get_categories(array('parent'=>4, 'hide_empty'=>true));
            foreach($categories as $category) :
        ?>
        <li><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></li>

        <?php endforeach; ?>
	</ul>
</nav>
<nav class="navi">
	【箇所】
	<ul>
        <?php
            // カテゴリー一覧
            $categories = get_categories(array('parent'=>1, 'hide_empty'=>true));
            foreach($categories as $category) :
        ?>
        <li><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></li>

        <?php endforeach; ?>
	</ul>
</nav> -->

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
	<input type="hidden" name="s" id="s" placeholder="検索" />

	<hr>
	<h2>【デザイン】</h2>
	<label><input type="radio" name="catnum[design]" value="ALL" checked>ALL</label><br>
	<?php
	$categories = get_categories('parent=21');
	foreach($categories as $category) :
	?>
	<label><input type="radio" name="catnum[design]" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label><br>
	<?php endforeach; ?>
<!--	<label><input type="radio" name="catnum[design]" value="5">アート</label><br> -->
<!--	<label><input type="radio" name="catnum[design]" value="6">シンプル</label><br>  -->

	<hr>
	<h2>【オーダー】</h2>
                                    <?php
$categories = get_categories('parent=1');
foreach($categories as $category) :
?>
	<label><input type="radio" name="catnum[order]" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label><br>
	<?php endforeach; ?>

	<hr>
	<h2>【箇所】</h2>
	<!-- <label><input type="radio" name="catnum[]parts" value="" checked>ALL</label><br> -->
                                    <?php
$categories = get_categories('parent=22');
foreach($categories as $category) :
?>
	<label><input type="radio" name="catnum[parts]" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label><br>
	<?php endforeach; ?>

	<input type="submit" value="検索" />
</form>


