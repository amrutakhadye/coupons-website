<?php

if (isset($_POST['submit']))
{
		$to = $_POST['email'];
		//"khopkarp@mail.sacredheart.edu";//fetching email
		//Details for sending E-mail
		$from = "daily retail couponz";
		$url = "http://www.dailyretailcouponz.com/";
		$from = "info@dailyretailcouponz.com";
		$subject = "messgae from customers";
		$body  =  " following is the message
		-----------------------------------------------

		Sincerely,
		<i>daily retail couponz</i>";
		
		//$messageh = "From: $from\n";
		//$messageh .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers = "From: $from\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		//$header .= "X-Priority: 1\r\n";
		//$header .= "X-MSMail-Priority: High\r\n";
		//$header .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail( $to, $subject, $body, $headers);
	
		echo "email sent";
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<form action="" method="post">
Full Name:<input type="text" name="fullname" required />
<br>
Email:<input type="email" name="email" required />
<br>
Subject:<input type="text" name="subject" required />
<br>
Message:<input type="text" name="message" required />
<br>
 <input id="button" type="submit" name="submit" value="submit" />


</form>
</body>
</html>
