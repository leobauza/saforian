<!DOCTYPE html>
<html>
	<head>
		<title>Saforian: Interactive Engineering | A Northern Virginia Web Design Firm</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="//use.typekit.net/czh0lmh.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel='stylesheet' href='../../css/styles.css' />
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>

		<script type="text/javascript" src="../twitterfeed.js"></script>

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
					<a href="/"><img src="/images/logo_saforian_ie.png" alt="Saforian"></a>
				</div>
				<nav id="site-nav">
					<ul class='topnav group'>
						<li><a href='/home.php#top' id='topnav-hello' data-scrollto='safo-start'>Hello</a></li>
						<!-- <li><a href='/#history' id='topnav-history' data-scrollto='safo-history'>History</a></li> -->
						<!-- <li><a href='/#method' id='topnav-method' data-scrollto='safo-methodology'>Strategy</a></li> -->
						<li><a href="/home.php#services" id="topnav-services" data-scrollto='safo-services'>Services</a></li>
						<li><a href='/home.php#clients' id='topnav-clients' data-scrollto='safo-clients'>Clients</a></li>
						<li><a href='/home.php#work' class="on" id='topnav-work' data-scrollto='safo-work'>Work</a></li>
						<li><a href='/home.php#careers' id='topnav-careers' data-scrollto='safo-jobs'>Careers</a></li>
						<li class="last"><a href='/home.php#contact' id='topnav-contact' data-scrollto='safo-contact'>Contact</a></li>
					</ul>
					<span class="opennav"></span>
				</nav>
			</header>
		</section>



		<nav id="case-nav">
			<div class="casewrapper">
				<ul class='topnav group'>
					<div class="wrapper grid4">
						<article class="col"><a href='/CaseStudies/AAO/'>American Association of Orthodontists</a></article>
						<article class="col"><a href='/CaseStudies/ATA/'>American Trucking Association</a></article>
						<article class="col"><a href='/CaseStudies/BET/'>Black Entertainment Television</a></article>
						<article class="col"><a href='/CaseStudies/Cancer/'>NCI Cancer.gov</a></article>
						<article class="col"><a href='/CaseStudies/CNA/'>Center for Naval Analyses</a></article>
						<article class="col"><a href='/CaseStudies/DineOut/'>NKH Dine Out</a></article>
						<article class="col"><a href='/CaseStudies/Drupalcon/'>Drupalcon</a></article>
						<article class="col"><a href='/CaseStudies/EDTA/'>School Theatre</a></article>
						<article class="col"><a href='/CaseStudies/FHI/'>FHI 360</a></article>
						<article class="col"><a href='/CaseStudies/Grunley/'>Grunley Construction</a></article>
						<article class="col"><a href='/CaseStudies/KBD/'>TFK Kick Butts Day</a></article>
						<article class="col"><a href='/CaseStudies/NeighborWorks/'>NeighborWorks</a></article>
						<article class="col"><a href='/CaseStudies/NoKidHungry/'>No Kid Hungry</a></article>
						<article class="col"><a href='/CaseStudies/NVTC/'>Northern Virginia Technology Council</a></article>
						<article class="col"><a href='/CaseStudies/NWP/'>National Writing Project</a></article>
						<article class="col"><a href='/CaseStudies/Qivliq/'>Qivliq Federal</a></article>
						<article class="col"><a href='/CaseStudies/Rider/'>Rider University</a></article>
						<article class="col"><a href='/CaseStudies/Specialicious/'>Specialicious</a></article>
						<article class="col"><a href='/CaseStudies/UNF/'>UNF Clean Cookstoves</a></article>
						<article class="col"><a href='/CaseStudies/USAA/'>USAA</a></article>
						<article class="col"><a href='/CaseStudies/Wagner/'>Wagner Skis</a></article>
						<article class="col"><a href='/CaseStudies/BBT/'>Beat Big Tobacco</a></article>
						<article class="col"><a href='/CaseStudies/NKH/'>NKH Build A Bag</a></article>
						<article class="col"><a href='/CaseStudies/USI/'>US Inspect</a></article>
						<article class="col"><a href='/CaseStudies/FHI-Intranet/'>FHI Intranet</a></article>
					</div>
				</ul>
			</div>


			<?php

				if(!isset($prevProj)) {
					$prevProj = "FHI-intranet";
				}
				if(!isset($nextProj)) {
					$nextProj = "AAO";
				}

			?>

			<span class="csnav">
				<div class="pag-wrap">
					<div class="casepre">
					<a href="/CaseStudies/<?php echo $prevProj; ?>/"><span class="inner">&lt; Prev Project</span></a>
					</div>
					<div class="casenext">
					<a href="/CaseStudies/<?php echo $nextProj; ?>/"><span class="inner">Next Project &gt;</span></a>
					</div>
				</div>
				<div class="csbtn">
				</div>
			</span>
		</nav>
