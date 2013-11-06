<!DOCTYPE html>
<html>
	<head>
		<title>Saforian: Interactive Engineering | A Northern Virginia Web Design Firm</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="//use.typekit.net/czh0lmh.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" href="/css/uniform.default.css" media="screen" />
		<link rel='stylesheet' href='/css/styles.css' />
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
		<script type='text/javascript' src='/js/inline.js'></script>
		
		<script type="text/javascript" src="/inc/twitterfeed.js"></script>
				
		<script>
		//makes the first panel the full screen height on mobile
		$(function(){
			var $winWidth = $(window).width();
			if($winWidth < 940) {
				var $winHeight = $(window).height();
				var $safoNavHeight = $('.safo-nav').height();
				var $missionHeight = $('.safo-mission').height();
				if($winWidth < 481) {
					$('.safo-mission').css('padding-top', ((($winHeight - $missionHeight)/2) + $safoNavHeight) + 'px')
				} else {
					$('.safo-mission').css('padding-top', ((($winHeight - $missionHeight)/2) - $safoNavHeight) + 'px')
				}
				$('.safo-start').height($winHeight);
			}
		});
		
		if ($(window).width() > 940) {
			$(function(){
				$('#site-header').data('size','big');
				$('#site-header').find('img').data('height', 'big');
			});

			var headerScrollTop = 0;
			$(window).scroll(function(evt){
				var headerScrollStart = $(this).scrollTop();
				evt.preventDefault();
				var $nav = $('#site-header');
				var $logoImg = $nav.find('img');
				if (headerScrollStart > headerScrollTop){
					$nav.data('size','small').stop().animate({padding:'5px 20px 0'}, 500);
					//logoImg.attr('src', logoSmall, function() {
					//	$(this).animate({width:'75%'}, 500);
					//});
					$logoImg.data('height','small').stop().animate({height:'auto'}, 600);
					$logoImg.data('width','small').stop().animate({width:'128px'}, 500);
					$('#case-nav').stop().animate({top:'80px'}, 500);
					//logoImg.stop().animate({width:'75%'}, 500);
				}  
				else {
					$nav.data('size','big').stop().animate({padding:'20px'}, 500);
					//logoImg.attr('src', logoBig);
					//logoImg.stop().animate({width:'100%'}, 500);
					$logoImg.data('height','big').stop().animate({height:'auto'}, 500);
					$logoImg.data('width','big').stop().animate({width:'166px'}, 500);
					$('#case-nav').stop().animate({top:'125px'}, 500);
				}
			});
		}
		
		</script>
		
			<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
				<link rel="stylesheet" href="../sr_assets/css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
				<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

		<!--[if IE 8]>
		<style>
			#site-header {
				width:1020px;
			}
			section.safo-start .safo-mission {
				width:1020px;
			}
			section.safo-methodology .method-nav {
				width:500px;
			}
			.method-lines {
				width:1020px;
			}
			.client-list {
				width:1000px;
			}
			.contact-form input {
				width:328px;
			}
			section.safo-jobs .safo-staff-pics {
				width: 1020px;
			}
			#career-header {
				width:1020px;
			}
			.job-block {
				width:1020px;
			}
			#career-slider {
				width:1020px;
			}
			.slides {
				height:408px;
			}
			.slides .slide {
				height: 408px;
			} 
			.section-contents {
				width: 1020px;
			}
		</style>
		<![endif]-->
		
	</head>
	<body class="adjust-top" onload="loadExternalHTMLPage()">