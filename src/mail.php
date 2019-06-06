<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = "pavangandhi171@gmail.com";
	$formcontent = "From: $name \n Message: $message";
	$recipient = "pavangandhi100@gmail.com";
	$subject = "Contact Form";
	$mailheader = "From: $email_from \r\n"
	$mailheader .= "Reply to: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader);
?>
