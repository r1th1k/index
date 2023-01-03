<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'infosec@gmail.com';


$email_to = 'rithik.pika@gmail.com';

$email_body = "name: $name\n".
			  "mail: $email\n".
			  "subject: $subject\n".
			  "message: $message\n";

$headers  = "From: $email_from";
$headers .= "Reply-to: $mail";


mail($email_to, "user info", $email_body, $headers);

headers("location:contact.html");

?>