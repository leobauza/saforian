<?php include("../header.php");?>

<article class="job-block l">
	<header class="job-head group">
		<h3>Senior Drupal Developer</h3>
		<ul class="job-share">
			<?php
			//facebook vars
			$f_share_title = "Saforian is hiring a Senior Drupal Developer";
			$f_share_summary = "Saforian is hiring a Senior Drupal Developer. Apply Today!";
			$f_share_url = "www.saforian.org/careers/SeniorDrupalDeveloper";
			$f_share_img_source = "http://www.saforian.com/images/logo_saforian.png";
			?>
			<?php
				//twitter vars
				$tweet_via = "saforian";
				$tweet_text = $tweet_via." is hiring a Senior Drupal Developer";
			?>
			<?php
				$gplus_share_url = "http://www.saforian.com/careers/SeniorDrupalDeveloper";
			?>

			<li class="share">Share:</li>
			<li class="twitter"><a href="https://twitter.com/share?url=<?php echo urlencode("http://www.saforian.com/careers/SeniorDrupalDeveloper"); ?>&via=<?php echo $tweet_via?>&text=<?php echo urlencode($tweet_text)?>">twitter</a></li>
			<li class="gplus"><a href="https://plus.google.com/share?url=<?php echo urlencode($gplus_share_url); ?>">gplus</a></li>
			<li class="fbook"><a href="http://www.facebook.com/sharer/sharer.php?s=100&p%5burl%5d=<?php echo urlencode($f_share_url); ?>&p%5btitle%5d=<?php echo urlencode($f_share_title)?>&p%5Bimages%5D%5B0%5D=<?php echo urlencode($f_share_img_source)?>&p%5Bsummary%5D=<?php echo urlencode($f_share_summary)?>">facebook</a></li>
		</ul>
	</header>

	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>What We are Looking For</h4>
			<p><strong>Saforian</strong> is looking for an energetic and innovative full-time Senior Drupal Developer who is well experienced with selection and use of a wide range of Drupal modules, able to extend existing modules or write new modules from scratch, able to theme using best-practice techniques, and is experienced with tools like GIT and Drush in LAMP environments. You will be working with new and emerging technologies for online engagement and support integration with the Drupal CMS. The ideal candidate will have the ability to self-manage and work quickly, effectively, and efficiently in a team environment with a close attention to detail.The ideal candidate will have 3+ years full-time Drupal development experience, including module selection, module development and theming using Drupal 7.</p>
		</div>
		<div class="span6 l">
			<h4>Friendly Individual</h4>
			<p>Ability to communicate and play well with our visual designers and front-end developers to ensure beautiful and user friendly output. Must be able to handle working on multiple projects at once. Must be able to manage expectations with regards to timeframes and deliverables on all your projects. Must communicate well with clients and be willing to attend meetings. Good attitude is a must! Must be willing to mentor junior developers. Must have excellent spoken English and good written English.</p>
			
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Drupal Experience</h4>
			<p>Experience with Drupal base themes and implementing responsive designs using OOCSS, LESS & SMACCS needed. Ability to develop and test secure, clean, and well-commented code using PHP and MySQL. Drupal module configuration and development experience needed as well as CodeIgniter or other PHP framework experience. The ideal candidate will be able to accurately estimate and plan large development projects.</p>
		</div>
		<div class="span6 l">
			<h4>Well-rounded</h4>
			<p>Solid web standards knowledge (HTML, CSS, JavaScript/jQuery). Experience with mapping and Facebook integration is a Plus. Mobile development experience (iPhone, iPad and Android) is also is a plus. PHP, HTML, CSS, JavaScript, LAMP, GIT knowledge and experience is needed.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Why Work at Saforian</h4>
			<p>At Saforian you’ll be working with good-natured, fun people who truly believe in providing the right solutions to clients. We’re a pretty flexible group, so you should be too. Please bring your sense of humor and your great ideas.</p>
		</div>
		<div class="span6 l">
			&nbsp;
		</div>
	</div>

	<footer class="job-footer">
		<a href="mailto:jobs@saforian.com?subject=Senior Drupal Developer">Apply</a>
		<span class="post-button">(Senior Drupal Developer)</span>
	</footer>
</article>

<?php include("../footer.php");?>
