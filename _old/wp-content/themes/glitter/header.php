<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
<!--<meta name="robots" content="index, follow">-->
<!--<meta name="title" content="ネイルサロン glitter">-->

<!--<meta name="keywords" content="ネイル,グリッター,glitter,池袋,豊島区,ジェル,安い,夜遅く,オフ無料,スカルプ,JNA1級,低価格">-->
<!--<meta name="description" content="<?php
	global $page, $paged;
	wp_title( 'ページ｜', true, 'right' );
?>池袋駅西口徒歩１分のネイルサロン。ジェルもスカルプもオフ代無料！平日＆土曜23時・日曜20時まで営業。当日予約もOK！">-->
<!--<meta name="copyright" content="Copyright (C) glitter. All rights reserved.">-->

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

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" />
<script src="/common/js/jquery-1.9.0.min.js"></script>
<script src="/common/js/bxslider/plugins/jquery.easing.1.3.js"></script>
<script src="/common/js/manual.js"></script>
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->

<?php if(is_home() && !is_paged()): ?>
<!--bxslider-->
<link href="/common/js/bxslider/jquery.bxslider.css" rel="stylesheet" />
<script src="/common/js/bxslider/jquery.bxslider.js"></script>
<script>
$(function(){
	$(window).load(function(){
		var delaySpeed = 300;
		var fadeSpeed = 1000;
		$('#navi ul li').each(function(i){
			$(this).delay(i*(delaySpeed)).css({display:'block',opacity:'0'}).animate({opacity:'1'},fadeSpeed);
		});
		$('#news li').fadeIn();

		$('#news li:nth-child(1) img').css({'border-color': '#ff8986'});
		$('#news li:nth-child(2) img').css({'border-color': '#60f06a'});
		$('#news li:nth-child(3) img').css({'border-color': '#fcce7d'});

		$('#news li:nth-child(4) img').css({'border-color': '#ff8986'});
		$('#news li:nth-child(5) img').css({'border-color': '#60f06a'});
		$('#news li:nth-child(6) img').css({'border-color': '#fcce7d'});


		$('#news li:nth-child(7) img').css({'border-color': '#ff8986'});
		$('#news li:nth-child(8) img').css({'border-color': '#60f06a'});
		$('#news li:nth-child(9) img').css({'border-color': '#fcce7d'});


		$('#news li:nth-child(10) img').css({'border-color': '#ff8986'});
		$('#news li:nth-child(11) img').css({'border-color': '#60f06a'});
		$('#news li:nth-child(12) img').css({'border-color': '#fcce7d'});

		$('#news li:nth-child(13) img').css({'border-color': '#ff8986'});
		$('#news li:nth-child(14) img').css({'border-color': '#60f06a'});
		$('#news li:nth-child(15) img').css({'border-color': '#fcce7d'});

	});
});

$(document).ready(function(){
	$('#slider').bxSlider({
		auto: true,
		pause:	2000,
		speed: 800,
		pager: false,
		displaySlideQty: 3,
		easing: 'easeOutCubic',
		moveSlideQty: 1
	});
});
</script>

<?php elseif(get_post_type() === 'photo'): ?>
<link href="/common/css/flexslider.css" rel="stylesheet" />
<script src="/common/js/flexslider.js"></script>
<script>
$(function() {
    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 160,
        itemMargin: 0,
        asNavFor: '#slider'
    });

    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
    });
});
</script>


<?php elseif(is_page('21')): ?>

<script src="/common/js/rollover.js"></script>
<script>
 $(window).load(function(){
		var delaySpeed = 100;
		var fadeSpeed = 1000;
		$('ul li').each(function(i){
			$(this).delay(i*(delaySpeed)).animate({opacity:'1'},fadeSpeed);
		});
	});
</script>
<?php endif; ?>


<?php
wp_deregister_script('jquery');
wp_head();
?>
</head>
<?php if (is_home() && !is_paged()){ $id = ' id="index"';} ?>
<body itemscope itemtype="http://schema.org/NailSalon"<?php echo $id; ?>>
<link itemprop="url" href="http://nail-glitter.net" />
<link itemprop="logo" href="http://nail-glitter.net/logo.png" />
<!-- 装飾 -->
<div class="deco">
	<div id="headerLine">
		<h1><a href="http://nail-glitter.net/"><span itemprop="location" itemscope itemtype="http://schema.org/Place"><span itemprop="name">池袋駅</span><span itemprop="containedIn">西口徒歩1分</span>の</span><span itemprop="name">ネイルサロンglitter</span>！
		<span itemprop="description">他店ジェルオフも無料☆高技術×低価格のアットホームサロン</span></a></h1>
	</div>
	<div id="footerLine" itemscope itemtype="http://schema.org/CreativeWork">
		<img src="/common/images/copyright.png" alt="Copyright (C) glitter. All rights reserved." itemprop="copyrightHolder" content="Copyright (C) glitter. All rights reserved." />
	</div>
	<div id="reserve"><a href="http://beauty.hotpepper.jp/CSP/kr/reserve/?storeId=H000156450" target="_blank" onClick="ga('send','event','link','click','hotpepper');" rel="nofollow"><img src="/common/images/btn_reserve.gif" alt="ネイルサロン glitter 池袋西口店 予約する" /></a></div>
	<!--img src="/common/images/flower01.png" alt="" class="flower1 flower" /-->
	<!--img src="/common/images/flower02.png" alt="" class="flower2 flower" /-->
	<!--img src="/common/images/flower03.png" alt="" class="flower3 flower" /-->
	<!--img src="/common/images/flower04.png" alt="" class="flower4 flower" /-->
