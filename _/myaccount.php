<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	//this condition will check if the logged in user is a employee
	if (($_SESSION['username'] == 'khadyea') || ($_SESSION['username'] == 'alqahtanis4') || ($_SESSION['username'] == 'sarkara') || ($_SESSION['username'] == 'khopkarp'))
	{
		//if a employee, he/she will be redirected to empaccount.php
		?>
			<script type="text/javascript">
						window.location.href = '/empaccount.php';
			</script>
		<?php 
	}
	else {
		//display my account information for all the users 
			?>
			<?php // print $_SESSION['display_name']; ?>
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
						<div class="single-page-title">
						<!-- <h1>Welcome <?php //print $_SESSION['display_name']; ?></h1> -->
						<h1>My Account Details</h1>
						</div>
						<p>Welcome to DailyRetailCouponz. We are really happy to have you on board with us.</p>
						<p>Here, you can edit/view your specific account details by clicking below tabs.</p>
					
					
					<!-- menu for all the pages -->
					<div class="myaccount-tabs">
						<ul id="myaccount-tabs-menu" class="myaccount-tabs-menu">
							<li>
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/change_name.php">Change Name</a>
							</li>
							<li>
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/change_pass.php">Change Password</a>
							</li>
							<li>
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/mywishlist.php">Wishlist</a>
							</li>
							<li>
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/submit_coupon.php">Submit a Coupons</a>
							</li>
						
						</ul>
					</div>
					
					<div id="myaccountdetails">
						<div class="single-page-title">
							<h2>Overview of Your Account</h2>
							
						</div>
					</div>
					
					
					<!-- content for my account page -->
						<p><span class="customformtitle">Name: </span><b style="font-size:18px;"><?php print $_SESSION['display_name']; ?></p>
						<p><span class="customformtitle">Username: </span><b style="font-size:18px;"><?php print $_SESSION['username']; ?></p>
						<p><span class="customformtitle">Registered Email Address: </span><b style="font-size:18px;"><?php print $_SESSION['email']; ?></p>
						<p><span class="showcouponbtn"><a href="logout.php">Logout</a></span></p><br>
						<p><span class="showcouponbtn"><a href="delete.php">Delete Account</a></span></p>
				</div>
			</div>
			</div>
		</div>



			<?php
		} ?>
		
</div> <!-- end of wrapper -->

<?php
include 'footer.php';
?>

</div> <!-- end of container-outer -->
</body>
</html>
		
<?php }
else
{
//Redirects the user to the login page if he is not logged in
header("Location: login.php");
}
?>