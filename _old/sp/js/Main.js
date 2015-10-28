/********************************************************************

 * Main.js 

********************************************************************/

//////////////////////////////////////////////////
// pageScroll iScrollカスタマイズ
//////////////////////////////////////////////////

var pageScroll = function()
{
	var btnWedding = $('#btnWedding');
	var thisLocation = location.href;

	var myScroll;

	// $('#btnWedding').click(function(){
	// 	if(thisLocation.indexOf('index.html') > -1){
	// 		location.href = thisLocation.replace('index.html','menu.html?bridal');
	// 	}
	// 	else
	// 	{
	// 		location.href = thisLocation + 'menu.html?bridal';
	// 	}
	// })


	function loaded() {
		myScroll = new iScroll('wrapper');
		$("a.pageLink").click(function(){
			myScroll.scrollToElement($(this).attr("href"), 1000);
			return false;
		});
		setTimeout(function(){
			if(thisLocation.indexOf('bridal') > -1){
				myScroll.scrollToElement('#bridal', 1000);
			}
		}, 1000);
		
	}
	
	loaded();
	document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
	document.addEventListener('DOMContentLoaded', loaded, false);
}

//////////////////////////////////////////////////
// Resize
//////////////////////////////////////////////////

var resize = function()
{
	var winH = window.innerHeight;
	var mainH = winH*0.8;

	$('#mainImg').css({
		'height': mainH
	})
	$('#girl').css({
		'height': mainH
	})
	$('#menuBtn').css({
		'height': winH - mainH
	})
		var menuListW = $('#menuBtn ul li').width();
	$('#menuBtn ul li').css({
		'height': winH - mainH
	})
	$('#menuBtn ul li a').css({
		'height': winH - mainH,
		'width': menuListW
	})
}

//////////////////////////////////////////////////
// MapBtn
//////////////////////////////////////////////////

var mapBtn = function()
{
	var ua = navigator.userAgent.toLowerCase();
	if( ua.indexOf('iphone') > 0 || ua.indexOf('iPad') > 0 ) {
		$('#access #btnMap .ios').css({'display':'block'})
	}
	else{
		$('#access #btnMap .android').css({'display':'block'})
	}
}

//////////////////////////////////////////////////
// FAQ
//////////////////////////////////////////////////
var faq = function()
{
	$("#faq .accordion dt").click(function(){
		$(this).next("dd").slideToggle();
		$(this).next("dd").siblings("dd").slideUp();
		$(this).toggleClass("open");    
		$(this).siblings("dt").removeClass("open");
	});
}

//////////////////////////////////////////////////
// Setting
//////////////////////////////////////////////////

var setting = function()
{
	$('article').animate({'opacity':'1'});


	if(location.href.search('menu') > -1)
	{
		
	}
	else if(location.href.search('gallery') > -1)
	{
		
	}
	else
	{
		$('#btn_gallery,#btnMenu').bind('touchstart',function(){
			$('#bg #girl').hide();
			setTimeout(function(){$("#bg #girl").fadeIn(1000);}, 2000);
		})
	}
}


//////////////////////////////////////////////////
// Int
//////////////////////////////////////////////////


window.onload = function()
{
	setting();
	resize();
}

$(document).ready(function()
{
	pageScroll();
	mapBtn();
	faq();
	$('#gallery .bxslider').bxSlider({
		pager: false
	});
	$('#menu .bxslider').bxSlider({
		auto: 'auto'
	});
});