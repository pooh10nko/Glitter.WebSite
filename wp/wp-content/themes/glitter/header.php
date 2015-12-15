<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<style>
/*
	input[type="checkbox"],
	input[type="radio"]{
		box-shadow: none;
		border: none;
		border-radius: 0;
		margin: 0 10px 0 0;
		-webkit-appearance:none;
		-moz-appearance: none;
		background-color: $color_white;
		outline: 0;
		padding: 20px;

	}
	input[type="checkbox"]:checked,
	input[type="radio"]:checked{
		background: pink;
	}*/

	</style>
<script src="http://10nko.com/fixer_recruit/js/lib/jquery.js"></script>

	<script>

	$(function()
	{

		// カテゴリ inputを変更した場合の処理
		$('.input_cat').on('change',function(){
			if($(this).prop('checked')){
				$(this).closest('.search').find('.input_all').prop('checked',false);
			}
		})

		// All inputを変更した場合の処理
		$('.input_all').on('change',function(){
			if($(this).prop('checked')){
				$(this).closest('.search').find('.input_cat').prop('checked',false);
			}
		})
	})


    </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			<h1>

				<?php if(is_home()): ?>
					NEW DESIGN 20件
				<?php elseif(is_page()) : ?>
					<?php the_title(); ?>
				<?php elseif(is_category()) : ?>
					<?php
						//カテゴリ名
						$cats = get_the_category();
						$cat = $cats[0];
						if($cat->parent){
							$parent = get_category($cat->parent);
							echo $parent->cat_name;
						}else{
							echo $cat->cat_name;
						}		
					?>

					<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
?>


<!-- カテゴリーIDを表示したい所に -->
<?php echo $cat_id; ?>

<!-- カテゴリー名を表示したい所に -->
<?php echo $cat_name; ?>

<!-- カテゴリースラッグを表示したい所に -->
<?php echo $cat_slug; ?>

				<?php endif; ?>
			</h1>