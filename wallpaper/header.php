<!DOCTYPE html>
<html>
	<head>
		<title>Saforian: Interactive Engineering | Virginia Web Design</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="//use.typekit.net/czh0lmh.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel='stylesheet' href='../../css/styles.css' />
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
		
		<script>
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
	<body class="adjust-top">
		<!-- <nav class="safo-nav open group">
			<ul class='topnav group'>
				<li><a href='#top' id='topnav-hello' data-scrollto='safo-start'>Hello</a></li>
				<li><a href='#method' id='topnav-history' data-scrollto='safo-history'>Our History</a></li>
				<li><a href='#method' id='topnav-method' data-scrollto='safo-methodology'>Our Method</a></li>
				<li><a href='#work' class='on' id='topnav-work' data-scrollto='safo-work'>Our Work</a></li>
				<li><a href='#clients' id='topnav-clients' data-scrollto='safo-clients'>Our Clients</a></li>
				<li><a href='#contact' id='topnav-contact' data-scrollto='safo-contact'>Get in Touch</a></li>
				<li><a href='#careers' id='topnav-careers' data-scrollto='safo-jobs'>Careers</a></li>
			</ul>
			<span class="opennav"></span>
		</nav> -->
		<!-- <header id="career-header" class="group">
			<img id="brand" src="/images/logo_saforian.png" alt="Saforian">
			<a href="/" class="main-site-link">Main Site</a>
		</header> -->

		<section id="header-wrap">
			<header id="site-header" class="group">
				<div id='brand'>
					<h1>saforian</h1>
					<a href="http://www.saforian.com"><img src="/images/logo_safosolo_white.png" alt="Logo Safosolo White"></a>
				</div>
				<nav id="site-nav">
					<ul class='topnav group'>
						<li><a href='/#top' id='topnav-hello' data-scrollto='safo-start'>Hello</a></li>
						<!-- <li><a href='/#history' id='topnav-history' data-scrollto='safo-history'>History</a></li> -->
						<li><a href='/#method' id='topnav-method' data-scrollto='safo-methodology'>Strategy</a></li>
						<li><a href="/#services" id="topnav-services" data-scrollto='safo-services'>Services</a></li>
						<li><a href='/#clients' id='topnav-clients' data-scrollto='safo-clients'>Clients</a></li>
						<li><a href='/#work' class="on" id='topnav-work' data-scrollto='safo-work'>Work</a></li>
						<li><a href='#careers' id='topnav-careers' data-scrollto='safo-jobs'>Careers</a></li>
						<li class="last"><a href='/#contact' id='topnav-contact' data-scrollto='safo-contact'>Contact</a></li>
					</ul>
					<span class="opennav"></span>
				</nav>
			</header>
		</section>

