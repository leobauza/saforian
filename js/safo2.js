/* safo2.js - jquery required */

/* 
 * =============================================================
 * VA SLIDER LIGHBULB FADE IN/OUT
 * =============================================================
 */
	
	$('.fadein').each(function() {

	    var std = $(this).attr("src");
	    var hover = std.replace("/images/va-slider/lightbulb-yellow-blank.png", "/images/va-slider/lightbulb-yellow.png");
	    $(this).clone().insertAfter(this).attr('src', hover).removeClass('fadein').siblings().css({
	        position:'absolute'
	    });
	    $(this).mouseenter(function() {
	        $(this).stop().fadeTo(600, 0);
	    }).mouseleave(function() {
	        $(this).stop().fadeTo(600, 1);
	    });
	});