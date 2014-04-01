<!DOCTYPE html>
<html>
	<head>
		<title>Interactive Engineering  | Association Web Development  | Non-Profit Web Development</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="//use.typekit.net/czh0lmh.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel='stylesheet' href='/css/styles.css' />
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
		<script type='text/javascript' src='/js/inline.js'></script>
		<script type='text/javascript' src='/js/safo2.js'></script>
		
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