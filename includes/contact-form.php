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

if(isset($_POST['email']) && $_POST['honeypot'] == ''){
	require("postmark.php");

	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';

	if(spamcheck($email)){

		$postmark = new Postmark("d616706e-08e8-4b02-b6a5-0a05c3431ef6", "zach@burlingtoncollective.com", $email);

		$subjectLinePart = $name != '' ? $name : 'New Lead';

		$messageFieldValue = $message != '' ? wordwrap($message, 70) : '[user didn\'t provide a message]';
		$nameFieldValue = $name != '' ? $name : '[user didn\'t provide their name]';

		$messageString = "Replying to this email will message your lead directly.\n\n";
		$messageString .= "Name: ".$nameFieldValue."\n\n";
		$messageString .= "Email: ".$email."\n\n";
		$messageString .= "Message: ".$messageFieldValue;
		$messageString .= "\n\n\nIf you are recieving spam often, contact your friendly neighborhood web developer: zach@burlingtoncollective.com";

		$result = $postmark->to('znlincoln@gmail.com')
						->subject($subjectLinePart." via alpineamusement.com")
						->plain_message($messageString)
						->send();

		$success = true;
	}
	
}

?>
<form class="form well clearfix">
	<h3 class="how-can-we-help">Contact Us!</h3>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Joe Smith">
	</div>
	<div class="form-group">
		<label for="email">Email Address</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com">
	</div>
	<div class="form-group">
		<label for="email">Anticipated Event Date</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="XX/XX/XXXX">
	</div>
	<div class="form-group">
		<label for="message">Message</label>
		<textarea rows="5" class="form-control" id="message" name="message" placeholder="Tell us about your party or event"></textarea>
	</div>
	<button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>