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
		
		<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_oHCo6owmIGzzdFcXxvBb5ucqxHZd9kI&sensor=false"></script> -->
		
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

<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('9579-309-10-3900');/*]]>*/</script><noscript><a href="https://www.olark.com/site/9579-309-10-3900/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code —>

	</head>

	<body>
		
		<?php
			// <div id="home-fixed">
			// 	<div>
			// 		<a href="http://holiday.saforian.com" target="_blank">Happy Holidays from Saforian</a>
			// 	</div>
			// </div>
		?>
