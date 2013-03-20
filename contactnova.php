<?php
if(isset($_POST['submitted'])) {
	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	//$type = $_POST['type'];
	$newsletter = $_POST['newsletter'];
	$email_text = "";
	$videourl = $_POST['videourl'];
	$uploaded_file = $_POST['uploaded_file'];
	$description = $_POST['description'];
	$target_path = "uploads/";
	$target_path = $target_path . basename( $_FILES['uploaded_file']['name']);
	
	if ($name != "") {
		$email_text.="\nFull Name: ".stripcslashes($name);
	}
	
	if ($email != "") {
		$email_text.="\nEmail Address: ".stripcslashes($email);
	}
	
	if ($phone != "") {
		$email_text.="\nPhone: ".stripcslashes($phone);
	}
	
	if ($newsletter != "") {
		$email_text.="\nSend Newsletter: Duh";
	} else {
		$email_text.="\nSend Newsletter: Nope";
	}
	
	if ($videourl != "") {
		$email_text.="\nVideo Url: ".stripcslashes($videourl);
	}
	
	if ($uploaded_file != "") {
		$email_text.="\nUploaded File: ".stripcslashes(.$uploaded_file);
	}
	
	if ($description != "") {
		$email_text.="\nDescription: ".stripcslashes($description);
	}
	
	if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_path)) {
	    echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
	    " has been uploaded";
	} else{
	    echo "There was an error uploading the file, please try again!";
	}
	


	// if ($type != "") {
	// 	$email_text.="\nProject Type: ".stripcslashes($type);
	// }

	
	
	
	
	
	$to = "jul.hudak@gmail.com";//"info@wagnerskis.com";
	$subject = "Saforian Site Message";
	$headers = "From: $name <$email>\n";
	mail($to, $subject, $email_text, $headers);
} else {
	header("Location: http://saforian.com");
}

?>