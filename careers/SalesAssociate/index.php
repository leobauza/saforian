<?php include("../header.php");?>


<article class="job-block l">
	<header class="job-head group">
		<h3>Sales Associate (Full Time)</h3>
		<ul class="job-share">
			<?php
			//facebook vars
			$f_share_title = "Saforian is hiring a Sales Associate Professional";
			$f_share_summary = "Saforian is hiring a Sales Associate Professional. Apply Today!";
			$f_share_url = "www.saforian.org/careers/Sales Associate";
			$f_share_img_source = "http://www.saforian.com/images/logo_saforian.png";
			?>
			<?php
				//twitter vars
				$tweet_via = "saforian";
				$tweet_text = $tweet_via." is hiring a Sales Associate Professional";
			?>
			<?php
				$gplus_share_url = "http://www.saforian.com/careers/SalesAssociate";
			?>

			<li class="share">Share:</li>
			<li class="twitter"><a href="https://twitter.com/share?url=<?php echo urlencode("http://www.saforian.com/careers/SalesAssociate"); ?>&via=<?php echo $tweet_via?>&text=<?php echo urlencode($tweet_text)?>">twitter</a></li>
			<li class="gplus"><a href="https://plus.google.com/share?url=<?php echo urlencode($gplus_share_url); ?>">gplus</a></li>
			<li class="fbook"><a href="http://www.facebook.com/sharer/sharer.php?s=100&p%5burl%5d=<?php echo urlencode($f_share_url); ?>&p%5btitle%5d=<?php echo urlencode($f_share_title)?>&p%5Bimages%5D%5B0%5D=<?php echo urlencode($f_share_img_source)?>&p%5Bsummary%5D=<?php echo urlencode($f_share_summary)?>">facebook</a></li>
		</ul>
	</header>

	
	
	
	
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>What We are Looking For</h4>
			<p>Saforian is looking for an energetic sales associate with a strong work ethic to support the company in business development functions. You will be responsible for developing and researching new business opportunities within specified industries and sectors. As needed, you will assist with all department activities as related to the position. Excellent communication, organizational, and computer skills are required for this position. The ideal candidate will have a Bachelor’s degree and/or relevant experience.</p>
		</div>
		<div class="span6 l">
			<h4>Salesforce</h4>
			<p>Experience with Salesforce is a plus. This position involves documenting and capturing data on all sales prospects in Salesforce and handling data management and email outreach efforts.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Why Work at Saforian</h4>
			<p>At Saforian, you’ll be working with good-natured, fun people who truly believe in providing the right solutions to clients. We’re a pretty flexible group, so you should be too. Please bring your sense of humor and your great ideas.</p>
		</div>
		<div class="span6 l">
			<h4>Organizational Skills</h4>
			<p>Must have excellent organizational skills and attention to detail. Must have effective time management skills and task prioritization when under pressure.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Enthusiastic Networker</h4>
			<p>Must love striking up conversations with new people. Must positively represent Saforian to customers and facilitate the company’s responsiveness to customer needs. <strong>Good attitude is a must!</strong></p>
		</div>
		<div class="span6 l">
		</div>
	</div>

	<footer class="job-footer">
		<a href="mailto:jobs@saforian.com?subject=Sales Associate (Full Time)">Apply</a>
		<span class="post-button">(Sales Associate Professional)</span>
	</footer>
</article>

<?php include("../footer.php");?>
