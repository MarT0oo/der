<?php
// Get Data	
$FirstName = strip_tags($_POST['FirstName']);
$LastName = strip_tags($_POST['LastName']);
$email = strip_tags($_POST['email']);
$Subject = strip_tags($_POST['Subject']);
$phone = strip_tags($_POST['phone']);
$url = strip_tags($_POST['url']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "leo@dreamexoticrentals.com", "Contact Form Submission",
"Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $url\nMessage: $message\n",
"From: Forms <leo@example.net>" );
?>