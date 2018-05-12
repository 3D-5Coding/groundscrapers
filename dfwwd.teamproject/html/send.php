<?php

	// Your email address
	$email_to = 'example@yourdomain.com';

	// Your custom email subject
	$email_subject = 'A new message from my website';

	// Send email (do not edit)
	if(isset($_POST['email'])) {

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email_from = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$email_message = 'First Name: '.$firstname.'
';
		$email_message .= 'Last Name: '.$lastname.'
';
		$email_message .= 'Email: '.$email_from.'
';
		$email_message .= 'Subject: '.$subject.'
';
		$email_message .= 'Message: '.$message;

		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

		echo 'Your message has been sent.';

	}

?>