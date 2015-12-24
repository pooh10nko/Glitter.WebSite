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

//------------------------------------------------------------//
// 金額にカンマを追加
//------------------------------------------------------------//

$('.priceNum').each(function(){
	$(this).html(Number($(this).html()).toLocaleString());
})

// ループでセパレート
function separate(num){
    // 文字列にする
    num = String(num);

    // 返却用
    var separated = '';

    // 位置文字ずつ配列にする
    var nums = num.split('');

    // 長さを入れとく
    var len = nums.length;

    // 一文字ずつ追加してくよ
    for(var i = 0; i < len; i++){
        // 後ろから追加していく
        separated = nums[(len-1)-i] + separated;

        // 3桁ごとにカンマ追加
        if(i % 3 === 2){
            separated = ',' + separated;
        }
    }

    return separated;
}

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
	lazyLoad: 'ondemand',
	appendArrows: $('.control'),
	prevArrow: '<button type="button" class="slick-prev">PREV</button>',
	nextArrow: '<button type="button" class="slick-next">NEXT</button>',
	responsive: [
	{
		breakpoint: 845,
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
			slidesToScroll: 2
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
var targetTab = '.nav_area';

// .tab_bodyの高さを設定
var resizeTabBody = function(){
	$('.tab_area').each(function(){
		if($(this).is(':visible')){
			$('.tab_body').css('height',$(this).outerHeight());
		}
	})
}
$(targetTab).on('click',function(){
	var targetIndex = $(targetTab).index(this);
	// ターゲット非表示
	$('.nav_area').removeClass('active');
	$('.tab_area').fadeOut();

	// ターゲット表示
	$('.nav_area').eq(targetIndex).addClass('active');
	$('.tab_area').eq(targetIndex).fadeIn(function(){
		resizeTabBody();
	});
	resizeTabBody(); // 背景が追いつかないのを防ぐためにcallback前にも呼ぶ
	

	return false;
});
$('.nav_area').eq(0).trigger('click');

$(window).on("load resize",function(){
	resizeTabBody();
})

///////////////////////////////
// アコーディオン
//////////////////////////////
var targetAccordion = '.accordion dt';
var targetAccordionBody = '.accordion dd';

$(targetAccordionBody).hide();

$(targetAccordion).on('click',function(){
	$(this).toggleClass('active');
	$(this).next().slideToggle(function(){
		resizeTabBody();
	});
	resizeTabBody(); // 背景が追いつかないのを防ぐためにcallback前にも呼ぶ
	
});

///////////////////////////////
// カテゴリ検索
//////////////////////////////

// アコーディオン
$('.search_category a').on('click',function(){
	$(this).toggleClass('active');
	$('.search_pulldown').slideToggle();
	return false;
})

// input label 自動切り替え
$('.input_cat').on('change',function(){
		console.log($(this).prop('checked'))
	if($(this).prop('checked')){
		$(this).closest('.search_list').find('.input_all').prop('checked',false);
		$(this).closest('.search_list').find('.input').each(function(){
			$(this).parent().removeClass('active');
		})
		$(this).parent().addClass('active');
	}
})
$('.input_all').on('change',function(){
	if($(this).prop('checked')){
		$(this).closest('.search_list').find('.input_cat').prop('checked',false);
		$(this).closest('.search_list').find('.input').each(function(){
			$(this).parent().removeClass('active');
		})
		$(this).parent().addClass('active');
	}
})

///////////////////////////////
// lazyload.js 呼び出し 遅延ロード
//////////////////////////////
$('.lazyimg').lazyload({
    effect: 'fadeIn',
    effectspeed: 1000
});

//////////////////////////////
///loading
//////////////////////////////

$(window).on('load', function(){
	$('.loading').fadeOut(1000);
	$('.footer_fix').addClass('active');
});


///////////////////////////////
// heightLine.jp 呼び出し
//////////////////////////////
// $(window).on("load resize",function(){
// 	$(".list_area .item,.post_area .img, .heightLine").heightLine();
// })

})