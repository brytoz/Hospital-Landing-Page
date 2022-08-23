<?php
date_default_timezone_set('Africa/lagos');
ob_start();
session_start();



		$name = $_POST['fullname'];
		$phone = $_POST['phone'];
		$date = $_POST['date'];

if (isset($name) && !empty($name) && isset($phone) && !empty($phone) && isset($date) && !empty($date)) {

	//SANITIZE
		$to_email = 'info@olidechospital.com.ng';
		$subject = 'APPOINTMENT';
		$body = "Hello Doctor, \n You have an apponitment from ".$name.", with the phone number ".$phone.", on ".$date."\n\n Thanks for the acknowledgement";
		$headers = "From: Online Appointment";


		if (mail($to_email, $subject, $body, $headers)) {
			
			header("Location: success.php?=SUCCESS-True");


		}else{
			echo '<script> alert("Error making Appointment. Please Try again");</script>';
		}

} else {
	
	echo '<script> alert("Please fill in all field");</script>';
}



?>


























