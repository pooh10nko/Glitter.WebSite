$(function()
{
/*
--------------------------------------------
Utilities
--------------------------------------------
*/

// SP表示であるかどうか
function isSPMode()
{
    // ヘッダメニューが表示されているかどうかでSP表示かPC表示かを判定する
    return $('.icon_menu').css('display') != 'none';
}

// 現在表示されているページを取得する
function getPageName()
{
    return $('body').attr('id');
}

// ナビゲーションが開かれているかどうか
function isNaviOpened()
{
    // ヘッダナビがativeクラス(CSS)を持っているかどうかでナビゲーション開閉を判定する
    // (持っている場合はナビゲーションが開かれている)
    return $('body').hasClass('showNavi');
}

// // スクロール量を取得する
// function getScrollTop()
// {
//     return $(window).scrollTop();
// }

// // ウインドウの高さを取得する
// function getWindowHeight()
// {
//     return $(window).height();
// }

//------------------------------------------------------------//
// 画像をPCとSPで表示切り替え
//------------------------------------------------------------//


$(window).on('load resize', function(){
	$('.imgChange').fadeIn(1);
    if(isSPMode())
    {
        // SP表示の場合
        $('.imgChange').each(function(){
            $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
        });
    }else{
        // PC表示の場合
        $('.imgChange').each(function(){
            $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
        }); 
    }
});


/*
--------------------------------------------
スムーズスクロール
--------------------------------------------
*/
$("a[href^=#]").on('click',function(){
	var Hash = $(this.hash);
	var HashOffset;
	
	if(isSPMode())
    {
        // SP表示の場合
            HashOffset = $(Hash).offset().top - 82;
    }else{
        // PC表示の場合
            HashOffset = $(Hash).offset().top - 82;
    }
	$("html,body").animate({
		scrollTop: HashOffset
	}, 800, 'easeInOutQuart');
	return false;
});


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
var thisScrollTop;

$('.icon_menu,.icon_close').on('click',function(){
	// 開いている時
	if(isNaviOpened()){
		closeMenu();
	}
	// 閉じている時
	else{
		openMenu();
	}
})

// 開いている場合は.pageをクリックした際にも閉じる
$('.page').on('click',function(){
	if(isNaviOpened()){
		closeMenu();
	}
});

var closeMenu = function(){
	$('body').removeClass('showNavi');
	$('html').css({
		'position':'static'
	});
	$(window).scrollTop(thisScrollTop);
}
var openMenu = function(){
	thisScrollTop = $(window).scrollTop();
	$('body').addClass('showNavi');
	$('html').css({
		'position':'fixed',
		'top': -thisScrollTop
	});
}

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