<?php session_start();
if (isset($_POST['submit']))
{		if($_POST['category'] == 'advertisement')
	   {
		$to = "khopkarp@mail.sacredheart.edu";
		//"khopkarp@mail.sacredheart.edu";//fetching email
		//Details for sending E-mail
		$from = "daily retail couponz";
		$url = "http://www.dailyretailcouponz.com/";
		$from = "info@dailyretailcouponz.com";
		$subject = "messgae from customers";
		$body  =  " following is the message";
		$body .= $_POST['message'];
		

		$body .= "Sincerely,
		<i>daily retail couponz</i>";
		
		//$messageh = "From: $from\n";
		//$messageh .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers = "From: $from\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		//$header .= "X-Priority: 1\r\n";
		//$header .= "X-MSMail-Priority: High\r\n";
		//$header .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail( $to, $subject, $body, $headers);
	
		//echo "Your Email Has Been Sent Successfully. We Will Get Back To You Soon.";
		$emailsentsuccess = "Your Email Has Been Sent Successfully. We Will Get Back To You Soon.";
	   }
       
	  if($_POST['category'] == 'Feedback')
	  {
	   $to = "sarkara@mail.sacredheart.edu";
		//"khopkarp@mail.sacredheart.edu";//fetching email
		//Details for sending E-mail
		$from = "daily retail couponz";
		$url = "http://www.dailyretailcouponz.com/";
		$from = "info@dailyretailcouponz.com";
		$subject = "messgae from customers";
		$body  =  " following is the message";
		$body .= $_POST['message'];
		

		$body .= "Sincerely,
		<i>daily retail couponz</i>";
		
		//$messageh = "From: $from\n";
		//$messageh .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers = "From: $from\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		//$header .= "X-Priority: 1\r\n";
		//$header .= "X-MSMail-Priority: High\r\n";
		//$header .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail( $to, $subject, $body, $headers);
	
		//echo "Your Email Has Been Sent Successfully. We Will Get Back To You Soon.";
		$emailsentsuccess = "Your Email Has Been Sent Successfully. We Will Get Back To You Soon.";
	   }
	   
	    if($_POST['category'] == 'coupons')
	  {
	   $to = "khadyea@sacredheart.edu";
		//"khopkarp@mail.sacredheart.edu";//fetching email
		//Details for sending E-mail
		$from = "daily retail couponz";
		$url = "http://www.dailyretailcouponz.com/";
		$from = "info@dailyretailcouponz.com";
		$subject = "messgae from customers";
		$body  =  " following is the message";
		$body .= $_POST['message'];
		

		$body .= "Sincerely,
		<i>daily retail couponz</i>";
		
		//$messageh = "From: $from\n";
		//$messageh .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers = "From: $from\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		//$header .= "X-Priority: 1\r\n";
		//$header .= "X-MSMail-Priority: High\r\n";
		//$header .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail( $to, $subject, $body, $headers);
	
		//echo "Your Email Has Been Sent Successfully. We Will Get Back To You Soon.";
		$emailsentsuccess = "Your Email Has Been Sent Successfully. We Will Get Back To You Soon.";
	   }
}	   
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">

<title>Contact Us | DailyRetailCouponz</title>

</head>
<body>

<div class="container-outer">
<?php
include 'header.php';
?>
	<div id="wrapper"> <!-- start of full-container -->
		<div class="container-inner">
			<div class="row">
				<div class="sidebar-vendor-page">
					<aside>
						<div class="sidebar-content">
							<h3>What Is DailyRetailCouponz?</h3>
							<p>CouponFollow is a real-time savings engine, aimed to help consumers find discount savings in the form of coupon codes. We track the latest coupon codes mentioned on Twitter and organize them. These discount codes are organized by popularity based on how many times they've been tweeted or retweeted, plus voting and feedback from our own editors and community. </p>
						</div>
					</aside>
				</div>
				
				<div class="col-9">
				<div id="single-page-layout">
					<div class="single-page-title">
						<h1>Contact Us</h1>
						</div>
					<p class="form_success_info"><?php  echo  $emailsentsuccess; ?></p>
					<div id="contactusform">
					
						<form action="contact-us.php" method="post">
						<p><span class="customformtitle">Full Name: </span><input type="text" name="fullname" required /><br /></p>
						<p><span class="customformtitle">Email: </span><input type="email" name="email" required /><br /></p>
						<p><span class="customformtitle">Category </span><br /></p>
						<p><select name="category"><br />
								<option class="customformtitle" value="advertisement">Advertisement</option>
								<option class="customformtitle" value="Feedback">Feedback</option>
								<option class="customformtitle" value="coupons">Queries regarding to coupons</option>
						 </select></p>
						<p><span class="customformtitle">Subject: </span><input type="text" name="subject" required /><br /></p>
						<p><span class="customformtitle">Message: </span><textarea rows="4" cols="50" name ="message" required></textarea><br /></p>
						<p><input id="button" type="submit" name="submit" value="submit" /></p>
					
					</div>   
				</div>
				</div>
			</div>
		</div>
		
	</div> <!-- end of wrapper -->

<?php
include 'footer.php';
?>

</div> <!-- end of container-outer -->
</body>
</html>

