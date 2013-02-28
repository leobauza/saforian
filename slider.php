<?php include("inc/header.php");?>

<!-- header -->
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
				<li><a href='/#work' id='topnav-work' data-scrollto='safo-work'>Work</a></li>
				<li><a href='/#careers' id='topnav-careers' data-scrollto='safo-jobs'>Careers</a></li>
				<li class="last"><a href='/#contact' id='topnav-contact' data-scrollto='safo-contact'>Contact</a></li>
			</ul>
			<span class="opennav"></span>
		</nav>
	</header>
</section>


<section class="novaslider-bg">
	<div class="std-block">
		<div class="light">
			<div class="bulb">
				
				<script language="javascript">
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
				</script>
				
				<img alt="" src="../../images/va-slider/lightbulb-off.png" id="imgClickAndChange" onclick="changeImage()"  />

				
				
			</div>
		</div>	
	</div>
		
	<div class="std-block">
		
		<div class="std-header first">
			<h1>Virginia Web Design Firm with National Expertise</h1>
			<img src="../../images/va-slider/couch.png" alt="Saforian Couch">
			<article class="std-body">
			</article>
			<a href="#two" alt"Next" class="next first-next"><img src="../../images/va-slider/next.png" alt"Next" class="next"></a>
		</div>
		
		
		<div class="std-header" id="two">
			<h1>Your Leading Northern Virginia Web Design Company</h1>
			<article class="std-body">
				<p>Here at Saforian, we’ve got an eclectic mix of talent. We’re Innovators, Designers, Code Slingers, Pixel Pushers, Developers, Illustrators, Programmers, Creators, and Technology Connoisseurs. Together, it’s a killer combination.</p>
			</article>
			<img src="../../images/va-slider/web-co.png" alt="Saforian Couch">
			<a href="#three" alt"Next" class="next"><img src="../../images/va-slider/next.png" alt"Next" class="next"></a>
		</div>
			
		<div class="std-header" id="three">
			<h1>Discover Our Northern Virginia Web Design Services</h1>
			<article class="std-body">
				<p>Making great websites is challenging. It takes time. It involves research and planning, testing, analyzing, deliberating, designing, coding, programming … The list goes on for miles. Now who’s got time for that? Lucky for you, we’re seasoned pros. We’ve worked on over XX websites for over XX clients. So sit back, relax, and leave the heavy lifting to us.</p>
			</article>
			<img src="../../images/va-slider/nova.png" alt="Northern Virginia">
			<a href="#four" alt"Next" class="next"><img src="../../images/va-slider/next.png" alt"Next" class="next"></a>
		</div>
		
		<div class="std-header" id="four">
			<h1>Our Web Design and Development Approach</h1>
			<article class="std-body">
				<p>OWe’re more than just a pretty face. We offer a complete suite of design services. We develop, design, digitize, and create some pretty sweet digital solutions. Simply put, we deliver aesthetically beautiful, seamlessly functional results.</p>
			</article>
			<img src="../../images/va-slider/approach.png" alt="Approach">
			<a href="#five" alt"Next" class="next"><img src="../../images/va-slider/next.png" alt"Next" class="next"></a>
		</div>
		
		<div class="std-header" id="five">
			<h1>Don’t Be Shy</h1>
			<article class="std-body">
				<p>We want to get to know you — your business, your work, your needs. So tell us a little about what you’re looking for and how we can get in touch. We’ll take it from there.</p>
				
				<form name='contact' id='contact' class='contact-form' method='post'>

						<input type='text' id="fullname" name='fullname' value='' />


						<input type='text' id="phone" name='phone' value='' />

					<div class="input-group">
						<label for='email'>Email address</label>
						<input type='text' id="email" name='email' value='' />
					</div>
					<div class="input-group">
						<label for='type'>Project type</label>
						<input type='text' id="type" name='type' value='' />
					</div>
					<div class="submit-button">
						<input type="hidden" name="submitted" value="submitted">
						<input type='submit' id="submit" name="submit" value='submit' />
					</div>
				</form>
				<div id="thankyou">
					<h3>Thank You</h3>
					<p>We will contact you shortly.</p>
				</div>
			</article>

		</div>

			
		
			
	</div>
	
</section>

<?php include('inc/footer.php');?>
