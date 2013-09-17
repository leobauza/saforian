/* safo.js - jquery required */
function getInternetExplorerVersion() {
	var rv = -1; // Return value assumes failure.
	if (navigator.appName == 'Microsoft Internet Explorer') {
		var ua = navigator.userAgent;
		var re	= new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
		if (re.exec(ua) != null) {
			rv = parseFloat( RegExp.$1 );
		}
	}
	return rv;
}
//ie version variable
var ieVer = getInternetExplorerVersion();



var $winWidth = $(window).width();
$(window).resize(function(){
	$winWidth = $(window).width();
	if($winWidth > 940) {
		$('#site-nav ul').show();
	} else {
		//$('#site-nav ul').hide();
	}
	//OLD OLD OLD responsive stuff for process stuff
	// if($winWidth > 550) {
	// 	$("#insight, #inspire, #ignite, #d-strategy, #e-websites, #m-management, #c-development, #m-responsive, #a-tracking").show();
	// } else {
	// 	$("#insight, #inspire, #ignite, #d-strategy, #e-websites, #m-management, #c-development, #m-responsive, #a-tracking").not('.show').hide();
	// }
});



// On document ready 
$(document).ready(function() {
	
	//now the toggle between strategy and services...not changing the class names though...next time don't name things DUMBLLLLLYYYYY
	$('.method-nav .button').click(function(e){
		// if (!$(this).hasClass('on')) {
		// 	$('.method-nav .button').removeClass('on');
		// 	var showdiv = $(this).attr('rel');
		// 	$('.method-section').hide();
		// 	$('.'+showdiv).fadeIn();
		// 	$('.method-nav .button[rel='+showdiv+']').addClass('on');
		// }
		// var theRel = $(this).attr('rel');
		// //add or remove according to the rel attribute
		// (theRel == "our-services") ? $('section.safo-methodology').addClass('offwhite') : $('section.safo-methodology').removeClass('offwhite'); 

		var theRel = $(this).attr('rel');
		if(theRel == "our-services"){
			$('#focus-wrap').fadeTo('fast',0.2, function(){
				$(this).css({
					'z-index': '50'
				});
			});
			$('#sliders-cont').addClass('lighten');
		} else {
			$('#focus-wrap').css({
				'z-index': '200'
			}).fadeTo('fast',1);
			$('#sliders-cont').removeClass('lighten');
		}
	});
	
	$('.contact-form input[type=text]').focus(function(e){
		var formEl = $(this).attr('name');
		$('label[for='+formEl+']').hide();
	});
	$('.contact-form input[type=text]').blur(function(e){
		var formEl = $(this).attr('name');
		if ($(this).val()=='') $('label[for='+formEl+']').show();
	});
	$('.shownav').waypoint(function(e,d) {
		if (d==='down') {
			if($winWidth > 940) {
				$('.safo-nav').slideDown();
				$('.safo-head').slideUp();
			}
		} else {
			if($winWidth > 940) {
				$('.safo-nav').slideUp();
				$('.safo-head').slideDown();
			}
		}
	});


	
	// save default height for each section 
	$('section').each(function(){
		$(this).attr('data-default-height',$(this).outerHeight())
		$(this).attr('data-default-padding-top',$(this).css("padding-top").replace("px", ""));
		$(this).attr('data-default-padding-bottom',$(this).css("padding-bottom").replace("px", ""));
	});

	// add scrolling functionality to top nav 
	$('#site-nav a').click(function(){
		navScrollToSection('#'+$(this).attr('id'),'.'+$(this).attr('data-scrollto'));
		return false;
	});
	function navScrollToSection(link,section) {
		// remove waypoint nav switching
		//$('section').waypoint('destroy');
		if($winWidth < 700) {
			var $navHeight = $('.opennav').height();
		} else {
			var $navHeight = 55;
		}

		
		$('html, body').animate({
			scrollTop: $(section).offset().top - $navHeight
		}, 500);
	}

});







function gallerySetUp() {
	// clone image
	$('.safo-work img').each(function(){
		var el = $(this);
		el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
			var el = $(this);
			el.parent().css({"width":this.width,"height":this.height});
			el.dequeue();
		});
		this.src = grayscale(this.src);
	});
}

