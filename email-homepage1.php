<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dream Exotic Rentals</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

		<!-- CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Playball|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Allura|Montez|Norican&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="/css/main.css">
		<link href="/css/theme-all.css" rel="stylesheet">



</head>


<body class="thank-you-page text-center">

<?php
//If the form is submitted

$emailSent == false;

if(isset($_POST['submit']) && $_POST['gotcha'] == "" && isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]) {

	$fname = $_POST['field-fname'];
	$lname = $_POST['field-lname'];
	$email = $_POST['field-email'];
	$phone = $_POST['field-phone'];
	$dates = $_POST['field-dates'];
	$location = $_POST['field-location'];
	$message = $_POST['field-message'];

	$curPageURL = $_SERVER['HTTP_REFERER'];

	$emailTo = 'msalazar@dreamexoticrentals.com';
	// $emailTo = 'marto.apostolov@gmail.com';
	$subject ='Sent from DreamExoticRentals.com';
	$body = strip_tags("Subject: $subject \n\nFirst Name: $fname\nLast Name: $lname\nEmail: $email\nPhone: $phone\nDate: $dates\nLocation: $location \n\nComment:\n $message\n\nPage URL: $curPageURL");
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
						<small>You will be redirected in 5 seconds!</small>
					</div>
				</div>
			</div>
		</div>

	<?php

	}

} else {

	?>

		<br /><br /><br />

		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div id="thank-you" class="text-center alert alert-secondary">
						<p>There was an error and your message was not sent! You will be redirected in 5 seconds.</p>
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
