<?php


header("Content-type: text/html; charset=utf-8"); 
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Saforian: Interactive Engineering | A Northern Virginia Web Design Firm</title>
		<meta http-equic="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="//use.typekit.net/czh0lmh.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel='stylesheet' href='/css/styles.css' />
		<link type="text/css" media="screen" rel="stylesheet" href="awwwards.css" />
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
			
		<script>
		$(function(){
			//makes the first panel the full screen height on mobile
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
		</script>
		
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_oHCo6owmIGzzdFcXxvBb5ucqxHZd9kI&sensor=false"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="../sr_assets/css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	<!--[if IE 9]>
	
	
	
	
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
		
		.slides .slide .body .icon img {
			display:none;
		}
		.slides .slide .body .icon h2 {
			display:none;
		}
		.slides .slide.active .body .icon img {
			display:block;
		}
		.slides .slide.active .body .icon h2 {
			display:block;
		}
		#iso-wrap {
			width:1020px;
		}
	</style>
	<![endif]-->


	</head>
	<body>
		
		
		<div id="home-fixed">
			<div>
				<a href="https://www.missionmainstreetgrants.com/business/detail/98474">Chase Grant</a>
			</div>
		</div>