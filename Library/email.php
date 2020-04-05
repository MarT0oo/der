<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = strip_tags(trim($_POST['contactname']));
	}

	//Check to make sure that the phone field is not empty
	//if(trim($_POST['phone']) == '') {
	//	$hasError = false;
	//} else {
		//$phone = trim($_POST['phone']);
	//}

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

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'leo@dreamexoticrentals.com'; //Put your own email address here
		$subject ='Sent from DreamExoticRentals.com';
		$body = strip_tags("Subject: $subject \n\nName: $name\nEmail: $email \n\nComment:\n $comments");
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dream Exotic Rentals</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	
	<link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=cyrillic-ext,latin,cyrillic' rel='stylesheet' type='text/css'>

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- danger: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74094147-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Custom Scrollbar -->
  <link rel="stylesheet" href="http://www.agentvillas.com/vendors/scrollbar/jquery.mCustomScrollbar.min.css" type="text/css" media="all" />
</head>


<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5756e0d3d7e899f17356d3aa/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="thank-you" class="well text-center">
					<h1>Your message is sent successfully!</h1>
					<p>Thank you for using our contact form! Your email is sent sucessfully and we will get in touch with you as soon as possible</p>
					<p>You will be redirected in 5 seconds!</p>
				</div>
			</div>
		</div>
	</div>
		
	<?php
		echo '<META HTTP-EQUIV="Refresh" Content="5; URL=index.htm">';    
		exit;  
	
	} ?>



	

	<?php if(isset($hasError)) { //If errors are found ?>
	
	<!------------- your original page goes here! ---------------------->
	<div id="error404">

	</div><!--container-->	
	
	<?php } ?>
	
</body>
</html>