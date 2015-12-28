<!DOCTYPE html>  
<!--[if IE 8 ]> <html class="ie8" lang="ja"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9" lang="ja"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ja"> <!--<![endif]-->
<head>  
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1 ,user-scalable=no">
<!-- <meta name="viewport" content="width=640, user-scalable=yes"> -->
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="keywords" content="ネイルサロン,ネイル,安い,池袋,川越,ジェル,安い,オフ,オフ無料,glitter,グリッター">
<meta property="og:site_name" content="ネイルサロン glitter">

<?php if(is_home() && !is_paged()): ?>
<meta property="og:description" content="ネイルサロンglitter（グリッター）はいつでもジェルオフ無料！池袋,川越に展開しています。ラメやカラーは200色、ストーンの種類も150種以上、毎月最新ネイル商材を入荷しています。プロのネイリストがデザインをご提案させて頂きます。">
<?php else: ?>
<meta property="og:description" content="ネイルサロンglitter（グリッター）の<?php the_title(); ?>を紹介します。glitterではいつでもジェルオフ無料！池袋,川越に展開しています。ラメやカラーは200色、ストーンの種類も150種以上、毎月最新ネイル商材を入荷しています。プロのネイリストがデザインをご提案させて頂きます。">
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

<!-- OGP -->
<meta property="og:locale" content="ja_JP">
<meta property="og:title" content="ネイルサロン glitter">
<meta property="og:type" content="website">
<meta property="og:url" content="http://nail-glitter.net/">
<meta property="og:image" content="http://nail-glitter.net/assets/img/share.png">
<meta property="twitter:image" content="http://nail-glitter.net/assets/img/share.png">
<meta property="og:site_name" content="ネイルサロン glitter">
<?php if(is_home() && !is_paged()): ?>
<meta property="og:description" content="ネイルサロンglitter（グリッター）はいつでもジェルオフ無料！池袋,川越に展開しています。ラメやカラーは200色、ストーンの種類も150種以上、毎月最新ネイル商材を入荷しています。プロのネイリストがデザインをご提案させて頂きます。">
<?php else: ?>
<meta property="og:description" content="ネイルサロンglitter（グリッター）の<?php the_title(); ?>を紹介します。glitterではいつでもジェルオフ無料！池袋,川越に展開しています。ラメやカラーは200色、ストーンの種類も150種以上、毎月最新ネイル商材を入荷しています。プロのネイリストがデザインをご提案させて頂きます。">
<?php endif; ?>
<!-- CSS -->
<link rel="stylesheet" href="/assets/css/style.css">

<!-- JS -->
<script src="/assets/js/lib/jquery.js"></script>
<script src="/assets/js/lib/jquery.easing.js"></script>
<script src="/assets/js/lib/jquery.lazyload.min.js"></script>
<script src="/assets/js/lib/slick.min.js"></script>
<script src="/assets/js/lib/jquery.heightLine.js"></script>
<script src="/assets/js/Main.js"></script>
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
</head>

<?php
if(is_home() && !is_paged()){
	$pageName = 'index';
}else if(is_page()){
	$pageName = get_post($wp_query->post->ID)->post_name;
}else if(is_singular('blogs')){
	$pageName = 'blog';
}else if(is_search() || is_single()){
	$pageName = 'gallery';
}
?>

<body id="<?php echo $pageName; ?>Page">

<div class="loading"></div>
<p id="pagetop"></p>

<div class="header_area">
	<h1 class="logo"><a href="/"><img src="/assets/img/logo_brown.png" alt="glitter" width="60"></a></h1>
	<div class="btn_area"><a href="http://beauty.hotpepper.jp/CSP/kr/reserve/?storeId=H000156450" target="_blank" class="btn small brown" onClick="ga('send', 'event', 'hotpeppar', 'click', 'header')">Webで予約</a></div>

	<nav class="navi">
		<ul>
			<li class="navi_index"><a href="/">HOME</a></li>
			<li class="navi_menu"><a href="/menu/">MENU</a></li>
			<li class="navi_gallery"><a href="/gallery/">GALLERY</a></li>
			<li class="navi_faq"><a href="/faq/">Q&amp;A</a></li>
			<li class="navi_access"><a href="/access/">ACCESS</a></li>
			<li class="navi_recruit"><a href="/recruit/">RECRUIT</a></li>
			<li class="navi_blog"><a href="/blog/">BLOG</a></li>
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

<div class="page">
	<figure class="visual">
		<?php if(is_home()): ?>
			<div class="visual_inner">
				<p class="pc"><img src="/assets/img/logo_white_l.png" alt="glitter">
				<span class="text text_copy">A modest color to your everyday！</span></p>
				<p class="sp"><img src="/assets/img/top/top_visual_bg_sp.jpg" alt=""></p>
			</div>
		<?php elseif(is_page()): ?>
			<section class="visual_inner">
				<h1><?php the_title(); ?></h1>
			</section>
		<?php elseif(is_singular('blogs')): ?>
			<section class="visual_inner">
				<h1>Blog</h1>
			</section>
		<?php elseif(is_search() || is_single()): ?>
			<section class="visual_inner">
				<h1>Gallery</h1>
			</section>
		<?php endif; ?>
	</figure>
	<!-- /.visual -->

	<main class="container">