//new gallery set up
function gallerySetUp2() {
	// clone image
	$('#iso-cont img').not('.ignore').each(function(){
		var el = $(this);
		el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
			var el = $(this);
			el.parent().css({"width":this.width + 28,"height":this.height});
			el.dequeue();
		});
		this.src = grayscale(this.src);
	});
}


/* 
 * =============================================================
 * SLIDER
 * =============================================================
 */


var winWidth = $(window).width();

//make the carousels
//uhhhh why am I passing all these things in if I could get them from the container #silly
function makeFred(container, height, items, width) {

	//is it auto scrolling or not
	var $auto = $(container).attr('data-auto');
	var $duration = parseFloat($(container).attr('data-duration'));


	$(container + ' .slides').carouFredSel({
		responsive:true,
		infinite:true,
		auto: true,
		items: {
			visible:items,
			height: height,//"53.398058%",//2560 by 1440 "78.247734%" ,//SLIDERS IN CAREERS "39.509804%", //"47.6666666%",
			width: width
		},
		scroll: {
			onAfter: function(oldItems, newItems, newSizes) {
				//$(oldItems).next
				$(newItems).closest('.slides').find('.slide.active').removeClass("active");
				$(newItems).next('.slide').addClass("active");
			},
			duration : $duration
		},
		items:1,
		fx:"scroll",
		next: { 
			button: container + " .next-slide",
			key: "right"
		},
		prev: { 
			button: container + " .prev-slide",
			key: "left"
		},
		pagination: container + " .slide-pag"
	});
	if($auto == undefined) {
		$(container + ' .slides').trigger("pause");
	} else {
		$(container).hover(
			function () {
				$(this).find('.slides').trigger("pause");
			}, 
			function () {
				$(this).find('.slides').trigger("play");
		});
	}
}
//set height of slides to 68.739903% of width and set the padding
// function slidesHeight(whatWhat, andThis) {
// 		//filling the screen
// 		$zeHeight = $(window).height() - 100;
// 		$(whatWhat).height($zeHeight);
// 		$(andThis + ' .align-middle').height($zeHeight);
// }

// function pagiWidth(container) {
// 			//Pagination width set
// 			var $pagi_width = 0;
// 			$(container + ' .slide-pag a').each(function(){
// 				$pagi_width = $pagi_width + $(this).width() + 15;
// 			});
// 			$(container + ' .slide-pag').width($pagi_width);
// 		}

//for the slides
//slidesHeight('.slides','.slides .text-contain');



