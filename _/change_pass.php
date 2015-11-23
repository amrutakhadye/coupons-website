<?php
require_once("db_info.php");	//include the file containing database credentials

session_start();	//Start a new session or resume a session

if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{
//If user isn't logged in redirects to the login page

header("Location: login.php");
}
if (isset($_POST['cur_pass']) && isset($_POST['pass1']) && isset($_POST['pass2']))
{
//Checks if the submit button has been clicked

if (!empty($_POST['cur_pass']) && !empty($_POST['pass1']) && !empty($_POST['pass2']))
{
$current_pass=stripslashes(trim($_POST['cur_pass']));
$pass1=stripslashes(trim($_POST['pass1']));
$pass2=stripslashes(trim($_POST['pass2']));
	if($pass1==$pass2)
	{
		//Checks if both passwords match
		if($current_pass==$_SESSION['password'])
			{
				//Checks if current password is correct
				mysql_connect($db_host,$db_username,$db_password,$db_name);
				//mysql_select_db("grabxgvz_dev2couponz");
				mysql_select_db($db_name);
				mysql_query("UPDATE login SET password='$pass1' WHERE username='".$_SESSION['username']."'");
				$_SESSION['password']=$pass1;
				//print "Password successfully changed";
				$passsuccess = "Password successfully changed";
			}
		else
			{
				//print "The current password is incorrect";
				$passfail = "The current password is incorrect";
			}
	}
	else
	{
		//print "Both the passwords do not match";
		$passnotmatch = "Both the passwords do not match";
	}
}
else
{
//Displays this if the text box is left empty

	//print "Please fill all the fields";
	$fillall = "Please fill all the fields";
}
}
//else
//{
//Displays the HTML form if this page is viewed without POSTing anything

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">

<title>My Account | DailyRetailCouponz</title>

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
				<!-- menu for all the pages -->
				
					<div id="myaccountdetails">
						<div class="single-page-title">
						<!-- <h1>Welcome <?php //print $_SESSION['display_name']; ?></h1> -->
						<h1>My Account Details</h1>
						</div>
						
					</div>
					
					<div class="myaccount-tabs">
						<ul id="myaccount-tabs-menu" class="myaccount-tabs-menu">
							<li>
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/change_name.php">Change Name</a>
							</li>
							<li>
								<a class="current-tab" href="http://dev2couponz.dailyretailcouponz.com/change_pass.php">Change Password</a>
							</li>
							<li>
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/mywishlist.php">Wishlist</a>
							</li>
							<li>
								<a class="" href="#">My Submitted Coupons</a>
							</li>
						
						</ul>
					</div>
					
					<p class="form_success_info"><?php  echo  $passsuccess; ?></p>
					<p class="form_error_info"><?php  echo  $passfail; ?></p>
					<p class="form_error_info"><?php  echo  $passnotmatch; ?></p>
					<p class="form_error_info"><?php  echo  $fillall; ?></p>
				<div id="change-password">	
					
					<form action="change_pass.php" method="post">
						<p><span class="customformtitle">Current Password: </span><input type="password" name="cur_pass" size="30" /><br /></p>
						<p><span class="customformtitle">New Password: </span><input type="password" name="pass1" size="30" /><br /></p>
						<p><span class="customformtitle">Retype New Password: </span><input type="password" name="pass2" size="30" /><br /></p>
						<p><input type="submit" value="Change Password" /></p>
					</form>
					
					
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

<?php
//}
?>