</div>
<!-- /装飾 -->


<div id="linkHead" class="link">
	<ul class="clearfix">
		<li class="anime-loop-katakata3"><a href="http://beauty.hotpepper.jp/kr/slnH000156450/coupon/" onClick="ga('send','event','link','click','hotpepper');" target="_blank" itemprop="sameAs" rel="nofollow"><img src="/common/images/link01.png" alt="ホットペッパービューティーglitter" /></a></li>
		<li class="anime-loop-katakata4"><a href="http://ameblo.jp/nail-glitter81/" target="_blank" itemprop="sameAs"><img src="/common/images/link02.png" alt="glitter グリッター アメブロ" /></a></li>
	</ul>
</div>

<!-- #wrapper -->
<div id="wrapper">
	<!-- #header -->
	<div id="header">
		<div class="inner">
			<div class="logo"><a href="/"><img src="/common/images/logo_top.png" alt="池袋ネイルサロンglitter" /></a></div>

			<div id="navi" itemscope itemtype="http://schema.org/WebPage">
				<ul class="clearfix">
					<li class="navi1" itemprop="breadcrumb" itemscope itemtype="http://schema.org/SiteNavigationElement"><a href="/" itemprop="url" content="http://nail-glitter.net/
"><img src="/common/images/navi01.png" alt="HOME" itemprop="name" content="HOME" /></a></li>
					<li class="navi2" itemprop="breadcrumb" itemscope itemtype="http://schema.org/SiteNavigationElement"><a href="/#topmenu" itemprop="url" content="http://nail-glitter.net/
menu/"><img src="/common/images/navi02.png" alt="MENU" itemprop="name" content="MENU" /></a></li>
					<li class="navi3" itemprop="breadcrumb" itemscope itemtype="http://schema.org/SiteNavigationElement"><a href="/#topgallery" itemprop="url" content="http://nail-glitter.net/gallery/"><img src="/common/images/navi03.png" alt="GALLERY" itemprop="name" content="GALLERY" /></a></li>
					<li class="navi4" itemprop="breadcrumb" itemscope itemtype="http://schema.org/SiteNavigationElement"><a href="/#topconcept" itemprop="url" content="http://nail-glitter.net/concept/"><img src="/common/images/navi04.png" alt="CONCEPT" itemprop="name" content="CONCEPT" /></a></li>
					<li class="navi5" itemprop="breadcrumb" itemscope itemtype="http://schema.org/SiteNavigationElement"><a href="/#topaccess" itemprop="url" content="http://nail-glitter.net/access/"><img src="/common/images/navi05.png" alt="ACCESS" itemprop="name" content="ACCESS" /></a></li>
					<li class="navi6" itemprop="breadcrumb" itemscope itemtype="http://schema.org/SiteNavigationElement"><a href="/bridal/" itemprop="url" content="http://nail-glitter.net/bridal/"><img src="/common/images/navi06.png" alt="BRIDAL" itemprop="name" content="BRIDAL" /></a></li>
				</ul>
			</div>
			<div id="shop">
				<p class="shopName">glitter 池袋西口店</p>
				<p class="shopTel">03-3985-5550</p>
				<p class="shopTime">平日・土曜 10:00～23:00（受付 22:00）<br />日曜・祝日 10:00～20:00（受付 19:00）</p>
				<p class="btnReserve"><a href="http://beauty.hotpepper.jp/CSP/kr/reserve/?storeId=H000156450" target="_blank" onClick="ga('send','event','link','click','hotpepper');" rel="nofollow">予約する♪</a></p>
			</div>
			<div id="linkBtn">
				<p class="btnFaq"><a href="/#topfaq">Q&amp;A</a></p>
				<!-- <p class="btnBlog"><a href="">BLOG</a></p> -->
			</div>
			<meta itemprop="openingHours" content="Mo-Sa 10:00-23:00" />
			<meta itemprop="openingHours" content="Su 10:00-20:00" />
		</div>
	</div>
	<!-- /#header -->