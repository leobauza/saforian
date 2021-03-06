<?php include("../header.php");?>


<article class="job-block l">
	<header class="job-head group">
		<h3>Sales Associate</h3>
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
			<p>Saforian is looking for an energetic business development professional to support the company in business development functions. You will be responsible for developing and winning new business opportunities within specified industries and sectors. You will also work closely with delivery in all aspects of executing the sales vision and strategy for Saforian. As needed, you will assist with all department activities as related to the position.</p>
		</div>
		<div class="span6 l">
			<h4>Enthusiastic Networker</h4>
			<p>Must love striking up conversations with new people. Strong public speaking skills necessary to give talks and participate in company marketing, networking, or industry events. Must cultivate new opportunities within existing client environment and identify referrals among personal network.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Why Work at Saforian</h4>
			<p>At Saforian, you’ll be working with good-natured, fun people who truly believe in providing the right solutions to clients. We’re a pretty flexible group, so you should be too. Please bring your sense of humor and your great ideas.</p>
		</div>
		<div class="span6 l">
			<h4>Team Player</h4>
			<p>Ability to communicate well with clients and maintain a positive business relationship with the Saforian delivery team at all levels, including non-technical and executive management. Must be able to handle working on multiple projects at once.</p>
		</div>
	</div>
	<!-- row -->
	<div class="row-fluid requirements">
		<div class="span6">
			<h4>Friendly Individual</h4>
			<p>Must positively represent Saforian to customers by providing professional account management and facilitating the company’s responsiveness to customer needs. <strong>Good attitude is a must!</strong></p>
		</div>
		<div class="span6 l">
		</div>
	</div>

	<footer class="job-footer">
		<a href="mailto:jobs@saforian.com?subject=Sales Associate">Apply</a>
		<span class="post-button">(Sales Associate Professional)</span>
	</footer>
</article>

<?php include("../footer.php");?>
