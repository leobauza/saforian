<?php include("../header.php");?>

<article class="job-block l">
	<header class="job-head group">
		<h3>Front-End Developer</h3>
		<ul class="job-share">
			<?php
			//facebook vars
			$f_share_title = "Saforian is hiring a Front-End Developer";
			$f_share_summary = "Saforian is hiring a Front-End Developer. Apply Today!";
			$f_share_url = "www.saforian.org/careers/FrontEndDeveloper";
			$f_share_img_source = "http://www.saforian.com/images/logo_saforian.png";
			?>
			<?php
				//twitter vars
				$tweet_via = "saforian";
				$tweet_text = $tweet_via." is hiring a Front-End Developer";
			?>
			<?php
				$gplus_share_url = "http://www.saforian.com/careers/FrontEndDeveloper";
			?>

			<li class="share">Share:</li>
			<li class="twitter"><a href="https://twitter.com/share?url=<?php echo urlencode("http://www.saforian.com/careers/FrontEndDeveloper"); ?>&via=<?php echo $tweet_via?>&text=<?php echo urlencode($tweet_text)?>">twitter</a></li>
			<li class="gplus"><a href="https://plus.google.com/share?url=<?php echo urlencode($gplus_share_url); ?>">gplus</a></li>
			<li class="fbook"><a href="http://www.facebook.com/sharer/sharer.php?s=100&p%5burl%5d=<?php echo urlencode($f_share_url); ?>&p%5btitle%5d=<?php echo urlencode($f_share_title)?>&p%5Bimages%5D%5B0%5D=<?php echo urlencode($f_share_img_source)?>&p%5Bsummary%5D=<?php echo urlencode($f_share_summary)?>">facebook</a></li>
		</ul>
	</header>

	<!-- row -->
	<div class="row-fluid requirements">
		<div>
			<h4>Front-end Web Developer</h4>
			<p>As a front-end developer, you will work closely with visual design and development team to design, and build robust digital and mobile solutions.</p>
			<p>The ideal candidate should live and breath HTML, HTML5, CSS, and JavaScript.  Have expertise with supporting web standards technologies and frameworks, including SASS, LESS, jQuery, Bootstrap and libraries, etc.  Experience in developing large web sites and complex client-side implementations. Open-source expertise a plus. Be a self-starter, have a strong sense of ownership, gets things done.</p>
		</div>
	</div>	
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>These are good too:</h4>
			<ul>
				<li>Prefer experience with responsive design, grid systems, deferred loading schemes, jank-free animation rendering.</li>
				<li>An eye for design and interested in visual and/or interaction design, and maybe have even performed one of these roles in the past.</li>
				<li>Take pride in your pixels. less is more.</li>
				<li>Flexible, cross functional, outstanding learner. Ready, willing, and able to jump into any conquer any challenge at this crazy startup.</li>
			</ul>
		</div>
	</div>
	<div class="row-fluid requirements">
		<p>A positive attitude is a must along with great communication skills and a healthy desire for collaboration.</p>
	</div>

	<footer class="job-footer">
		<a href="mailto:jobs@saforian.com?subject=PHP Developer / Drupal">Apply</a>
		<span class="post-button">(Developer, Client Side)</span>
	</footer>
</article>

<?php include("../footer.php");?>
