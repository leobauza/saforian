<?php include("inc/headernova.php");?>


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


<section id="content">
<section class="novaslider-bg">
	<div class="std-block">
		<div class="light">
			<div class="bulb">
				<a href="#one"><img alt="" src="../../images/va-slider/lightbulb-off.png" id="imgClickAndChange" onclick="changeImage()"  /></a>
			</div>
		</div>	
	</div>
</section>


<br/>


<section class="novaslider-bg">
		<div class="std-header first nova-block" id="one">
			<div class="div1">
				<h1>A Northern Virginia Web Design Firm</h1>
				<img src="../../images/va-slider/couch.png" alt="Saforian Couch">
				<article class="std-body">
				</article>
				<a href="#two" alt"Next" class="next first-next"><img src="../../images/va-slider/next.png" alt"Next" class="next"></a>
			</div>
		</div>
</section>


<section class="novaslider-bg">
		<div class="std-header nova-block" id="two">
			<div class="div2">
				<h1>A Technology Leader</h1>
				<article class="std-body">
					<p>Here at Saforian, we’ve got an eclectic mix of talent. We’re Innovators, Designers, Code Slingers, Pixel Pushers, Developers, Illustrators, Programmers, Creators, and Technology Connoisseurs. Together, it’s a killer combination.</p>
				</article>
				<img src="../../images/va-slider/web-co.png" alt="Saforian Couch">
				<a href="#three" alt"Next" class="next"><img src="../../images/va-slider/next.png" alt"Next" class="next"></a>
			</div>
		</div>
</section>


<section class="novaslider-bg">
		<div class="std-header nova-block" id="three">
			<div class="div3">
				<h1>Discover Our Services</h1>
				<article class="std-body">
					<p>Making great websites is challenging. It takes time. It involves research and planning, testing, analyzing, deliberating, designing, coding, programming … The list goes on for miles. Now who’s got time for that? Lucky for you, we’re seasoned pros. We’ve worked on over 700 websites for over 250 clients. So sit back, relax, and leave the heavy lifting to us.</p>
				</article>
				<img src="../../images/va-slider/nova.png" alt="Northern Virginia">
				<a href="#four" alt"Next" class="next"><img src="../../images/va-slider/next.png" alt"Next" class="next"></a>
			</div>
		</div>
</section>


<section class="novaslider-bg">
		<div class="std-header nova-block" id="four">
			<div class="div4">
				<h1>Our Approach On Digital</h1>
				<article class="std-body">
					<p>We’re more than just a pretty face. We offer a complete suite of design services. We develop, design, digitize, and create some pretty sweet digital solutions. Simply put, we deliver aesthetically beautiful, seamlessly functional results.</p>
				</article>
				<img src="../../images/va-slider/approach.png" alt="Approach">
				<a href="#five" alt"Next" class="next"><img src="../../images/va-slider/next.png" alt"Next" class="next"></a>
			</div>
		</div>
</section>


<section class="novaslider-bg">
		<div class="std-header nova-block std-header-last" id="five">
			<h1>Don’t Be Shy</h1>
			<article class="std-body">
				<p>We want to get to know you — your business, your work, your needs. So tell us a little about what you’re looking for and how we can get in touch. We’ll take it from there.</p>
				<form name='contact' id='contact' class='contact-form' method='post'>
					<div class='row-fluid'>
						<div class='span6 input-group'>
							<label for='fullname'>Full name</label>
							<input type='text' id="fullname" name='fullname' value='' />
						</div>
						<div class='span6 input-group l'>
							<label for='email'>Email address</label>
							<input type='text' id="email" name='email' value='' />
						</div>
					</div>
					<div class='row-fluid'>
						<div class='span6 input-group'>
							<label for='phone'>Phone number</label>
							<input type='text' id="phone" name='phone' value='' />
						</div>
						<div class="span6 input-group">
							<div class="check-group group">
								<input type='checkbox' id="newsletter" name='newsletter' checked="checked"/>
								<label for='type'>Newsletter Sign Up</label>
							</div>
						</div>
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
</section>
	
</section>


<?php include('inc/footernova.php');?>
