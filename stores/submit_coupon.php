<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{

require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());

mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());

if (isset($_POST['store_name']) && isset($_POST['coupon_code']) && isset($_POST['coupon_title']) && isset($_POST['description']) && isset($_POST['coupon_link'])&& isset($_POST['expiry_date']))
{

$store_name=stripslashes(trim($_POST['store_name']));
$coupon_code=stripslashes(trim($_POST['coupon_code']));
$coupon_title=stripslashes(trim($_POST['coupon_title']));
$description=stripslashes(trim($_POST['description']));
$coupon_link=stripslashes(trim($_POST['coupon_link']));
$expiry_date=stripslashes(trim($_POST['expiry_date']));
$category_name=stripslashes(trim($_POST['categoryName']));
$add_coupon=mysql_query("INSERT INTO submitted_coupons(submitted_coupon_title,submitted_coupon_description,submitted_coupon_code,submitted_coupon_link,submitted_coupon_expiry_date,submitted_vendor_name) VALUES('$coupon_title','$description','$coupon_code','$coupon_link','$expiry_date','$store_name')");

if ($add_coupon)
{	echo "Your Coupon is under Review. After the approval of the coupon it will be added to the website.";

	$username = $_SESSION['username'];
	$result=mysql_query("select email from login where username='$username'");
	$rows = mysql_fetch_array($result);
	$to = $rows['email']; //fetching email
	echo "You will receive a confirmation email on ".($to)."";
    //Details for sending E-mail
	$from = "daily retail couponz";
	$url = "http://www.dailyretailcouponz.com/";
	$from = "info@dailyretailcouponz.com";
	$subject = "Coupon ".($coupon_code)." Submitted";
	$body  =  "Thank you for submitting the coupon. We will get back to you shortly";
	$headers = "From: $from\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$sentmail = mail( $to, $subject, $body, $headers);
}
else
{
print "This coupon already exist.";
}
}

?>
<html>
<head>
	<title>Submit Coupon Page - DailyRetailCouponz</title>
</head>
<body>
<style type="text/css">
body {
	background-color: #f4f4f4;
	color: #5a5656;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	font-size: 16px;
	line-height: 1.5em;
}
a { 
	text-decoration: none;
 }
h1 { 
	font-size: 1em; 
	}
h1, p {
	margin-bottom: 10px;
}
strong {
	font-weight: bold;
}
.uppercase { 
	text-transform: uppercase; 
}

#login {
	margin: 50px auto;
	width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
	background-color: #e5e5e5;
	border: none;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	color: #5a5656;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	font-size: 14px;
	height: 50px;
	outline: none;
	padding: 0px 10px;
	width: 280px;
	-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
</style>
	<div id="login">
		<h3>Welcome <?php print $_SESSION['display_name']; ?></h3>
		<form action="submit_coupon.php" method="post">
				<fieldset>	
				
					<p>Store Name:<input name="store_name" type="text"/></p><br /><br/>
					<p>Coupon Title: <input type="text" name="coupon_title" size="11" /></p><br/><br />
					<p>Couple Code: <input type="text" name="coupon_code" size="11"></p><br/><br />
					<p>Coupon Description: <input type="text" name="description" size="11" /></p><br /><br />
					<p>Coupon Link: <input type="text" name="coupon_link" size="30" /></p><br /><br />
					<p>Coupon Expiry Date: <input type="text" name="expiry_date" size="11" /></p><br /><br />
					<p><input type="submit" value="Submit" /></p>
		</form>
<?php	
}
else
{
//Redirects the user to the login page if he is not logged in
header("Location: login.php");
}
?>