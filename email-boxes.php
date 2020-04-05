<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dream Exotic Rentals</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playball|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	
	<!-- fotorama.css & fotorama.js. -->
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	
	<script src='https://www.google.com/recaptcha/api.js'></script>

<link href="css/old-style.css" type="text/css" rel="stylesheet" />
<link href="css/domcollapse.css" type="text/css" rel="stylesheet" />
<link href="css/poto.css" type="text/css" rel="stylesheet" />
<link href="css/usa.css" type="text/css" rel="stylesheet" />
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<!--<script type="text/javascript" src="js/domcollapse_2.js"></script>
<script type="text/javascript" src="http://dreamexoticrentals.com/js/maps.js"></script>
<script type="text/javascript" src="js/compressed.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/redesign-style.css" rel="stylesheet">

</head>

<body class="thank-you-page">

<?php
//If the form is submitted
if(isset($_POST['submit-concierge'])) {

	//Check to make sure that the name field is not empty
	$name = strip_tags(trim($_POST['field-full-name']));
	$phone = strip_tags(trim($_POST['field-phone-number']));
	$service = strip_tags(trim($_POST['field-types-of-services']));
	$field = strip_tags(trim($_POST['field-are-you-booking']));
	$trip = strip_tags(trim($_POST['field-which-trip']));

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['field-email-address']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['field-email-address']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['field-email-address']);
	}

	//If there is no error, send the email
  	$emailTo = 'msalazar@dreamexoticrentals.com'; //Put your own email address here
  	$subject ='Sent from DreamExoticRentals.com - Concierge Services';
  	$body = strip_tags("Subject: $subject \n\nName: $name\nEmail: $email\nPhone: $phone\nType of services required?: $service\nAre you booking a trip with us?: $trip\nIf so which trip?: $trip");
  	$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

  	//mail($emailTo, $subject, $body, $headers);
  	$emailSent = true;

?>

		<br/>
		<br/>
		<br/>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div id="thank-you thank-you-secondary" class="text-center alert alert-secondary">
						<h1>Your message is sent successfully!</h1>
						<p>Thank you for using our contact form! Your email is sent sucessfully and we will get in touch with you as soon as possible</p>
						<small>You will be redirected in 5 seconds!</small>
					</div>
				</div>
			</div>
		</div>

<?php

		$reverer = $_SERVER["HTTP_REFERER"];
		echo '<META HTTP-EQUIV="Refresh" Content="5; URL='.$reverer.'">';    
		exit;  

        }    
	
?>


<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
	
		
	<?php
		
	
	} ?>



<?php
//If the form is submitted
if(isset($_POST['submit-planning'])) {

	//Check to make sure that the name field is not empty
	$name = strip_tags(trim($_POST['field-name2']));
	$phone = strip_tags(trim($_POST['field-phone-number2']));
	$type_travel = strip_tags(trim($_POST['field-types-of-travel2']));
	$date_travel = strip_tags(trim($_POST['field-dates-of-travel2']));
	$adults = strip_tags(trim($_POST['field-how-many-adults2']));
	$children = strip_tags(trim($_POST['field-how-many-children2']));
	$location = strip_tags(trim($_POST['field-location-of-travel2']));
	$describe = strip_tags(trim($_POST['field-describe']));

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['field-email-address2']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['field-email-address2']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['field-email-address2']);
	}

	//If there is no error, send the email
  	$emailTo = 'msalazar@dreamexoticrentals.com'; //Put your own email address here
  	$subject ='Sent from DreamExoticRentals.com - Travel Planning Box';
  	$body = strip_tags("Subject: $subject \n\nName: $name\nEmail: $email\nPhone: $phone\nType of travel required?: $type_travel\nDates of travel request?: $date_travel\nAdults: $adults\nChildren: $children\nLocations: $location\n\nComment: $describe");
  	$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

  	//mail($emailTo, $subject, $body, $headers);
  	$emailSent = true;

?>

		<br/>
		<br/>
		<br/>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div id="thank-you thank-you-secondary" class="text-center alert alert-secondary">
						<h1>Your message is sent successfully!</h1>
						<p>Thank you for using our contact form! Your email is sent sucessfully and we will get in touch with you as soon as possible</p>
						<small>You will be redirected in 5 seconds!</small>
					</div>
				</div>
			</div>
		</div>

<?php

		$reverer = $_SERVER["HTTP_REFERER"];
		echo '<META HTTP-EQUIV="Refresh" Content="5; URL='.$reverer.'">';    
		exit;  

        }    
	
?>


<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
	
		
	<?php
		
	
	} ?>

	


<?php
//If the form is submitted
if(isset($_POST['submit-staff'])) {

	//Check to make sure that the name field is not empty
	$name = strip_tags(trim($_POST['field-name3']));
	$phone = strip_tags(trim($_POST['field-phone-number3']));
	$type_service = strip_tags(trim($_POST['field-types-of-services3']));
	$are_you_booking = strip_tags(trim($_POST['field-are-you-booking-a-trip3']));
	$trip = strip_tags(trim($_POST['field-which-trip3']));

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['field-email-address3']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['field-email-address3']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['field-email-address3']);
	}

	//If there is no error, send the email
  	$emailTo = 'msalazar@dreamexoticrentals.com'; //Put your own email address here
  	$subject ='Sent from DreamExoticRentals.com - Staff Control Box';
  	$body = strip_tags("Subject: $subject \n\nName: $name\nEmail: $email\nPhone: $phone\nType of services required?: $type_service\nAre you booking a trip with us?: $are_you_booking\nIf so which trip?: $trip");
  	$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

  	//mail($emailTo, $subject, $body, $headers);
  	$emailSent = true;

?>

		<br/>
		<br/>
		<br/>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div id="thank-you thank-you-secondary" class="text-center alert alert-secondary">
						<h1>Your message is sent successfully!</h1>
						<p>Thank you for using our contact form! Your email is sent sucessfully and we will get in touch with you as soon as possible</p>
						<small>You will be redirected in 5 seconds!</small>
					</div>
				</div>
			</div>
		</div>

<?php

		$reverer = $_SERVER["HTTP_REFERER"];
		echo '<META HTTP-EQUIV="Refresh" Content="5; URL='.$reverer.'">';    
		exit;  

        }    
	
?>


<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
	
		
	<?php
		
	
	} ?>


	
</body>
</html>