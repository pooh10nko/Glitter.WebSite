//////////////////////////////////////////////////////////////////////
//  Scroll
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
// 	Init
//////////////////////////////////////////////////////////////////////

window.onload = function()
{
    $("a[href^=#]").click(function(){
        var contentH = $(document).height();
        var windowH = $(window).height();
        var Hash = $(this.hash);
        var HashOffset = $(Hash).offset().top;

        if(contentH < HashOffset + windowH)
        {
            HashOffset = contentH - windowH
        }
        
        $("html,body").animate({
            scrollTop: HashOffset - 10
        }, 850, 'easeOutQuart');

        return false;
    });
}

$(function(){
    /************* flashロールオーバー　*************/
    //使い方　flashロールオーバーさせたい要素のクラスに「flashOver」を設定する
    $('.flashOver a img').mouseover(function(){
        $(this).stop().css({opacity:0.4}).animate({opacity:1},500);
    });


    //金額,入力
		var price = $('#menu .price');
		var length = price.length;


		for(var i = 0; i < length; i++)
		{
			var num = new String(price[i].innerHTML).replace(/,/g, "");
			while(num != (num = num.replace(/^(-?\d+)(\d{3})/, "$1,$2")));
			price[i].innerHTML = num;
		}

});

jQuery.fn.rollover = function(suffix) {
	/************* カレントナビゲーション　*************/
    //使い方　カレント状態の画像名を　(例)〇〇_on.png　にする。
	suffix = suffix || '_on';
	var check = new RegExp(suffix + '\\.\\w+$');
	return this.each(function() {
		var img = jQuery(this);
		var src = img.attr('src');
		if (check.test(src)) return;
		var _on = src.replace(/\.\w+$/, suffix + '$&');
		jQuery('<img>').attr('src', _on);
		img.hover(
			function() { img.attr('src', _on); },
			function() { img.attr('src', src); }
		);
	});
};
jQuery(function($) {
	//カレントナビゲーション
	$('#navi li img').rollover();
});

