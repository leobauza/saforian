<script>
	$(document).ready(function()
	{
	$('a.toppage').click(function(){
	$.scrollTo( 0, 500);
	return false;
	});
	});
	</script>

<!--<section class="copyright">
	<div class="section-contents">
		<div class="row-fluid">
			<div class="span4">
				<a href="http://www.saforian.com"><img src="/images/logo_safosolo_white.png" alt="Logo Safosolo White"></a>-->
				<!-- <a href="#" class="toppage"><img src="/images/scroll-up-smaller.png" alt="Scroll to Top" class="scroll-top"></a> -->
			<!--</div>
			<div class="span8 l">
				<p>&copy; 2013</p>
			</div>
		</div>
	</div>
</section>-->

	<script type='text/javascript'>
		// this should fix the console problem in IE 
		if (typeof console == "undefined") {
			this.console = {log: function() {}};
		}
	</script>
	<script type="text/javascript" src="../js/carouFredSel.min.js"></script>
	<script type='text/javascript' src='../js/waypoints.min.js'></script>
	<script type='text/javascript' src='../js/jquery.scrollTo.min.js'></script>
	<script type="text/javascript" src="../js/jquery.localscroll-min.js"></script>
	<script type='text/javascript' src='../js/LiveValidation.1.3.min.js'></script>
	<script type='text/javascript' src='../js/jquery.isotope.js'></script>
	<script type='text/javascript' src='../js/safo.js'></script>
	<script type='text/javascript' src="../js/jquery.uniform.js"></script>
	<script type='text/javascript' src="../js/jquery.tinycircleslider.min.js"></script>


	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try{
		var pageTracker = _gat._getTracker("UA-1372099-1");
		pageTracker._trackPageview();
	} catch(err) {}
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
				var url = "../contactnova.php"; // the script where you handle the form input.
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