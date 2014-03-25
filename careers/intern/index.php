<?php include("../header.php");?>

<article class="job-block l">
	<header class="job-head group">
		<h3>Visual Design Intern</h3>
		<ul class="job-share">
			<?php
			//facebook vars
			$f_share_title = "Saforian is looking for a Visual Design Intern";
			$f_share_summary = "Saforian is looking for a Visual Design Intern. Apply Today!";
			$f_share_url = "www.saforian.org/careers/intern";
			$f_share_img_source = "http://www.saforian.com/images/logo_saforian.png";
			?>
			<?php
				//twitter vars
				$tweet_via = "saforian";
				$tweet_text = $tweet_via." is hiring a Visual Design Intern";
			?>
			<?php
				$gplus_share_url = "http://www.saforian.com/careers/intern";
			?>

			<li class="share">Share:</li>
			<li class="twitter"><a href="https://twitter.com/share?url=<?php echo urlencode("http://www.saforian.com/careers/intern"); ?>&via=<?php echo $tweet_via?>&text=<?php echo urlencode($tweet_text)?>">twitter</a></li>
			<li class="gplus"><a href="https://plus.google.com/share?url=<?php echo urlencode($gplus_share_url); ?>">gplus</a></li>
			<li class="fbook"><a href="http://www.facebook.com/sharer/sharer.php?s=100&p%5burl%5d=<?php echo urlencode($f_share_url); ?>&p%5btitle%5d=<?php echo urlencode($f_share_title)?>&p%5Bimages%5D%5B0%5D=<?php echo urlencode($f_share_img_source)?>&p%5Bsummary%5D=<?php echo urlencode($f_share_summary)?>">facebook</a></li>
		</ul>
	</header>

	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>What We are Looking For</h4>
			<p><strong>Saforian</strong> is hiring a visual design Intern to assist the creative staff on a wide range of real projects—from site builds and redesigns to mobile apps and campaigns. We expect our interns to come with the experience and the confidence in their own design skills to produce work that is up to par with the Saforian work. The designer should have a solid understanding of design fundamentals.</p>
		</div>
		<div class="span6 l">
			<h4>Our Interns</h4>
			<p>We want our interns to be able to dive into the work from day one—intermediate to advanced knowledge of the Adobe creative suite and knowledge of web trends are a must. The designer must have active collaboration skills. As a part of the team, we want our interns to be able to speak up and give input but also know when to listen. A great attitude and the eagerness to make some cool stuff is a must.</p>
			
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
		<a href="mailto:jobs@saforian.com?subject=Visual Design Intern">Apply</a>
		<span class="post-button">(Visual Design Intern)</span>
	</footer>
</article>

<?php include("../footer.php");?>
