<!DOCTYPE html>  
<!--[if IE 8 ]> <html class="ie8" lang="ja"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9" lang="ja"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#" itemscope itemtype="http://schema.org/NailSalon"> <!--<![endif]-->
<head>

<!-- Typekit -->
<script src="https://use.typekit.net/wvs7zvn.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1 ,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="keywords" content="ネイルサロン,ネイル,安い,池袋,川越,ジェル,安い,オフ,オフ無料,glitter,グリッター">

<?php if(is_home() && !is_paged()): ?>
<meta name="description" content="池袋駅徒歩1分 川越駅徒歩4分 glitter（グリッター）では常にジェルオフが無料!!「無理なくネイルを楽しんでもらいたい。」をコンセプトに、ジェルオフ無料でプロのネイリストがデザインをご提案させて頂きます。">
<?php elseif(is_single()): ?>
<meta name="description" content="新作ネイル「<?php the_title(); ?>」の詳glitter（グリッター）では「無理なくネイルを楽しんでもらいたい。」をコンセプトに、ジェルオフ無料でプロのネイリストがデザインをご提案させて頂きます。">
<?php else: ?>
<meta name="description" content="ネイルサロンglitter（グリッター）の<?php the_title(); ?>ページです。池袋駅徒歩1分 川越駅徒歩4分 glitter（グリッター）では常にジェルオフが無料!!「無理なくネイルを楽しんでもらいたい。」をコンセプトに、ジェルオフ無料でプロのネイリストがデザインをご提案させて頂きます。">
<?php endif; ?>

<title>
<?php
	global $page, $paged;
	if(!is_home()){
		echo('');
	}
	wp_title( '｜', true, 'right' );
	bloginfo( 'name' );
?>
</title>

<!-- ICON -->
<meta name="apple-mobile-web-app-title" content="Nail glitter">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="/assets/img/webclip.png" />

<!-- OGP -->
<meta property="og:locale" content="ja_JP">
<meta property="og:title" content="ネイルサロンglitter（グリッター）">
<meta property="og:type" content="website">

<?php if(is_single()): ?>
<?php
	$thumbnail_id = get_post_thumbnail_id();
	$eye_img = wp_get_attachment_image_src( $thumbnail_id , 'large' );
	// アイキャッチ画像
		echo '<meta property="og:image" content="' .$eye_img[0]. '">';
?>
<?php else: ?>
<meta property="og:image" content="http://nail-glitter.net/assets/img/share.jpg">
<?php endif; ?>

<meta property="og:site_name" content="ネイルサロンglitter（グリッター）">
<meta property="og:description" content="SNS割引10%!!常にオフ無料♡池袋駅徒歩1分 川越駅徒歩4分 glitter（グリッター）では「無理なくネイルを楽しんでもらいたい。」をコンセプトに、ジェルオフ無料でプロのネイリストがデザインをご提案させて頂きます。">
<!-- CSS -->
<link rel="stylesheet" href="/assets/css/style.css">

<!-- JS -->
<script src="/assets/js/lib/jquery.js"></script>
<script src="/assets/js/lib/jquery.easing.js"></script>
<script src="/assets/js/lib/jquery.lazyload.min.js"></script>
<script src="/assets/js/lib/slick.min.js"></script>
<script src="/assets/js/lib/jquery.matchHeight-min.js"></script>
<script src="/assets/js/Main.js"></script>
<?php if(is_page('access')): ?>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<?php endif; ?>
<!--[if lte IE 8]>
<script src="/assets/js/lib/html5shiv.js"></script>
<script src="/assets/js/lib/selectivizr.js"></script>
<![endif]-->

<!-- GA -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-44839557-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script>

<?php wp_head(); ?>

<?php if(is_single()): ?>
<meta property="og:description" content="新作ネイル「<?php the_title(); ?>」の詳細はこちら！glitter（グリッター）では「無理なくネイルを楽しんでもらいたい。」をコンセプトに、ジェルオフ無料でプロのネイリストがデザインをご提案させて頂きます。">
<?php endif; ?>

</head>

<?php
if(is_home() && !is_paged()){
	$pageName = 'index';
}else if(is_page()){
	$pageName = get_post($wp_query->post->ID)->post_name;
}else if(is_404()){
	$pageName = 'menu';
}else if(is_singular('blogs')){
	$pageName = 'blog';
}else if(is_search()){
	$pageName = 'gallery';
}else if(is_single()){
	// 「お客様ネイル」に属している場合
	if(in_category('customer')){
		$pageName = 'blog';
	}else{
		$pageName = 'gallery';
	}
}
?>

