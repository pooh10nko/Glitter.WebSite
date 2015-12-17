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
///////////////////////////////
// タブ切り替え
//////////////////////////////
var target = '.tab_area a[href^=#]';

$(target).on('click',function(){
	var targetIndex = $(target).index(this) + 1;
	$('.nav_area').removeClass('active');
	$('.body_area').fadeOut();

	$('#nav'+targetIndex).addClass('active');
	$('#tab'+targetIndex).fadeIn();

	return false;
})

///////////////////////////////
// 遅延ロード
//////////////////////////////
$('.item_list img').lazyload({
    effect: 'fadeIn',
    effectspeed: 1000
});

//////////////////////////////
///loading
//////////////////////////////

$(window).on('load', function(){
	$('.loading').fadeOut(800);
});


})