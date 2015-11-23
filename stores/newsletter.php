<?php session_start(); //session is started to fetch the username variable
require_once("db_info.php");  //to authenticate the database information from db_info.php
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error()); //connecting to the database with the help of information fetched from db_info.php
mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query()); //from the above information, select the database mentioned

	if (isset($_POST['submit']))   //enter the if clause only if in the footer form the submit value is sent
	{
	$email_news=stripslashes(trim($_POST['newsletter'])); //storing the email input in the email_news variable
	$add_email=mysql_query("INSERT INTO newsletter(email) VALUES('$email_news')"); //mysql_query will 
	
		if ($add_email)  //if the add_email has successfully inserted the values it will be set to true
		{	
			echo "email added";    
			echo "You are now subscribed to Daily Retail Couponz.";
			$to = $email_news; //fetching email input from 
			echo "You will receive a confirmation email on ".($to)."";
			//Details for sending E-mail
			$from = "daily retail couponz";
			$url = "http://www.dailyretailcouponz.com/";
			$from = "info@dailyretailcouponz.com";
			$subject = "Subscribed to Daily Retail Couponz";
			$body  =  "Thank you for subscribing with us. You will now receive email from Daily Retail Couponz every week ";
			$headers = "From: $from\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$sentmail = mail( $to, $subject, $body, $headers);
		}
		else
		{
		print "email not entered.";
		}
	}

?>
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
	<!-- <div id="about-us-container" class="about-us-container">
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
	</div> -->


	
	<!-- displays all featured deals on homepage -->
	<div id="featured-deals-container" class="featured-deals-container">
		<div class="container-inner"> 
			
				<div class="row">
					<div class="col-12">
					
						<div class="tabs">
						<h2>Airways</h2>
						   <!-- Radio button and lable for #tab-content1 -->
						   <input type="radio" name="tabs" id="tab1" checked >
						   <label for="tab1">
							   <span>Top Trending Deals</span>
						   </label>
						 
						   <!-- Radio button and lable for #tab-content2 -->
						   <input type="radio" name="tabs" id="tab2">
						   <label for="tab2">
							   <span>Featured Stores</span>
						   </label>

						   <!-- Radio button and lable for #tab-content3 -->
						   <input type="radio" name="tabs" id="tab3">
						   <label for="tab3">
							   <span>Daily Offers</span>
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
				
				
				
				
				<!-- CATEGORY 2 -->
				
				<div class="row">
					<div class="col-12">
						
						<div class="tabsecond">
						<h2>Bus</h2>
						   <!-- Radio button and lable for #tab-content1 -->
						   <input type="radio" name="tabsecond" id="tabsecond1" checked >
						   <label for="tabsecond1">
							   <span>Top Trending Deals</span>
						   </label>
						 
						   <!-- Radio button and lable for #tab-content2 -->
						   <input type="radio" name="tabsecond" id="tabsecond2">
						   <label for="tabsecond2">
							   <span>Featured Stores</span>
						   </label>

						   <!-- Radio button and lable for #tab-content3 -->
						   <input type="radio" name="tabsecond" id="tabsecond3">
						   <label for="tabsecond3">
							   <span>Daily Offers</span>
						   </label>
						 
							<div id="tabsecond-content1" class="tabsecond-content">

								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Check out our Featured Deals</h2>
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
						   
						    <div id="tabsecond-content2" class="tabsecond-content">
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
				
						   
						   <div id="tabsecond-content3" class="tabsecond-content">
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
			
			

			
			<!-- CATEGORY 3 -->
				
				<div class="row">
					<div class="col-12">
						
						<div class="tabthird">
						<h2>Trains</h2>
						   <!-- Radio button and lable for #tab-content1 -->
						   <input type="radio" name="tabthird" id="tabthird1" checked >
						   <label for="tabthird1">
							   <span>Top Trending Deals</span>
						   </label>
						 
						   <!-- Radio button and lable for #tab-content2 -->
						   <input type="radio" name="tabthird" id="tabthird2">
						   <label for="tabthird2">
							   <span>Featured Stores</span>
						   </label>

						   <!-- Radio button and lable for #tab-content3 -->
						   <input type="radio" name="tabthird" id="tabthird3">
						   <label for="tabthird3">
							   <span>Daily Offers</span>
						   </label>
						 
							<div id="tabthird-content1" class="tabthird-content">

								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Check out our Featured Deals</h2>
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
						   
						    <div id="tabthird-content2" class="tabthird-content">
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
				
						   
						   <div id="tabthird-content3" class="tabthird-content">
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
