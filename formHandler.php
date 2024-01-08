<?php
include('connect.php');

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject =$_POST['subject'];
$message = $_POST['message'];

//below we need to write the domain name
$email_from = $visitor_email;

$email_subject = 'New Form Submission';

// Receiving the details from the user
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to = 'mbithiraymond@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// all the information will be sent to the user id
mail($to,$email_subject,$email_body, $headers);
//where you want to redirect the user after submission
header("Location: contact.php");
?>