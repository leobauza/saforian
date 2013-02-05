<?php include("header.php");?>

<article class="job-block l">
	<header class="job-head group">
		<h3>Developer, Client Side</h3>
		<ul class="job-share">
			<?php
			//facebook vars
			$f_share_title = "Saforian is hiring a PHP Developer / Drupal Developer";
			$f_share_summary = "Saforian is hiring a PHP Developer / Drupal Developer. Apply Today!";
			$f_share_url = "www.saforian.org/careers/DrupalDeveloper";
			$f_share_img_source = "http://www.saforian.com/images/logo_saforian.png";
			?>
			<?php
				//twitter vars
				$tweet_via = "saforian";
				$tweet_text = $tweet_via." is hiring a PHP Developer / Drupal Developer";
			?>
			<?php
				$gplus_share_url = "http://www.saforian.com/careers/DrupalDeveloper";
			?>

			<li class="share">Share:</li>
			<li class="twitter"><a href="https://twitter.com/share?url=<?php echo urlencode("http://www.saforian.com/careers/DrupalDeveloper"); ?>&via=<?php echo $tweet_via?>&text=<?php echo urlencode($tweet_text)?>">twitter</a></li>
			<li class="gplus"><a href="https://plus.google.com/share?url=<?php echo urlencode($gplus_share_url); ?>">gplus</a></li>
			<li class="fbook"><a href="http://www.facebook.com/sharer/sharer.php?s=100&p%5burl%5d=<?php echo urlencode($f_share_url); ?>&p%5btitle%5d=<?php echo urlencode($f_share_title)?>&p%5Bimages%5D%5B0%5D=<?php echo urlencode($f_share_img_source)?>&p%5Bsummary%5D=<?php echo urlencode($f_share_summary)?>">facebook</a></li>
		</ul>
	</header>

	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Front-end Web Development</h4>
			<p><strong>2+ Years</strong> at Mauris pulvinar pellentesque mauris, sit amet rhoncus augue mollis sit amet. Nullam laoreet auctor dui non adipiscing. Curabitur lorem elit, laoreet a tempus viverra, egestas quis nulla. Curabitur egestas ultricies nibh, et tincidunt justo interdum quis.</p>
		</div>
		<div class="span6 l">
			<h4>XHTML/CSS</h4>
			<p>Mauris pulvinar pellentesque mauris, sit amet rhoncus augue mollis sit amet. Nullam laoreet auctor dui non adipiscing. Curabitur lorem elit, laoreet a tempus viverra, egestas quis nulla. Curabitur egestas ultricies nibh, et tincidunt justo interdum quis.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Translate Comps and Wireframes<br/>Usable Code Templates</h4>
			<p>Mauris pulvinar pellentesque mauris, sit amet rhoncus augue mollis sit amet. Nullam laoreet auctor dui non adipiscing. Curabitur lorem elit, laoreet a tempus viverra, egestas quis nulla. Curabitur egestas ultricies nibh, et tincidunt justo interdum quis.</p>
		</div>
		<div class="span6 l">
			<h4>Knowledge of SEO Best Practices</h4>
			<p>Mauris pulvinar pellentesque mauris, sit amet rhoncus augue mollis sit amet. Nullam laoreet auctor dui non adipiscing. Curabitur lorem elit, laoreet a tempus viverra, egestas quis nulla. Curabitur egestas ultricies nibh, et tincidunt justo interdum quis.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Communication Skills</h4>
			<p>Mauris pulvinar pellentesque mauris, sit amet rhoncus augue mollis sit amet. Nullam laoreet auctor dui non adipiscing. Curabitur lorem elit, laoreet a tempus viverra, egestas quis nulla. Curabitur egestas ultricies nibh, et tincidunt justo interdum quis.</p>
		</div>
		<div class="span6 l">
			<h4>Working Knowledge of Cross Platform Browser Capability</h4>
			<p>Mauris pulvinar pellentesque mauris, sit amet rhoncus augue mollis sit amet. Nullam laoreet auctor dui non adipiscing. Curabitur lorem elit, laoreet a tempus viverra, egestas quis nulla. Curabitur egestas ultricies nibh, et tincidunt justo interdum quis.</p>
		</div>
	</div>
	
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>The Bullet Points:</h4>
			<ul>
				<li>The ability to evaluate the utility of contributed modules on drupal.org.</li>
				<li>The ability to write simple one-off modules (if there's nothing that meets.</li>
				<li>The ability to evaluate the utility of contributed modules on drupal.org.</li>
				<li>The ability to write simple one-off modules (if there's nothing that meets requirements on drupal.org).</li>
			</ul>
		</div>
		<div class="span6 l">
			<h4>&nbsp;</h4>
			<ul>
				<li>The ability to evaluate the utility of contributed modules on drupal.org.</li>
				<li>The ability to write simple one-off modules (if there's nothing that meets.</li>
				<li>The ability to evaluate the utility of contributed modules on drupal.org.</li>
				<li>The ability to write simple one-off modules (if there's nothing that meets requirements on drupal.org).</li>
			</ul>
		</div>
	</div>

	<footer class="job-footer">
		<a href="mailto:jobs@saforian.com?subject=PHP Developer / Drupal">Apply</a>
		<span class="post-button">(Developer, Client Side)</span>
	</footer>
</article>

<div class="slider-bg">
	<section id="career-slider" data-duration="1000" data-auto="true" data-slider="slider">
		<?php include("slider.php");?>
	</section>
</div>

<footer id="career-footer">
	<section class="section-contents">
		<div class="row-fluid">
			<div class="span5">
				<h4>Don't See Your Job?</h4>
				<p>We love hearing from creative individuals with a passion for technology. We are always searching for new talent to join our close-knit team. Shoot us an email and get the conversation started! <a href="mailto:jobs@saforian.com?subject=Didn't see my job">jobs@saforian.com</a>.</p>
			</div>
			<div class="span7">
				<img src="/images/photo_footer.png" alt="">
			</div>
		</div>
	</section>
</footer>

<?php include("footer.php");?>