// On window load. This waits until images have loaded. 
$(window).load(function(){
	
	// Fade in images so there isn't a color "pop" document load and then on window load
	$(".safo-work img").animate({opacity:1},500);
	
	if(ieVer == -1 || ieVer == 9) {
		gallerySetUp();
		gallerySetUp2();
	}
	
	// Fade image 
	$('.safo-work img').mouseover(function(){
		$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
	});
	$('.img_grayscale').mouseout(function(){
		$(this).stop().animate({opacity:0}, 1000);
	});

	// NEW FADE IMAGE 
	$('#iso-cont img').mouseover(function(){
		$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
	});
	$('.img_grayscale').mouseout(function(){
		$(this).stop().animate({opacity:0}, 1000);
	});


	/* 
 * =============================================================
 * SMOOTH SCROLL
 * =============================================================
 */
	
	if($('#content').length) { 
		$('#content').localScroll(); 
	}

		
	
	$(".div1").waypoint(function(event, direction){
		if(direction === "down") {
			$(".div1").animate({opacity:.1}, 200)
		} else {
			$(".div1").animate({opacity:1}, 500);
		}
	});
	
	$(".div2").waypoint(function(event, direction){
		if(direction === "down") {
			$(".div2").animate({opacity:.1}, 200)
		} else {
			$(".div2").animate({opacity:1}, 500);
		}
	});
	
	$(".div3").waypoint(function(event, direction){
		if(direction === "down") {
			$(".div3").animate({opacity:.1}, 200)
		} else {
			$(".div3").animate({opacity:1}, 500);
		}
	});
	
	$(".div4").waypoint(function(event, direction){
		if(direction === "down") {
			$(".div4").animate({opacity:.1}, 200)
		} else {
			$(".div4").animate({opacity:1}, 500);
		}
	});
	

	$('.file-up').hide();
	
	$('.file-toggle').click(function(){
		$('.file-up').toggle();
	});
	
	$('.desc-up').hide();
	
	$('.desc-toggle').click(function(){
		$('.desc-up').toggle();
	});
	



	
	/* 
	 * =============================================================
	 * SERVICES JS
	 * =============================================================
	 */
		
		$(".services-slide-2").hide();
		$(".dot1").addClass("on");
		$(".dot2").addClass("off");
		
		$(".dot1").click(function() {
			$(".services-slide-1").fadeIn("slow");
			$(".services-slide-2").hide();
			$(".dot1").removeClass("off");
			$(".dot1").addClass("on");
			$(".dot2").removeClass("on");
			$(".dot2").addClass("off");
		});
		
		$(".dot2").click(function() {
			$(".services-slide-1").hide();
			$(".services-slide-2").fadeIn("slow");
			$(".dot2").removeClass("off");
			$(".dot2").addClass("on");
			$(".dot1").removeClass("on");
			$(".dot1").addClass("off");
		});
		
		$(".services-arrow-right").click(function() {
			if ($(".services-slide-1").is(":visible")) {
				$(".services-slide-1").hide();
				$(".services-slide-2").fadeIn("slow");
				$(".dot2").removeClass("off");
				$(".dot2").addClass("on");
				$(".dot1").removeClass("on");
				$(".dot1").addClass("off");
			}
			else {
				$(".services-slide-2").hide();
				$(".services-slide-1").fadeIn("slow");
				$(".dot1").removeClass("off");
				$(".dot1").addClass("on");
				$(".dot2").removeClass("on");
				$(".dot2").addClass("off");
			}
		});

		$(".services-arrow-left").click(function() {
			if ($(".services-slide-1").is(":visible")) {
				$(".services-slide-1").hide();
				$(".services-slide-2").fadeIn("slow");
				$(".dot2").removeClass("off");
				$(".dot2").addClass("on");
				$(".dot1").removeClass("on");
				$(".dot1").addClass("off");
			}
			else {
				$(".services-slide-2").hide();
				$(".services-slide-1").fadeIn("slow");
				$(".dot1").removeClass("off");
				$(".dot1").addClass("on");
				$(".dot2").removeClass("on");
				$(".dot2").addClass("off");
			}
		});
		
		
/* 
 * =============================================================
 * SERVICES JS
 * =============================================================
 */
	
		$(".circle-slide2").hide();
		$(".circle-slide3").hide();
		$(".circle-slide4").hide();
		$(".circle-slide5").hide();
		$(".dot1-circleslide").addClass("on");
		$(".dot2-circleslide").addClass("off");
		$(".dot3-circleslide").addClass("off");
		$(".dot4-circleslide").addClass("off");
		$(".dot5-circleslide").addClass("off");

		$(".dot1-circleslide").click(function() {
			$(".circle-slide1").fadeIn("slow");
			$(".circle-slide2").hide();
			$(".circle-slide3").hide();
			$(".circle-slide4").hide();
			$(".circle-slide5").hide();
			$(".dot1-circleslide").removeClass("off");
			$(".dot1-circleslide").addClass("on");
			$(".dot2-circleslide").removeClass("on");
			$(".dot2-circleslide").addClass("off");
			$(".dot3-circleslide").removeClass("on");
			$(".dot3-circleslide").addClass("off");
			$(".dot4-circleslide").removeClass("on");
			$(".dot4-circleslide").addClass("off");
			$(".dot5-circleslide").removeClass("on");
			$(".dot5-circleslide").addClass("off");
		});
		
		
		$(".dot2-circleslide").click(function() {
			$(".circle-slide2").fadeIn("slow");
			$(".circle-slide1").hide();
			$(".circle-slide3").hide();
			$(".circle-slide4").hide();
			$(".circle-slide5").hide();
			$(".dot2-circleslide").removeClass("off");
			$(".dot2-circleslide").addClass("on");
			$(".dot1-circleslide").removeClass("on");
			$(".dot1-circleslide").addClass("off");
			$(".dot3-circleslide").removeClass("on");
			$(".dot3-circleslide").addClass("off");
			$(".dot4-circleslide").removeClass("on");
			$(".dot4-circleslide").addClass("off");
			$(".dot5-circleslide").removeClass("on");
			$(".dot5-circleslide").addClass("off");
		});
		
		//var $inside-number = (".overview").css('left');
		//if($inside-number == -310) {
		//	$(".circle-slide2").fadeIn("slow");
		//	$(".circle-slide1").hide();
		//	$(".circle-slide3").hide();
		//	$(".circle-slide4").hide();
		//	$(".circle-slide5").hide();
		//	$(".dot2-circleslide").removeClass("off");
		//	$(".dot2-circleslide").addClass("on");
		//	$(".dot1-circleslide").removeClass("on");
		//	$(".dot1-circleslide").addClass("off");
		//	$(".dot3-circleslide").removeClass("on");
		//	$(".dot3-circleslide").addClass("off");
		//	$(".dot4-circleslide").removeClass("on");
		//	$(".dot4-circleslide").addClass("off");
		//	$(".dot5-circleslide").removeClass("on");
		//	$(".dot5-circleslide").addClass("off");
		//}
		
		$(".dot3-circleslide").click(function() {
			$(".circle-slide3").fadeIn("slow");
			$(".circle-slide1").hide();
			$(".circle-slide2").hide();
			$(".circle-slide4").hide();
			$(".circle-slide5").hide();
			$(".dot3-circleslide").removeClass("off");
			$(".dot3-circleslide").addClass("on");
			$(".dot1-circleslide").removeClass("on");
			$(".dot1-circleslide").addClass("off");
			$(".dot2-circleslide").removeClass("on");
			$(".dot2-circleslide").addClass("off");
			$(".dot4-circleslide").removeClass("on");
			$(".dot4-circleslide").addClass("off");
			$(".dot5-circleslide").removeClass("on");
			$(".dot5-circleslide").addClass("off");
		});
		
		$(".dot4-circleslide").click(function() {
			$(".circle-slide4").fadeIn("slow");
			$(".circle-slide1").hide();
			$(".circle-slide2").hide();
			$(".circle-slide3").hide();
			$(".circle-slide5").hide();
			$(".dot4-circleslide").removeClass("off");
			$(".dot4-circleslide").addClass("on");
			$(".dot1-circleslide").removeClass("on");
			$(".dot1-circleslide").addClass("off");
			$(".dot2-circleslide").removeClass("on");
			$(".dot2-circleslide").addClass("off");
			$(".dot3-circleslide").removeClass("on");
			$(".dot3-circleslide").addClass("off");
			$(".dot5-circleslide").removeClass("on");
			$(".dot5-circleslide").addClass("off");
		});
		
		$(".dot5-circleslide").click(function() {
			$(".circle-slide5").fadeIn("slow");
			$(".circle-slide1").hide();
			$(".circle-slide2").hide();
			$(".circle-slide3").hide();
			$(".circle-slide4").hide();
			$(".dot5-circleslide").removeClass("off");
			$(".dot5-circleslide").addClass("on");
			$(".dot1-circleslide").removeClass("on");
			$(".dot1-circleslide").addClass("off");
			$(".dot2-circleslide").removeClass("on");
			$(".dot2-circleslide").addClass("off");
			$(".dot3-circleslide").removeClass("on");
			$(".dot3-circleslide").addClass("off");
			$(".dot4-circleslide").removeClass("on");
			$(".dot4-circleslide").addClass("off");
		});
		
		
	/* 
	 * =============================================================
	 * COPY THE IMAGES FOR MOBILE
	 * =============================================================
	 */
	$('.safo-client').each(function(){
		var imgSrc = $(this).find('img').attr('src');
		$(this).find('h3').before("<img class='mobile-img' src='"+ imgSrc +"' />");
	});

	$('#iso-cont .safo-client').not('.filter').each(function(){
		var imgSrc = $(this).find('img').attr('src');
		$(this).find('a').append("<img class='mobile-img' src='"+ imgSrc +"' />");
	});

	/* 
	 * =============================================================
	 * TEMPORARILY CANCEL CLICKS ON WORK
	 * =============================================================
	 */
	$('.safo-client a').not('.ignore').click(function(e){
		e.preventDefault();
	});

	/* 
	 * =============================================================
	 * mobile methodology (old handler for mobile nav of methodology sections...possibly use for new core competencies section)
	 * =============================================================
	 */
	$('.method-nav-second a').click(function(e){
		var $theId = $(this).attr('href');
		
		$(this).closest('.method-group').find('.show').removeClass('show').fadeOut(function(){
			$(this).closest('.method-group').find($theId).fadeIn().addClass('show');
		});
		$(this).closest('.method-nav-second').find('.active').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});


/* 
 * =============================================================
 * LOAD SLIDERS
 * =============================================================
 */

	if($('.slides').length) {

		$('[data-slider="slider"]').each(function(){
			var
				$sliderID = "#" + $(this).attr('id')
			, data = $(this).data()
			, height = data.height || "39.509804%"
			, items = parseFloat(data.items) || 1
			, width = parseFloat(data.width) || winWidth
			;
			
			makeFred($sliderID, height, items, width);
			// pagiWidth($sliderID);
		});
		var sd = 200;
		$('.slides').each(function(index) {
				$(this).delay(sd).animate({opacity: 1}, 700);
				sd += 200;
		});
		$('.next-prev').fadeIn(700);
		
		if($('.our-services').length){
			//$('section.safo-methodology .our-services').hide();
		}
	
	}

/* 
 * =============================================================
 * wallpaper clicks
 * =============================================================
 */

	$('.wallpaperbutton.next').click(function(e){
		$(this).closest('.row-fluid').find('.slide').trigger('next', 1);
		e.preventDefault();
	});
	$('.wallpaperbutton.prev').click(function(e){
		$(this).closest('.row-fluid').find('.slide').trigger('prev', 1);
		e.preventDefault();
	});




/* 
 * =============================================================
 * nova page file input style
 * =============================================================
*/
	if($(".file").length) {
		$(".file").uniform();
	}



	/* 
	 * =============================================================
	 * Circle Slider
	 * =============================================================
	*/

		if($('#rotatescroll').length){
			$('#rotatescroll').tinycircleslider({ interval: true, snaptodots: true });
		}




}); //end load
$(function(){
	/* 
	 * =============================================================
	 * open nav (needs fixing for v.3)
	 * =============================================================
	 */
	var $navst = 0;
	$('.opennav').click(function(e){
		$this = $(this);
		if($navst == 0) {
			$('#site-nav ul').slideDown();
			$this.addClass('up');
			$navst = 1;
		} else {
			$('#site-nav ul').slideUp();
			$this.removeClass('up');
			$navst = 0;
		}
	});

	//slide up the nav on mobile click of nav
	$('#site-nav a').click(function(){
		if($winWidth < 941) {
			$('#site-nav ul').slideUp();
			$('.opennav').removeClass('up');
			$navst = 0;
		}
	});





	/* 
	 * =============================================================
	 * csnav
	 * =============================================================
	 */
	var $navst = 0;
	$('.csbtn').click(function(e){
		$this = $(this);
		if($navst == 0) {
			$('#case-nav ul').slideDown();
			$this.addClass('up');
			$navst = 1;
		} else {
			$('#case-nav ul').slideUp();
			$this.removeClass('up');
			$navst = 0;
		}
	});

	//slide up the nav on mobile click of nav
	$('#case-nav a').click(function(){
		if($winWidth < 941) {
			$('#case-nav ul').slideUp();
			$('.csbtn ').removeClass('up');
			$navst = 0;
		}
	});




	/* 
	 * =============================================================
	 * CLIENTS MORE
	 * =============================================================
	 */
	var clientSt = 0;
	$('.client-list .show-more').click(function(e){
		if(clientSt == 0) {
			$('.client-list p').slideDown();
			$(this).html('<span></span>Less clients, partners &amp; friends<span></span>');
			clientSt = 1;
		} else {
			$('.client-list p').not('.feat').slideUp();
			$(this).html('<span></span>More clients, partners &amp; friends<span></span>');
			clientSt = 0;
		}
		e.preventDefault();
	});

	/* 
	 * =============================================================
	 * SOCIAL HANDLERS
	 * =============================================================
	 */
	function socialHandlers() {
		//unbind if already bound to prevent stacking
		$(".job-share .fbook a, .job-share .twitter a, .job-share .gplus a").unbind("click");

		//tweet button handler
		if($('.job-share .twitter a').length) {
			$('.job-share .twitter a').click(function(e){
				var pass_tweet_url = $(this).attr('href');
				openTweetIntent(pass_tweet_url);
				e.preventDefault();
			});
			function openTweetIntent(tweet_url) {
				var horPos = ($(window).width()/2) - 270;
				var verPos = ($(window).height()/2) - 210;
				TweetWindow=window.open(tweet_url,'','width=540,height=420');
				TweetWindow.moveTo(horPos,verPos);
				TweetWindow.focus();
			}
		}

		//facebook share button handler
		if($(".job-share .fbook a").length) {
			$('.job-share .fbook a').click(function(e){
				var pass_share_url = $(this).attr('href');
				openShareIntent(pass_share_url);
				e.preventDefault();
			});
			function openShareIntent(share_url) {
				var horPos = ($(window).width()/2) - 270;
				var verPos = ($(window).height()/2) - 210;
				ShareWindow=window.open(share_url,'','width=640,height=394');
				ShareWindow.moveTo(horPos,verPos);
				ShareWindow.focus();
			}
		}

		//google plus share button handler
		if($(".job-share .gplus a").length) {
			$('.job-share .gplus a').click(function(e){
				var pass_plus_url = $(this).attr('href');
				openPlusIntent(pass_plus_url);
				e.preventDefault();
			});
			function openPlusIntent(plus_url) {
				var horPos = ($(window).width()/2) - 270;
				var verPos = ($(window).height()/2) - 210;
				PlusWindow=window.open(plus_url,'','width=640,height=394');
				PlusWindow.moveTo(horPos,verPos);
				PlusWindow.focus();
			}
		}

	}
	socialHandlers();
	
	
	
	
	
	
	
	

/* 
 * =============================================================
 * DOWNLOAD WALLPAPER CLICKS
 * =============================================================
*/
	$('.dl-button').live('click', function() {
		window.open($('.slide img').attr('src'));
	});
	
	
	
	
	
	
	
	
	
	
/* 
 * =============================================================
 * Homepage Parallax Top
 * =============================================================
*/
	
	$('.safo-start').parallax("50%", 0.5);
	
	
	
	
	
/* 
 * =============================================================
 * Nav On Scroll
 * =============================================================
 */


	//$('.novaslider-bg').waypoint(function(direction) {
		//if(direction === 'down') {
			//$(this).css('opacity','0');
		//} else {
			//$(this).css('opacity','1');
		//}
	//} , 
	//{
		//set offset
		//offset: 56
	//});


	$('[data-section]').waypoint(function(event, direction) {
		if(direction === 'down') {
			var $section = $(this).attr('data-section');
			$('#site-nav .on').removeClass('on')
			$("#site-nav").find('a[data-scrollto=' + $section + ']').addClass('on');
		} else {
			var $section = $(this).attr('data-section');
			$('#site-nav .on').removeClass('on');
			$("#site-nav").find('a[data-scrollto=' + $section + ']').parent().prev().find('a').addClass('on');
		}
	} , 
	{
		//set offset
		offset: 56
	});

/* 
 * =============================================================
 * inline li items wreck my day when resizing upward because the ul gets its own size wrong...this sorta fixes it not really the overflow:hidden does though
 * =============================================================
 */
$theHash = document.location.hash;
//console.log($theHash);

if($theHash){
	$('a[href='+ $theHash +']').trigger('click');
	document.location.hash = "";
	//console.log("wahooo hash!");
} else {
	//console.log("oh no...no hash");
}



	
/* 
 * =============================================================
 * Google Map
 * =============================================================
*/
	
	if($('#googleMap').length){
		var myCenter=new google.maps.LatLng(38.8462096, -77.3063953);
		var newCenter=new google.maps.LatLng(38.7453191, -77.4503217);
	}
	
	
	function initialize()
	{
		var mapProp = {
			center:myCenter,
			zoom:11,
			disableDefaultUI:true,
			mapTypeId:google.maps.MapTypeId.ROADMAP,
			scrollwheel: false
		};
	
	
	
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
	var marker=new google.maps.Marker({
		position: newCenter,
		icon:'http://www.saforian.com/images/google-pin-smaller.png'
	});
	
	marker.setMap(map);
			
	var infowindow = new google.maps.InfoWindow ({
		content: '<div class="google-box">\
		<div class="title">Old Town Manassas, VA</div>\
			<div>\
				<p class="address">9408 Grant Avenue, Suite #403<br/>Manassas, VA 20110</p>\
				<p><a href="7033304499">703.330.4499</a> | <a href="mailto:hello@saforian.com">hello@saforian.com</a></p>\
			</div>\
		</div>'
	});
	
	infowindow.open(map, marker);
	
	// var zoomlevel = { minZoom: 11, maxZoom: 11 };
	// map.setOptions(zoomlevel);
		
	}
	
	if($('#googleMap').length){
		google.maps.event.addDomListener(window, 'load', initialize);
	}

/* 
 * =============================================================
 * inline li items wreck my day when resizing upward because the ul gets its own size wrong...this sorta fixes it not really the overflow:hidden does though
 * =============================================================
 */
//cache the siteNav size


// function siteNavWidth(){
// 	var $totalWidth = 0;
// 	$('#site-nav li').each(function(){
// 		var $this = $(this);
// 		var $thisWidth = $this.width();
// 		$totalWidth = $totalWidth + ($thisWidth);
// 	});
// 	$("#site-nav ul").width($totalWidth)
// }


var $navWidth = $("#site-nav").width();

//if($navWidth < 575) {
//	$navWidth = 575;
//}

if($navWidth < 480) {
	$navWidth = 480;
}
$("#site-nav ul").width($navWidth);

	$(window).resize(function(){
		if($winWidth > 0) {
			var $navWidth = $("#site-nav").width();
		}

		//if($navWidth < 575) {
		//	$navWidth = 575;
		//}
		
		if($navWidth < 480) {
			$navWidth = 480;
		}

		$newWinWidth = $(window).width();
		if($newWinWidth > 940) {
			//siteNavWidth();
			$("#site-nav ul").width($navWidth);
		}



	});//end resize
	
		
		
/* 
 * =============================================================
 * ISOTOPE
 * =============================================================
 */


	if($('#iso-cont').length) {
		//center
		$.Isotope.prototype._getCenteredMasonryColumns = function() {
			this.width = this.element.width();
		
			var parentWidth = this.element.parent().width();
		
										// i.e. options.masonry && options.masonry.columnWidth
			var colW = this.options.masonry && this.options.masonry.columnWidth ||
										// or use the size of the first item
										this.$filteredAtoms.outerWidth(true) ||
										// if there's no items, use size of container
										parentWidth;
		
			var cols = Math.floor( parentWidth / colW );
			cols = Math.max( cols, 1 );
	
			// i.e. this.masonry.cols = ....
			this.masonry.cols = cols;
			// i.e. this.masonry.columnWidth = ...
			this.masonry.columnWidth = colW;
		};
		$.Isotope.prototype._masonryReset = function() {
			// layout-specific props
			this.masonry = {};
			// FIXME shouldn't have to call this again
			this._getCenteredMasonryColumns();
			var i = this.masonry.cols;
			this.masonry.colYs = [];
			while (i--) {
				this.masonry.colYs.push( 0 );
			}
		};
		$.Isotope.prototype._masonryResizeChanged = function() {
			var prevColCount = this.masonry.cols;
			// get updated colCount
			this._getCenteredMasonryColumns();
			return ( this.masonry.cols !== prevColCount );
		};
		$.Isotope.prototype._masonryGetContainerSize = function() {
			var unusedCols = 0,
					i = this.masonry.cols;
			// count unused columns
			while ( --i ) {
				if ( this.masonry.colYs[i] !== 0 ) {
					break;
				}
				unusedCols++;
			}
		
			return {
						height : Math.max.apply( Math, this.masonry.colYs ),
						// fit container to columns that have been used;
						width : (this.masonry.cols - unusedCols) * this.masonry.columnWidth
					};
		};

		//container var
		$container = $('#iso-cont');
		//call isotope
		$container.isotope({
			filter: '.first-page',
			// options
			itemSelector : '.item',
			masonry: {
				columnWidth: 320
			}
		});
		//filtering stuff
		$('.filter a').click(function(e){
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			
			$('body').scrollTo('.our-work', 500);
			
			e.preventDefault();
		});
	} //end if iso
	

	if($('#resizable').length) {
		$('#resizable').resizable({
			containment: ".std-block",
			grid:200,
			maxHeight: 810,
			maxWidth: 1020,
			minHeight: 810,
			minWidth: 400
		});
	
		$('#resizable').on('resize', function(event, ui){
			$boxWidth = $(this).width();
			console.log($boxWidth);
			if($boxWidth > 820) {
				$('#resizable').removeClass();
				$('#resizable').addClass('full');
				console.log("full");
			} else if($boxWidth > 620 && $boxWidth <= 820) {
				$('#resizable').removeClass();
				$('#resizable').addClass('iPad');
				console.log("iPad landscape");
			} else if($boxWidth > 420 && $boxWidth <= 620) {
				$('#resizable').removeClass();
				$('#resizable').addClass('iPad portrait');
				console.log("iPad portrait");
			} else if($boxWidth <= 420) {
				$('#resizable').removeClass();
				$('#resizable').addClass('iPhone');
				console.log("iPhone");
			}
			
			
		});
	
	}
	
	
	



}); //end my ready
	
	
// Grayscale w canvas method


