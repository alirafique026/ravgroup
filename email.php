<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'care@ravgroup.org';
$email_subject = "New Form submission";
	$email_body = "You have received a new message from $name.\n".
	"Contact Number:\n $phone". 
	"Here is the message:\n $message";

	$to = "care@ravgroup.org, aleee.001@gmail.com";

	$headers = "From: $email_from \r\n";
  
	$headers .= "Reply-To: $visitor_email \r\n";
  
	mail($to,$email_subject,$email_body,$headers);
?>