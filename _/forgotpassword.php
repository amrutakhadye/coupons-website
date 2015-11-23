<?php 
require_once("db_info.php");	//include the file containing database credentials
session_start();

// condition 1: if the user is logged in - then what
	// redirect to some page
	
// condition 2: if you are not logged in - then what 
	// forgot password code should run
	
if (isset($_POST['username']) && empty($_POST['pass'])){
	$username = $_POST['username'];
	
	mysql_connect($db_host,$db_username,$db_password,$db_name);
	//mysql_select_db("grabxgvz_dev2couponz");
	mysql_select_db($db_name);

	//echo $username; //value is entering
	
	$query="select * from login where username='$username'";
	$result = mysql_query($query);
	$count=mysql_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{	echo "in here";
		$rows = mysql_fetch_array($result);
		$pass  =  $rows['password'];//FETCHING PASS
		//echo "your pass is ::".($pass)." ";
		$to = $rows['email']; //fetching email
		echo "your email is ::".($to)." ";
		//Details for sending E-mail
		$from = "daily retail couponz";
		$url = "http://www.dailyretailcouponz.com/";
		$from = "info@dailyretailcouponz.com";
		$subject = "DailyRetailCouponz Password recovered";
		$body  =  " password recovery Script
		-----------------------------------------------
		Url : $url;
		email Details is : $to;
		Here is your password  : $pass;
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
	} 
	else 
	{
		if ($_POST ['email'] != "") 
		{
			echo "<span style='color: #ff0000;'> Not found your email in our database</span>";
		}
		else 
		{
			// put email as required
		}
	}
	
	//If the message is sent successfully, display sucess message otherwise display an error message.
	if($sentmail==1)
	{
		echo "<span style='color: #ff0000;'> Your Password Has Been Sent To Your Email Address.</span>";
	}
		else
		{
		if($_POST['email']!="")
		echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
	}
}

else {
echo "no username received";
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home: Webpage</title>
</head>
<body>
<form action="forgotpassword.php" method="post">
		<label> Enter your User ID : </label>
		<input id="username" type="text" name="username" />
		<input id="button" type="submit" name="button" value="Submit" />
	</form>
</body>
</html>