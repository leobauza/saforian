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
 
//$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=capitalcampdc&result_type=recent&count=100");

//$tweets = $connection->get("http://search.twitter.com/search.json?q=capitalcampdcs&rpp=5&include_entities=true&result_type=mixed");



 echo json_encode($tweets);


//foreach ($tweets as $item) {
	//echo $item->text;
	//echo $item->created_at;
//}

?>