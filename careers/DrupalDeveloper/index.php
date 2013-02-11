<?php include("../header.php");?>

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
			<h4>What We are Looking For</h4>
			<p><strong>Saforian</strong> is looking for an energetic and innovative full-time developer with strong Drupal, PHP, and MySQL skills.Your role will include taking HTML files and configure Drupal, customizing existing modules and creating custom ones when needed. You will also help define requirements for new projects and take the lead in planning and developing new small-to-midsize PHP/MySQL web apps (outside of Drupal) for clients. </p>
		</div>
		<div class="span6 l">
			<h4>Why Work at Saforian</h4>
			<p>At Saforian you’ll be working with good-natured, fun people who truly believe in providing the right solutions to clients. We’re a pretty flexible group, so you should be too. Please bring your sense of humor and your great ideas.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Drupal Experience</h4>
			<p>Ability to develop and test secure, clean, and well-commented code using PHP and MySQL. Drupal module configuration and development experience. CodeIgniter or other PHP framework experience</p>
		</div>
		<div class="span6 l">
			<h4>HTML/CSS/JavaScript</h4>
			<p>Decent web standards knowledge (HTML, CSS, JavaScript/jQuery). Experience with mapping and Facebook integration is a Plus. Mobile development experience: iPhone, iPad and Android also is a plus.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Team Player</h4>
			<p>Ability to communicate and play well with our visual designers and front-end developers to ensure beautiful and user friendly output. Must be able to handle working on multiple projects at once</p>
		</div>
		<div class="span6 l">
			<h4>Friendly Individual</h4>
			<p>Can communicate well with clients and willing to attend meetings. <strong>Good attitude is a must!</strong></p>
		</div>
	</div>

	<footer class="job-footer">
		<a href="mailto:jobs@saforian.com?subject=PHP Developer / Drupal">Apply</a>
		<span class="post-button">(PHP Developer / Drupal)</span>
	</footer>
</article>

<?php include("../footer.php");?>
