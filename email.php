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
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = strip_tags(trim($_POST['contactname']));
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	$curPageURL = $_SERVER['HTTP_REFERER'];

	if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }

    if(!$captcha){
          

?>        	
          <br/>
          <div class="container">
          	<div class="row">
          		<div class="col-lg-10 col-lg-offset-1">
          			<div id="thank-you" class="text-center alert alert-secondary">
          				<h4><i class="glyphicon glyphicon-info-sign"></i> Error! Please check the "I am not a robot" checkbox.</h4>
          				<button onclick="history.go(-1);" class="btn btn-info">Back </button>
          			</div>
          		</div>
          	</div>
          </div>
<?php
		exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdulAkTAAAAAE7-aT9cyov6VEWEMCHpqNB3s8je&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
        	  echo '<h2>Please check "I am not a robot".</h2>';
	          echo '<button onclick="history.go(-1);">Back </button>';
	          exit;
        }else
        {
          //If there is no error, send the email
          	//$emailTo = 'msalazar@dreamexoticrentals.com'; //Put your own email address here
          	$emailTo = 'leseven@hotmail.com'; //Put your own email address here
          	$subject ='Sent from DreamExoticRentals.com';
          	$body = strip_tags("Subject: $subject \n\nName: $name\nEmail: $email \n\nComment:\n $comments\n\nPage URL: $curPageURL");
          	$headers = 'From: Dream Exotic Rentals Form <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

          	mail($emailTo, $subject, $body, $headers);
          	$emailSent = true;
          	
?>

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

		$reverer = $_SERVER["HTTP_REFERER"];
		echo '<META HTTP-EQUIV="Refresh" Content="5; URL='.$reverer.'">';    
		exit;  

        }    
	
}
?>


<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
	
		
	<?php
		
	
	} ?>



	

	<?php if(isset($hasError)) { //If errors are found ?>
	
	<!-- ----------- your original page goes here! -------------------- -->
	<div id="error404">

	</div><!--container-->	
	
	<?php } ?>

		
</body>
</html>