<body id="<?php echo $pageName; ?>Page">

<div class="loading"></div>
<p id="pagetop"></p>

<div class="header_area">
	<h1 class="logo"><a href="/" itemprop="url"><img src="/assets/img/logo_brown.png" alt="glitter" width="60" itemprop="logo"></a></h1>
	<div class="btn_area"><p class="btn small brown" onClick="ga('send', 'event', 'popup', 'click', 'fixed')"><span class="pc tb">Webで予約</span><span class="sp">Web予約はこちら</span></p></div>

	<nav class="navi">
		<ul itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement">
			<li class="navi_index" itemprop="name"><a href="/" itemprop="url">HOME</a></li>
			<li class="navi_menu" itemprop="name"><a href="/menu/" itemprop="url">MENU</a></li>
			<li class="navi_gallery" itemprop="name"><a href="/gallery/" itemprop="url">GALLERY</a></li>
			<li class="navi_faq" itemprop="name"><a href="/faq/" itemprop="url">Q&amp;A</a></li>
			<li class="navi_access" itemprop="name"><a href="/access/" itemprop="url">ACCESS</a></li>
			<li class="navi_recruit" itemprop="name"><a href="/recruit/" itemprop="url">RECRUIT</a></li>
			<li class="navi_blog" itemprop="name"><a href="/blog/" itemprop="url">BLOG</a></li>
		</ul>
		<p class="icon_close">
			<span class="line"></span>
			<span class="line"></span>
			<span class="text">close</span>
		</p>
	</nav>

	<header class="header">
		<p class="icon_menu">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
			<span class="text">menu</span>
		</p>
	</header>
</div>

<div class="popup_reserve">
	<div class="popup_reserve_inner">
		<p class="title">Webで予約をする</p>
		<div class="btn_area">

		<?php if(have_rows('池袋店',25)): ?>
            <?php while(have_rows('池袋店',25)): the_row(); ?>
				<a href="<?php the_sub_field('予約url'); ?>" target="_blank" class="btn brown" onClick="ga('send', 'event', 'hotpeppar_ikebukuro', 'click', 'popup')">池袋店のご予約はこちら</a>                        
            <?php endwhile; ?>
        <?php endif; ?>

		<?php if(have_rows('川越店',25)): ?>
            <?php while(have_rows('川越店',25)): the_row(); ?>
				<a href="<?php the_sub_field('予約url'); ?>" target="_blank" class="btn brown" onClick="ga('send', 'event', 'hotpeppar_kawagoe', 'click', 'popup')">川越店のご予約はこちら</a>                     
            <?php endwhile; ?>
        <?php endif; ?>

		</div>
		<p class="text">ご不明な点やご不安なことございましたら<br>お気軽にご連絡ください。</p>
	</div>
</div>

<div class="page">
	<figure class="visual">
		<?php if(is_home()): ?>
			<div class="visual_inner">
				<p class="pc tb"><img src="/assets/img/logo_white_l.png" alt="glitter">
				<span class="text text_copy">A modest color to your everyday！</span></p>
				<p class="sp"><img src="/assets/img/top/top_visual_bg_sp.jpg" alt=""></p>
			</div>
		<?php elseif(is_page()): ?>
			<section class="visual_inner">
				<h1><?php the_title(); ?></h1>
			</section>
		<?php elseif(is_404()): ?>
			<section class="visual_inner">
				<h1>Not found</h1>
			</section>
		<?php elseif(is_singular('blogs')): ?>
			<section class="visual_inner">
				<h1>Blog</h1>
			</section>
		<?php elseif(is_search()): ?>
			<section class="visual_inner">
				<h1>Gallery</h1>
			</section>
		<?php elseif(is_single()): ?>
			
			<?php
				// 「お客様ネイル」に属している場合
				if(in_category('customer')): ?>
				<section class="visual_inner">
					<h1>Blog</h1>
				</section>
			<?php else: ?>
				<section class="visual_inner">
					<h1>Gallery</h1>
				</section>
			<?php endif; ?>

		<?php endif; ?>
	</figure>
	<!-- /.visual -->

	<main class="container">