<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "sysadmin@site.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$headers = 'From: webmaster@site.com' . "\r\n" .
'Reply-To: webmaster@example.com';

// set up email 
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);

if(mail($myemail,"Mesaj de pe site",$msg,$headers)){
    header( 'Location: contact.php?mes=Mesajul a fost trimis cu succes! Va multumim.&alert=success' );
} else {
    header( 'Location: contact.php?mes=Eroare la trimiterea mesajului, va rugam reveniti.&alert=warning' );
    };

?>
