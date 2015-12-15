<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=640, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<meta name="title" content="ネイルサロン glitter">
<meta name="robots" content="index, follow">
<meta name="keywords" content="ネイル,グリッター,glitter,池袋,豊島区,ジェル,安い,夜遅く,オフ無料,スカルプ,JNA1級,低価格">
<meta name="description" content="<?php
	global $page, $paged;
	wp_title( 'ページ｜', true, 'right' );
?>池袋駅西口徒歩１分のネイルサロン。ジェルもスカルプもオフ代無料！平日＆土曜23時・日曜20時まで営業。当日予約もOK！">
<meta name="copyright" content="Copyright (C) glitter. All rights reserved.">

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

<meta property="og:locale" content="ja_JP" />
<meta property="og:title" content="NAILSALON glitter" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://nail-glitter.net/" />
<meta property="og:image" content="http://nail-glitter.net/common/images/share.jpg" />
<meta property="twitter:image" content="http://nail-glitter.net/common/images/share.jpg" />
<meta property="og:site_name" content="NAILSALON glitter" />
<meta property="og:description" content="【オフ無料】SNS割引で会計10%OFF♡詳細はWEBサイトへ 平日＆土曜23時・日曜20時まで営業！" />

<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />
<link type="text/css" href="/sp/css/bxslider.css" rel="stylesheet" />

<script type="text/javascript" src="/sp/js/libs/jquery.js"></script>
<script type="text/javascript" src="/sp/js/libs/iscroll.js"></script>
<script type="text/javascript" src="/sp/js/libs/bxslider.js"></script>
<script type="text/javascript" src="/sp/js/Main.js"></script>



<?php
wp_deregister_script('jquery');
wp_head();
?>
</head>
<?php
	$img = '';
	switch( true ){
		case is_page('access'):
			$id = ' id="accessPage"';
			break;
		case is_page('menu'):
			$id = ' id="menuPage"';
			break;
		case is_page('gallery'):
			$id = ' id="galleryPage"';
			break;
		case is_page('faq'):
			$id = ' id="faqPage"';
			break;
		default:
			$id = ' id="indexPage"';
	}
?>

<body itemscope itemtype="http://schema.org/NailSalon"<?php echo $id; ?>>
<link itemprop="url" href="http://nail-glitter.net" />
<link itemprop="logo" href="http://nail-glitter.net/logo.png" />

<article>

	<?php if(is_home() && !is_paged()): ?>
		<section id="bg">
			<div id="dot">
				<img src="/sp/images/img1.png" alt="" id="img1">
				<img src="/sp/images/img2.png" alt="" id="img2">
				<img src="/sp/images/img3.png" alt="" id="img3">
				<img src="/sp/images/img4.png" alt="" id="img4">
			</div>
			<div id="girl">
				<h1><img src="/sp/images/logo.png" alt=""></h1>
			</div>
		</section>
		<!-- /#bg -->
	<?php endif; ?>

	<div id="wrapper">
		<div id="scroller">

			<section id="top">
				<?php if(is_home() && !is_paged()): ?>
				<div id="mainImg"></div>
				<?php endif; ?>
				<nav id="menuBtn" itemscope itemtype="http://schema.org/WebPage">
					<ul itemprop="breadcrumb">

						<?php if(is_home() && !is_paged()): ?>
						<li itemscope itemtype="http://schema.org/SiteNavigationElement">
							<a href="#gallery" class="pageLink" itemprop="url" content="/gallery/"><img src="/sp/images/navi_gallery.png" alt="GALLERY" itemprop="name" content="GALLERY"></a>
						</li>

						<li itemscope itemtype="http://schema.org/SiteNavigationElement">
							<a href="#menu" class="pageLink" itemprop="url" content="/menu/"><img src="/sp/images/nav_coupon.png" alt="PRICE" itemprop="name" content="PRICE"></a>
						</li>
						<li id="btnAccess" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<a href="#access" class="pageLink" itemprop="url" content="/access/"><img src="/sp/images/navi_access.png" alt="ACCESS" itemprop="name" content="ACCESS"></a>
						</li>

						<?php else: ?>

						<li itemscope itemtype="http://schema.org/SiteNavigationElement">
							<a href="/gallery/" class="pageLink" itemprop="url" content="/gallery/"><img src="/sp/images/navi_gallery.png" alt="GALLERY" itemprop="name" content="GALLERY"></a>
						</li>

						<li itemscope itemtype="http://schema.org/SiteNavigationElement">
							<a href="/menu/" class="pageLink" itemprop="url" content="/menu/"><img src="/sp/images/nav_menu.png" alt="MENU" itemprop="name" content="MENU"></a>
						</li>
						<li id="btnAccess" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<a href="/access/" class="pageLink" itemprop="url" content="/access/"><img src="/sp/images/navi_access.png" alt="ACCESS" itemprop="name" content="ACCESS"></a>
						</li>
						<?php endif; ?>
					</ul>
					<p class="header"><img src="/sp/images/navi_header.png" alt=""></p>
				</nav>
			</section>
			<!-- /#top -->