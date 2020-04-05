<?php 
	ini_set("sendmail_from","spencer@wcomhelp.com");
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "spencer@wcomhelp.com";
    $to = "spencer.wcom@gmail.com";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
?>