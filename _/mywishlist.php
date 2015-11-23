<?php session_start();	//Start a new session or resume a session ?>
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
								<a class="" href="http://dev2couponz.dailyretailcouponz.com/change_pass.php">Change Password</a>
							</li>
							<li>
								<a class="current-tab" href="http://dev2couponz.dailyretailcouponz.com/mywishlist.php">Wishlist</a>
							</li>
							<li>
								<a class="" href="#">My Submitted Coupons</a>
							</li>
						
						</ul>
					</div>
					
				<div id="mywishlist">	
					
					<p>DISPLAY ALL WISHLIST COUPONS HERE...</p>
					
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
