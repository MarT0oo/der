<html>
<body>
<?php

// If you want to have this send to multiple emails copy the below code and just duplicate it, placing the second email address in the second block of code.



// BEGIN PHP MAIL CODE
   if (mail("wcomemail@gmail","Test Form Submission","This email was sent using the PHP mail() function. If you received this email than the PHP mailer is working fine.")){
      echo "Mail successfully sent <br/ ><br />";
   }
   else {
      echo "There was an issue sending the email";
   }
// END PHP MAIL CODE




?>
</body>
</html>