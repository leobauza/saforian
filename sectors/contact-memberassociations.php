<?php
if(isset($_POST['submitted'])) {
	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	//$type = $_POST['type'];
	$email_text = "";
	
	if ($name != "") {
		$email_text.="\nFull Name: ".stripcslashes($name);
	}
	
	if ($email != "") {
		$email_text.="\nEmail Address: ".stripcslashes($email);
	}
	
	if ($phone != "") {
		$email_text.="\nPhone: ".stripcslashes($phone);
	}

	// if ($type != "") {
	// 	$email_text.="\nProject Type: ".stripcslashes($type);
	// }
	
	
	$to = "hello@saforian.com";//"info@wagnerskis.com";
	$subject = "Saforian Member Associations Page Demo Request";
	$headers = "From: $name <$email>\n";
	mail($to, $subject, $email_text, $headers);
} else {
	header("Location: http://saforian.com");
}

?>