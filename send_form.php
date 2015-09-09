<?php
	
	echo "Hello world";

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$address = $_POST['address'];
	
	if(empty($name)) {
		echo "your name var is empty";
	} else {
		echo "no it's got stuff in it";
	}
	
	die();
	
	$email_subject = "New form submission from pop-up";
	$email_body = 'A user has registered his interest from the pop-up. Their name is ' .$name. ' and their email is ' .$visitor_email. '. Their address is ' .$address; 
				  
	
	$to = "devashish.kdixit@gmail.com";
	$header = "From: $visitor_email";
	
	if(mail($to, $email_subject, $email_body, $header)) { 
		header("Location: http://inkpact.com");
	} else { 	
		header("Location: http://inkpact.com/popupOverlay.html");
	}
	
?>