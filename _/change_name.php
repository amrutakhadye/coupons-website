<?php
require_once("db_info.php");	//include the file containing database credentials

session_start();	//Start a new session or resume a session

if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{

//If user isn't logged in redirects to the login page
header("Location: login.php");
}
if(isset($_POST['new_name']))
{
//Checks if the submit button has been clicked

if(!empty($_POST['new_name']))
	{
	//Chnages the Display name
	$old_name=$_SESSION['display_name'];
	$new_name=stripslashes(trim($_POST['new_name']));
	$uname=$_SESSION['username'];
	mysql_connect($db_host,$db_username,$db_password,$db_name);
	//mysql_select_db("grabxgvz_dev2couponz");
	mysql_select_db($db_name);
	mysql_query("UPDATE login SET full_name='$new_name' WHERE username='$uname'");
	$_SESSION['display_name']=$new_name;
	//print "Your Account name has been changed from $old_name to $new_name";
	$info_success = "Your Account name has been changed from $old_name to $new_name";
	}
else
{
//Displays this if the text box is left empty

	//print "Field cannot be blank";
	$info_empty = "Field cannot be blank";
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
								<a class="current-tab" href="http://dev2couponz.dailyretailcouponz.com/change_name.php">Change Name</a>
							</li>
							<li>
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/change_pass.php">Change Password</a>
							</li>
							<li>
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/mywishlist.php">Wishlist</a>
							</li>
							<li>
								<a class="" href="#">My Submitted Coupons</a>
							</li>
						
						</ul>
					</div>
					
					<p class="form_success_info"><?php  echo  $info_success; ?></p>
					<p class="form_error_info"><?php  echo  $info_empty; ?></p>
				<div id="change-name">	
						
					<form action="change_name.php" method="post">
						<p><span class="customformtitle">Current Display Name is: </span><b style="font-size:18px;"><?php print $_SESSION['display_name']; ?></b><br /></p>
						<p><span class="customformtitle">Enter a new display name: </span><input type="text" name="new_name" size="30" required/><br /></p>
						<p><input type="submit" value="change" /></p>
					</form>
					
					
				</div>
				</div>
			</div>	
			</div>
		</div>


<?php
//}
?>

</div> <!-- end of wrapper -->

<?php
include 'footer.php';
?>

</div> <!-- end of container-outer -->
</body>
</html>
