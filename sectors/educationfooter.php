<script>
	$(document).ready(function()
	{
	$('a.toppage').click(function(){
	$.scrollTo( 0, 500);
	return false;
	});
	});
	</script>


<section id="nonprofit-form">
	<div class="std-block">
		<h1>Want a demo of our education tools?</h1>
		<div class='row-fluid'>
			<article class='span6'>
				<form name='contact' id='contact' class='contact-form' method='post'>
					<div class="input-group">
						<label for='fullname'>Full name</label>
						<input type='text' id="fullname" name='fullname' value='' />
					</div>
					<div class="input-group">
						<label for='phone'>Phone number</label>
						<input type='text' id="phone" name='phone' value='' />
					</div>
					<div class="input-group">
						<label for='email'>Email address</label>
						<input type='text' id="email" name='email' value='' />
					</div>
					<div class="input-group">
						<input type="hidden" name="submitted" value="submitted">
						<input type='submit' id="submit" name="submit" value='submit' />
					</div>
				</form>
				<div id="thankyou">
					<h3>Thank You</h3>
					<p>We will contact you shortly.</p>
				</div>
			</article>
			<article class="span6 l padbottom">
				<p class="padformtext">We’ve been busy working on tools to advance your educational organization. Contact us to learn how we can make your digital processes more efficient and your infrastructure less costly.</p>
			</article>
		</div>
	</div>
		<img src="../../images/capabilities/nonprofit-form.png" class="padtop none">

	
	<section class="scroll-up">
		<div class="std-block">
			<a href="#" class="toppage"><img src="/images/scroll-up-nowhite.png" alt="Scroll to Top"></a>
		</div>
	</section>
	
</section>



<section class="twitter-block">
	<div class="std-block">
		<a href="https://twitter.com/saforian" target="_blank" class="twitter-solo">twitter</a>
		<div id="twitter-feed">
			<?php include("getTweet.php");?>
		</div>
		<!-- <div id="twitter-feed">
		</div> -->
		<a href="https://twitter.com/saforian" target="_blank" class="twitter-click">@saforian</a>
		<p></p>
	</div>
</section>



<footer id="capabilities-footer">
	<section class="section-contents">
		<div class="row-fluid">
				<h1>We are Interactive Engineers</h1>
				<p>Defined as an interdisciplinary field with web and software development, interaction design, aesthetic, psychology and usability factors involved. We evaluate  trends in technology and design experiences for humans.</p>
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

<!--<section class="copyright">
	<div class="section-contents">
		<div class="row-fluid">
			<div class="span4">
				<a href="http://www.saforian.com"><img src="/images/logo_safosolo_white.png" alt="Logo Safosolo White"></a>
			</div>
			<div class="span8 l">
				<p>&copy; 2013</p>
			</div>
		</div>
	</div>
</section>-->
	
	
	
	

	
	
	
	
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
	<script type="text/javascript" src="../../js/carouFredSel.min.js"></script>
	<script type='text/javascript' src='../../js/waypoints.min.js'></script>
	<script type='text/javascript' src='../../js/jquery.scrollTo.min.js'></script>
	<script type='text/javascript' src='../../js/jquery.localscroll-min.js'></script>
	<script type='text/javascript' src='../../js/jquery-ui-1.10.1.custom.min.js'></script>
	<script type='text/javascript' src='../../js/LiveValidation.1.3.min.js'></script>
	<script type='text/javascript' src='../../js/safo.js'></script>


	<script type="text/javascript">
		$.getJSON("https://api.twitter.com/1/statuses/user_timeline/saforian.json?count=1&include_rts=1&callback=?", function(data) {
	     $("#twitter").html(data[0].text);
		});
	</script>
	
	
	
	
	<script>
		
		//apply LV with valid message 'Thank You'
		var $fullname = new LiveValidation("fullname", { validMessage: 'Thank You', wait: 500} );
		//Simple Presence Validation
		$fullname.add(Validate.Presence, {failureMessage: "Required"});

		//apply LV with valid message 'Thank You'
		var $email = new LiveValidation("email", { validMessage: 'Thank You', wait: 500} );
		//Simple Presence Validation
		$email.add(Validate.Presence, {failureMessage: "Required"});
		$email.add(Validate.Email, {failureMessage: "Not a valid Email"});

		//apply LV with valid message 'Thank You'
		//var $type = new LiveValidation("type", { validMessage: 'Thank You', wait: 500} );
		//Simple Presence Validation
		//$email.add(Validate.Presence, {failureMessage: "Required"});


		//apply LV with valid message 'Thank You'
		var $phone = new LiveValidation("phone", { validMessage: 'Thank You', wait: 500} );
		//Simple Presence Validation
		$phone.add(Validate.Presence, {failureMessage: "Required"});
		$phone.add(Validate.Format, { failureMessage: "Not a valid number", pattern: /^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/ });


		var error_log = 0;
		$("form").submit(function(){
			if( $(this).find(".LV_invalid").length ) {
				if(error_log == 0) {
					$(".error_log").remove();
					$('input[type="submit"]').before("<span class=\"error_log\">there are errors</span>");
					error_log = 1;
				} else if(error_log == 1) {
					$(".error_log").html('Some errors remain');
					error_log = 2;
				} else if(error_log == 2) {
					$(".error_log").html('Still have a few errors up there');
					error_log = 3;
				} else if(error_log == 3) {
					$(".error_log").html('I am afraid I can\'t do that dave, there are some errors.');
					error_log = 0;
				}
			}
			return false;
		});
	
	
		$("#submit").click(function(e) {
			var something = $("#contact").serialize();
			if($(this).closest('form').find(".LV_valid").length && !$(this).closest('form').find(".LV_invalid").length) {
				e.preventDefault();
				var url = "../contact-education.php"; // the script where you handle the form input.
				$.ajax({
					type: "POST",
					url: url,
					data: $("#contact").serialize(), // serializes the form's elements.
					success: function(data) {
						$("#contact").remove();
						$("#thankyou").show();
					 }
				});
				return false; // avoid to execute the actual submit of the form.
			}
		});

	</script>
	
	
	
	</body>
</html>