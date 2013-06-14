<?php

require_once("../twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "saforian";
$notweets = 30;
$consumerkey = "DWy2BnE9wG9R1JuiKmRfw";
$consumersecret = "VLP6YBCjzNig14MdqOdXaI9MX9i7vfIsksxgmN8Zxs";
$accesstoken = "14114934-eHwyvEniW7KZyVrSKJfLT1fEvYcs4OA6nvBkiR2oY";
$accesstokensecret = "anorUphe1BWEzGLywOwvpGIkC6wt7tfSyPI1dtLDXs";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);

//foreach ($tweets as $item) {
	//echo $item->text;
	//echo $item->created_at;
//}

?>