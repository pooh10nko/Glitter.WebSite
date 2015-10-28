/********************************************************************

 * Main.js 

********************************************************************/

var gallery1 = function(){
	var flipsnap = Flipsnap('.flipsnap1', {
	    distance: 620
	});
	var $next = $('.next').click(function() {
	    flipsnap.toNext();
	});
	var $prev = $('.prev').click(function() {
	    flipsnap.toPrev();
	});
	flipsnap.element.addEventListener('fspointmove', function() {
	    $next.attr('disabled', !flipsnap.hasNext());
	    $prev.attr('disabled', !flipsnap.hasPrev());
	}, false);
}
var gallery2 = function(){
	var flipsnap = Flipsnap('.flipsnap2', {
	    distance: 620
	});
	var $next = $('.next').click(function() {
	    flipsnap.toNext();
	});
	var $prev = $('.prev').click(function() {
	    flipsnap.toPrev();
	});
	flipsnap.element.addEventListener('fspointmove', function() {
	    $next.attr('disabled', !flipsnap.hasNext());
	    $prev.attr('disabled', !flipsnap.hasPrev());
	}, false);
}
var gallery3 = function(){
	var flipsnap = Flipsnap('.flipsnap3', {
	    distance: 620
	});
	var $next = $('.next').click(function() {
	    flipsnap.toNext();
	});
	var $prev = $('.prev').click(function() {
	    flipsnap.toPrev();
	});
	flipsnap.element.addEventListener('fspointmove', function() {
	    $next.attr('disabled', !flipsnap.hasNext());
	    $prev.attr('disabled', !flipsnap.hasPrev());
	}, false);
}
var gallery4 = function(){
	var flipsnap = Flipsnap('.flipsnap4', {
	    distance: 620
	});
	var $next = $('.next').click(function() {
	    flipsnap.toNext();
	});
	var $prev = $('.prev').click(function() {
	    flipsnap.toPrev();
	});
	flipsnap.element.addEventListener('fspointmove', function() {
	    $next.attr('disabled', !flipsnap.hasNext());
	    $prev.attr('disabled', !flipsnap.hasPrev());
	}, false);
}



window.onload = function()
{
	gallery1();
	gallery2();
	gallery3();
	gallery4();
}