function grayscale(src){
	var canvas = document.createElement('canvas');
	var ctx = canvas.getContext('2d');
    var imgObj = new Image();
	imgObj.src = src;
	canvas.width = imgObj.width;
	canvas.height = imgObj.height; 
	ctx.drawImage(imgObj, 0, 0); 
	var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
	for(var y = 0; y < imgPixels.height; y++){
		for(var x = 0; x < imgPixels.width; x++){
			var i = (y * 4) * imgPixels.width + x * 4;
			var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
			imgPixels.data[i] = avg; 
			imgPixels.data[i + 1] = avg; 
			imgPixels.data[i + 2] = avg;
		}
	}
	ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
	return canvas.toDataURL();
}


/* 
 * =============================================================
 * Prettify Checkboxes
 * =============================================================
 */

	$('#contact').find('.check-group').each(function(){
		var $label = $(this).find('label').html();
		var $checked = $(this).find('input').attr('checked');
		$(this).append("<a href=\"#\" data-input=\"checkbox\" class=\"pretty-checkbox\"></a>");
		if($checked == "checked") {
			$(this).find("a").addClass("active");
		}
	});
	
	$('[data-input=checkbox]').click(function(e){
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$(this).closest('.check-group').find('input').attr('checked',false);
		} else {
			$(this).addClass('active');
			$(this).closest('.check-group').find('input').attr('checked',true);
		}
		e.preventDefault();
	});


/* 
 * =============================================================
 * Lightbulb
 * =============================================================
 */

	function changeImage() {
		if (document.getElementById("imgClickAndChange").src == "http://www.saforian.com/images/va-slider/lightbulb-off.png") 
		{
			document.getElementById("imgClickAndChange").src = "http://www.saforian.com/images/va-slider/lightbulb-on.png";
		}
		else 
		{
			document.getElementById("imgClickAndChange").src = "http://www.saforian.com/images/va-slider/lightbulb-off.png";
		}
	}
	
$("#four").live('click', function() {
	document.getElementById("imgClickAndChange").src = "http://www.saforian.com/images/va-slider/lightbulb-on.png";
});