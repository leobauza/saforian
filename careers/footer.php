<script>
	$(document).ready(function()
	{
	$('a.toppage').click(function(){
	$.scrollTo( 0, 500);
	return false;
	});
	});
	</script>

<section class="scroll-up">
	<div class="std-block">
		<a href="#" class="toppage"><img src="/images/scroll-up.png" alt="Scroll to Top"></a>
	</div>
</section>

<div class="slider-bg">
	<section id="career-slider" data-duration="1000" data-auto="true" data-slider="slider">
		<?php include("slider.php");?>
	</section>
</div>

<footer id="career-footer">
	<section class="section-contents">
		<div class="row-fluid">
			<h1>We are Interactive Engineers</h1>
			<p>We believe in human-centered design and pride ourselves on delivering innovative digital solutions tailored to each audience and situation.</p>
			<div class="span4">
				<img src="/images/footer-image1.jpg" alt="">
				<p class="caption">Enter our realm. Revolving around delivering awe-inspiring user experiences, our methodology puts us on top of the latest technology trends.</p>
			</div>
			<div class="span4">
				<img src="/images/footer-image2.jpg" alt="">
				<p class="caption">Our open office environment allows us to communicate with ease and streamlines our creative process.</p>
			</div>
			<div class="span4">
				<img src="/images/footer-image3.jpg" alt="">
				<p class="caption">We’re a laid back bunch and we’re always on the lookout for creative tech-lovers to join our talented team.</p>
			</div>
		</div>
	</section>
</footer>

<section class="copyright">
	<div class="section-contents">
		<div class="row-fluid">
			<div class="span4">
				<a href="http://www.saforian.com"><img src="/images/logo_safosolo_white.png" alt="Logo Safosolo White"></a>
			</div>
			<div class="span8">
				<p>&copy; 2013</p>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	$.getJSON("https://api.twitter.com/1/statuses/user_timeline/saforian.json?count=1&include_rts=1&callback=?", function(data) {
     $("#twitter").html(data[0].text);
	});
</script>

<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-1372099-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>

	<script type='text/javascript'>
		// this should fix the console problem in IE 
		if (typeof console == "undefined") {
			this.console = {log: function() {}};
		}
	</script>
	<script type="text/javascript" src="/js/carouFredSel.min.js"></script>
	<script type='text/javascript' src='/js/waypoints.min.js'></script>
	<script type='text/javascript' src='/js/jquery.scrollTo.min.js'></script>
	<script type='text/javascript' src='/js/safo.js'></script>

	</body>
</html>