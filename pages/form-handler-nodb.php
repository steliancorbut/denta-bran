<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "sysadmin@localhost"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com';

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg,$headers);
mail($email,"Thank you for your form submission",$msg,$headers);
header( 'Location: contact_ok.html' );
?>
