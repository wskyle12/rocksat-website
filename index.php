<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'wskyle12@vt.edu'; 
	$subject = 'Message from Website';

	mail ($to, $subject, $body,)
?>