<?php 

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'amanmadov@gmail.com';
$email_subject = 'Form message from Touro tech Academy Contact Page';
$email_body =   "User name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User message: $message .\n";
$to = 'amanmadov@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>