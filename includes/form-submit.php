<?php

$success = false;

function spamcheck($field){
	if($field != ''){
		$field = filter_var($field, FILTER_SANITIZE_EMAIL);
		if(filter_var($field, FILTER_VALIDATE_EMAIL)){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

if(isset($_POST['email'])){
	require_once('../postmark.php');

	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$date = isset($_POST['date']) ? $_POST['date'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';

	if(spamcheck($email)){

		$postmark = new Postmark("d616706e-08e8-4b02-b6a5-0a05c3431ef6", "zach@burlingtoncollective.com", $email);

		$subjectLinePart = $name != '' ? $name : 'New Lead';

		$messageFieldValue = $message != '' ? wordwrap($message, 70) : '[user didn\'t provide a message]';
		$nameFieldValue = $name != '' ? $name : '[user didn\'t provide their name]';
		$dateFieldValue = $date != '' ? $date : '[user didn\'t provide an anticipated date]';

		$messageString = "Replying to this email will message your lead directly.\n\n";
		$messageString .= "Name: ".$nameFieldValue."\n\n";
		$messageString .= "Email: ".$email."\n\n";
		$messageString .= "Date: ".$dateFieldValue."\n\n";
		$messageString .= "Message: ".$messageFieldValue."\n\n\n";
		$messageString .= "If you are recieving spam often, contact your friendly neighborhood web developer: zach@burlingtoncollective.com";

		$result = $postmark->to('ronj@sover.net')
						->subject($subjectLinePart." via alpineamusement.com")
						->plain_message($messageString)
						->send();

		$success = true;
		die(json_encode(array('success'=>true)));
	}else{
		die(json_encode(array('success'=>false,'message'=>'Please provide an email with the format: "example@example.com"')));
	}
}else{
	die(json_encode(array('success'=>false,'message'=>'Please provide an email with the format: "example@example.com"')));
}