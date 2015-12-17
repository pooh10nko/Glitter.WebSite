$(function()
{


///////////////////////////////
// slick.jp設定
//////////////////////////////
$('.slider_gallery,.slider_blog').slick({
	autoplay: true,
	autoplaySpeed:3000,
	arrows: false,
	easing: 'easeOutQuart',
	dots: true,
	speed: 1200,
	slidesToShow: 4,
	slidesToScroll: 1,
	accessibility: false,
	appendArrows: $('.control'),
	prevArrow: '<button type="button" class="slick-prev">PREV</button>',
	nextArrow: '<button type="button" class="slick-next">NEXT</button>',
	responsive: [
	{
		breakpoint: 768,
		settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
	},
	{
		breakpoint: 400,
		settings: {
			// arrows: true,
			slidesToShow: 2,
			slidesToScroll: 1
			// dots: false
		}
	}
	]
});

$('.slider_shop').slick({
	autoplay: true,
	arrows: false,
	dots: true,
	speed: 300,
	slidesToShow: 1,
	slidesToScroll: 1,
	accessibility: false
});

///////////////////////////////
// ヘッダーナビ開閉
//////////////////////////////
$('.icon_menu').on('click',function(){
	if($('body').hasClass('showNavi')){
		$('body').removeClass('showNavi');
	}else{
		$('body').addClass('showNavi');
	}
})
$('.icon_close').on('click',function(){
	$('body').removeClass('showNavi');
})

///////////////////////////////
// カテゴリ検索　プルダウン
//////////////////////////////
$('.search_category a').on('click',function(){
	$(this).toggleClass('active');
	$('.search_pulldown').slideToggle();
	return false;
})

///////////////////////////////
// heightLine.jp 呼び出し
//////////////////////////////



$(window).on("load resize",function(){
	$("#galleryPage .item_list > div").heightLine();
})

})