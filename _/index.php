<?php
session_start();
require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());
mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">

<title>DailyRetailCouponz.com</title>


</head>
<body>

<div class="container-outer">

	<?php 
		include 'header-front.php'
	?>



<div id="wrapper"> <!-- start of full-container -->
	<!-- only for inner pages
	<section id="titlebar"> <!-- title goes here
		<div class="container">
		</div>
	</section> -->
	



	
	<!-- displays about us section -->
	<div id="about-us-container" class="about-us-container">
		<div class="container-inner"> 
			
				<div class="row">
					<div class="col-12">
						<h2>About Us</h2>
						<p>Daily retail Couponz is a coupon website which provides you various store coupons, promo codes and discounts from different brands and companies. Daily Retail Couponz is what you are looking for if you’re looking to grab some discounts for your travel.</p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12">
						<h2>More Info</h2>
						<p>Daily retail Couponz is a coupon website which provides you various store coupons, promo codes and discounts from different brands and companies. Daily Retail Couponz is what you are looking for if you’re looking to grab some discounts for your travel.</p>
					</div>
				</div>
			
		</div>
	</div>


	
	<!-- displays all featured deals on homepage -->
	<div id="featured-deals-container" class="featured-deals-container">
		<div class="container-inner"> 
			
				<div class="row">
					<div class="col-12">
						
						<div class="tabs">
 
						   <!-- Radio button and lable for #tab-content1 -->
						   <input type="radio" name="tabs" id="tab1" checked >
						   <label for="tab1">
							   <i class="fa fa-html5"></i><span>Top Trending Deals</span>
						   </label>
						 
						   <!-- Radio button and lable for #tab-content2 -->
						   <input type="radio" name="tabs" id="tab2">
						   <label for="tab2">
							   <i class="fa fa-css3"></i><span>Featured Stores</span>
						   </label>
						 
						   <!-- Radio button and lable for #tab-content3 -->
						   <input type="radio" name="tabs" id="tab3">
						   <label for="tab3">
							   <i class="fa fa-code"></i><span>Top Categories</span>
						   </label>
						   
						   <!-- Radio button and lable for #tab-content3 -->
						   <input type="radio" name="tabs" id="tab4">
						   <label for="tab4">
							   <i class="fa fa-code"></i><span>Daily Offers</span>
						   </label>
						 
							<div id="tab-content1" class="tab-content">

								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Check out our Featured Deals</h2>
											<div class="col-3">
												<div class="fdeal">
													<img src="http://placehold.it/240x150">
													<div class="fdealtext">
													<?php
															$all_coupons = mysql_query("SELECT * FROM coupon");
															while($row = mysql_fetch_assoc($all_coupons)){
																$name = $row['coupon_title']; 
																$description = $row['coupon_description']; ?>
														
																<p><span class="dealtitle">60% Off International Flights</span></p><?php echo $name ?><br/>";
																<p><span class="dealdesc"><?php echo $description ?></span></p>
																<p><span class="showcouponbtn">Redeem Coupon</span></p>
													</div>												
												</div>
											  
											</div>
											
											<div class="col-3">
												<div class="fdeal">
													<img src="http://placehold.it/240x150">
													<div class="fdealtext">
														<p><span class="dealtitle">10% Off Amtrak in PA</span></p>
														<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
														<p><span class="showcouponbtn">Redeem Coupon</span></p>
													</div>	
												</div>
											</div>
											
											<div class="col-3">
												<div class="fdeal">
													<img src="http://placehold.it/240x150">
													<div class="fdealtext">
														<p><span class="dealtitle">60% Off Cabs in NY</span></p>
														<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
														<p><span class="showcouponbtn">Redeem Coupon</span></p>
													</div>	
												</div>
											</div>
											
											<div class="col-3">
												<div class="fdeal">
													<img src="http://placehold.it/240x150">
													<div class="fdealtext">
														<p><span class="dealtitle">50% Off Domestic Flights</span></p>
														<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
														<p><span class="showcouponbtn">Redeem Coupon</span></p>
													</div>	
												</div>
											</div>
										</div>
											
									</div>
									
								</div>

							</div> <!-- #tab-content1 -->
						   
						   <div id="tab-content2" class="tab-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Most Popular Stores</h2>
											<div class="col-3">
												<div class="fstore">
													<img src="http://placehold.it/240x150">
													<div class="fstorename">
														<p><a href="#">Store Name 1</a></p>
													</div>												
												</div>
											  
											</div>
											
											<div class="col-3">
												<div class="fstore">
													<img src="http://placehold.it/240x150">
													<div class="fstorename">
														<p><a href="#">Store Name 2</a></p>
													</div>	
												</div>
											</div>
											
											<div class="col-3">
												<div class="fstore">
													<img src="http://placehold.it/240x150">
													<div class="fstorename">
														<p><a href="#">Store Name 3</a></p>
													</div>	
												</div>
											</div>
											
											<div class="col-3">
												<div class="fstore">
													<img src="http://placehold.it/240x150">
													<div class="fstorename">
														<p><a href="#">Store Name 4</a></p>
													</div>	
												</div>
											</div>
										</div>
											
									</div>
									
								</div>
						   </div> <!-- #tab-content2 -->
						   
						   <div id="tab-content3" class="tab-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Our Selected Categories</h2>
											<div class="col-3">
												<div class="fcategory">
													<img src="http://placehold.it/240x150">
													<div class="fcatname">
														<p><a href="#">Category Name 1</a></p>
													</div>												
												</div>
											  
											</div>
											
											<div class="col-3">
												<div class="fcategory">
													<img src="http://placehold.it/240x150">
													<div class="fcatname">
														<p><a href="#">Category Name 1</a></p>
													</div>												
												</div>
											</div>
											
											<div class="col-3">
												<div class="fcategory">
													<img src="http://placehold.it/240x150">
													<div class="fcatname">
														<p><a href="#">Category Name 1</a></p>
													</div>												
												</div>
											</div>
											
											<div class="col-3">
												<div class="fcategory">
													<img src="http://placehold.it/240x150">
													<div class="fcatname">
														<p><a href="#">Category Name 1</a></p>
													</div>												
												</div>
											</div>
										</div>
											
									</div>
									
								</div>
						   </div> <!-- #tab-content3 -->
						   
						   <div id="tab-content4" class="tab-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Grab These Daily Offers</h2>
											<div class="col-3">
												<div class="fdeal">
													<img src="http://placehold.it/240x150">
													<div class="fdealtext">
														<p><span class="dealtitle">60% Off International Flights</span></p>
														<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
														<p><span class="showcouponbtn">Redeem Coupon</span></p>
													</div>												
												</div>
											  
											</div>
											
											<div class="col-3">
												<div class="fdeal">
													<img src="http://placehold.it/240x150">
													<div class="fdealtext">
														<p><span class="dealtitle">10% Off Amtrak in PA</span></p>
														<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
														<p><span class="showcouponbtn">Redeem Coupon</span></p>
													</div>	
												</div>
											</div>
											
											<div class="col-3">
												<div class="fdeal">
													<img src="http://placehold.it/240x150">
													<div class="fdealtext">
														<p><span class="dealtitle">60% Off Cabs in NY</span></p>
														<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
														<p><span class="showcouponbtn">Redeem Coupon</span></p>
													</div>	
												</div>
											</div>
											
											<div class="col-3">
												<div class="fdeal">
													<img src="http://placehold.it/240x150">
													<div class="fdealtext">
														<p><span class="dealtitle">50% Off Domestic Flights</span></p>
														<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
														<p><span class="showcouponbtn">Redeem Coupon</span></p>
													</div>	
												</div>
											</div>
										</div>
											
									</div>
									
								</div>
						   </div> <!-- #tab-content3 -->
						   
						</div>
						
					</div>
				</div>
			
		</div>
	</div>
	
	
	<!-- displays all featured testimonials on homepage -->
	<div id="featured-testimonials-container" class="featured-testimonials-container">
		<div class="container-inner"> 
			
			<div class="row">
				<div class="col-12">
					<h2 style="text-align:center;">Testimonials</h2>
					<div class="testimonial-text">
						<p><i>I have been couponing since last couple of months and have saved round about $100, just with using 3-4 coupons from Frugaa! I had no clue that one could save money on airfare, clothing, food, restaurants I like. I would like to thank this site for making such a huge difference in my life and my credit card bills! People, if you are looking for some serious savings, Frugaa is your best bet!</i></p>
						<p class="testimonial-author">- Barney Stinson</p>
						<p class="testimonial-read-more"><a href="testimonial.php">Read More</a></p>
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
