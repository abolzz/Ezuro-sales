<!-- PHP code for sending e-mails -->
<?php 
	if (isset($_POST)) {
		$to = "contact@davisabols.dk";
		$from = $_POST['email'];
		$name = $_POST['name'];
		$subject = "Question form submission";
		$subject2 = "Copy of your form submission";
		$message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
		$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		mail($to,$subject,$message,$headers);
		mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	}
?>