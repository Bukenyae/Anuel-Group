<?php
	?name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message']

	$emial_from = 'bkanuel@yahoo.com';

	$email_subject = "New Form Submission";

	$email_body = "Name: $name.\n".
					"Email: $visitor_email.\n".
					"User message: $message. \n";


	$to = "bemmanuelb@anuelenergy.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$emial_body,$headers);

	header("Location: index.html");




	?>