<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'wskyle12@vt.edu'; 
	$subject = 'Message from Website';
	$headers = "From: someone@your-website.com";
	mail($to, $subject, $body, $headers)
?>