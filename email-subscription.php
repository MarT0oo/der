<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Dream Exotic Rentals</title>

<!-- Bootstrap -->
<link href="http://dreamexoticrentals.com/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://dreamexoticrentals.com/css/component.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playball|Dancing+Script:400,700' rel='stylesheet' type='text/css'>

<!-- fotorama.css & fotorama.js. -->
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet">
<!-- 3 KB -->

<script src='https://www.google.com/recaptcha/api.js'></script>
<link href="http://dreamexoticrentals.com/css/old-style.css" type="text/css" rel="stylesheet" />
<link href="http://dreamexoticrentals.com/css/domcollapse.css" type="text/css" rel="stylesheet" />
<link href="http://dreamexoticrentals.com/css/poto.css" type="text/css" rel="stylesheet" />
<link href="http://dreamexoticrentals.com/css/usa.css" type="text/css" rel="stylesheet" />
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<link href="http://dreamexoticrentals.com/css/redesign-style.css" rel="stylesheet">
</head>

<body class="thank-you-page">
<?php
//If the form is submitted

$emailSent == false;

if(isset($_POST['submit'])) {

	
	$email = $_POST['field-email'];
	

	$emailTo = 'leseven@hotmail.com';
	$subject ='Sent from DreamExoticRentals.com Contacts page';
	$body = strip_tags("Subject: $subject \n\nEmail: $field-email");
	$headers = 'From: Dream Exotic Rentals Form <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'Bcc: leo@dreamexoticrentals.com';

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
          	
	if($emailSent == true) { //If email is sent ?>
<br/>
<br/>
<br/>
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div id="thank-you" class="text-center alert alert-secondary">
        <h1>Your subscription is sent successfully!</h1>
        <p>Thank you for subscribing with us! Your subscription is sent sucessfully </p>
        <small>You will be redirected in 5 seconds!</small> </div>
    </div>
  </div>
</div>
<?php
	
	} 

} 

if(isset($_POST['submit1'])) {

	
	$email = $_POST['field-email'];
	

	

	$emailTo = 'leo@dreamexoticrentals.com';
	
	$subject ='Sent from DreamExoticRentals.com Subscription page';
	$body = strip_tags("Subject: $subject \n\nEmail: $field-email");
	$headers = 'From: Dream Exotic Rentals Form <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'Bcc: leo@dreamexoticrentals.com';

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
          	
	if($emailSent == true) { //If email is sent ?>
<br/>
<br/>
<br/>
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div id="thank-you" class="text-center alert alert-secondary">
        <h1>Your message is sent successfully!</h1>
        <p>Thank you for using our contact form! Your email is sent sucessfully and we will get in touch with you as soon as possible</p>
        <small>You will be redirected in 5 seconds!</small> </div>
    </div>
  </div>
</div>
<?php
	
	} 

} 

if( !$_POST['gotcha'] == "" || !$_POST['gotcha1'] == "" ) {

	?>
<br />
<br />
<br />
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div id="thank-you" class="text-center alert alert-secondary">
        <p>Your message is considered as spam! You will be redirected in 5 seconds.</p>
      </div>
    </div>
  </div>
</div>
<?php
}

	$reverer = $_SERVER["HTTP_REFERER"];
	
	echo '<META HTTP-EQUIV="Refresh" Content="5; URL='.$reverer.'">';
	exit;

?>
</body>
</html>