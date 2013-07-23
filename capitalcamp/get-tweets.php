<?php

require_once("../twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "saforian";
$notweets = 30;
$consumerkey = "pG07uH0U6oCycz5E9b2ZQ";
$consumersecret = "SeQsH7u6X0NL9v7wgnOIGtURO1Hx4aP2dfUgfRGTIE";
$accesstoken = "14114934-esPfx3Yt4offDekrxzlXusbUT8yUnlBMByf08b0gI";
$accesstokensecret = "rPqWWsI46jWXWfbbFLoRL1T7SKGeARtZzYVK93R84";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
<<<<<<< HEAD
=======
 
>>>>>>> 6d38df5e0bb97dfabf5d2571d5fa441305db0336
 
echo json_encode($tweets);

//foreach ($tweets as $item) {
	//echo $item->text;
	//echo $item->created_at;
//}

?>