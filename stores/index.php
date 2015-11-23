<?php
session_start();	//Start a new session 
require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password,$db_name);
mysql_select_db($db_name);

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon" />
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
		
		</div>
	</div> -->

	<!-- displays all featured deals on homepage -->
	<div id="featured-deals-container" class="featured-deals-container">
		<div class="container-inner"> 
			
				<!-- CATEGORY 2 -->
				
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
											<?php 	
											$select_vendor_id = mysql_query("SELECT * FROM vendor where vendor_type='Airways' LIMIT 3");
												while($row = mysql_fetch_assoc($select_vendor_id)){
													$vendor_id = $row['vendor_id'];
													$vendor_logo =$row['vendor_logo'];
													$coupon =mysql_query("SELECT * FROM coupon WHERE vendor_id='$vendor_id'");
													$coupon_row = mysql_fetch_assoc($coupon);
													$coupon_title = $coupon_row['coupon_title'];
													$coupon_code = $coupon_row['coupon_code'];
												 ?>
											
											<div class="col-4">
												<div class="fdeal">
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
														<div class="fdealtext">
														<p><span class="dealtitle"><?php echo $coupon_title; ?></span></p>
														<p><span class="showcouponbtn"><?php echo $coupon_code; ?></span></p>
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
								
										</div>
											
									</div>
									
								</div>

							</div> <!-- #tab-content1 -->
						   
						    <div id="tab-content2" class="tab-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Most Popular Stores</h2>
											
											<?php 	$find_coupons = mysql_query("SELECT * FROM vendor where vendor_type='Airways' LIMIT 3");
													while($row = mysql_fetch_assoc($find_coupons)){
													$vendor_logo = $row['vendor_logo'];
													$vendor_name = $row['vendor_name'];
												 ?>
											
												<div class="col-4">
												<div class="fstore">
											
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
													<div class="fstorename">
													<p><?php echo $vendor_name; ?></p>
											
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
										
										</div>
											
									</div>
									
								</div>
							</div> <!-- #tab-content2 -->
				
						   
						   <div id="tab-content3" class="tab-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Grab These Daily Offers</h2>
										<?php 	
											$select_vendor_id = mysql_query("SELECT * FROM vendor where vendor_type='Airways' LIMIT 3");
												while($row = mysql_fetch_assoc($select_vendor_id)){
													$vendor_id = $row['vendor_id'];
													$vendor_logo =$row['vendor_logo'];
													$coupon =mysql_query("SELECT * FROM coupon WHERE vendor_id='$vendor_id' AND coupon_title like '%megabus%'");
													$coupon_row = mysql_fetch_assoc($coupon);
													$coupon_title = $coupon_row['coupon_title'];
													$coupon_code = $coupon_row['coupon_code'];
												 ?>
											
											<div class="col-4">
												<div class="fdeal">
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
														<div class="fdealtext">
														<p><span class="dealtitle"><?php echo $coupon_title; ?></span></p>
														<p><span class="showcouponbtn"><?php echo $coupon_code; ?></span></p>
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
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
											<?php 	
											$select_vendor_id = mysql_query("SELECT * FROM vendor where vendor_type='Bus'");
												while($row = mysql_fetch_assoc($select_vendor_id)){
													$vendor_id = $row['vendor_id'];
													$vendor_logo =$row['vendor_logo'];
													$coupon =mysql_query("SELECT * FROM coupon WHERE vendor_id='$vendor_id'");
													$coupon_row = mysql_fetch_assoc($coupon);
													$coupon_title = $coupon_row['coupon_title'];
													$coupon_code = $coupon_row['coupon_code'];
												 ?>
											
											<div class="col-4">
												<div class="fdeal">
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
														<div class="fdealtext">
														<p><span class="dealtitle"><?php echo $coupon_title; ?></span></p>
														<p><span class="showcouponbtn"><?php echo $coupon_code; ?></span></p>
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
								
										</div>
											
									</div>
									
								</div>

							</div> <!-- #tab-content1 -->
						   
						    <div id="tabsecond-content2" class="tabsecond-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Most Popular Stores</h2>
											
											<?php 	$find_coupons = mysql_query("SELECT * FROM vendor where vendor_type='Bus'");
													while($row = mysql_fetch_assoc($find_coupons)){
													$vendor_logo = $row['vendor_logo'];
													$vendor_name = $row['vendor_name'];
												 ?>
											
												<div class="col-4">
												<div class="fstore">
											
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
													<div class="fstorename">
													<p><?php echo $vendor_name; ?></p>
											
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
										
										</div>
											
									</div>
									
								</div>
							</div> <!-- #tab-content2 -->
				
						   
						   <div id="tabsecond-content3" class="tabsecond-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Grab These Daily Offers</h2>
										<?php 	
											$select_vendor_id = mysql_query("SELECT * FROM vendor where vendor_type='Bus'");
												while($row = mysql_fetch_assoc($select_vendor_id)){
													$vendor_id = $row['vendor_id'];
													$vendor_logo =$row['vendor_logo'];
													$coupon =mysql_query("SELECT * FROM coupon WHERE vendor_id='$vendor_id' AND coupon_title like '%megabus%'");
													$coupon_row = mysql_fetch_assoc($coupon);
													$coupon_title = $coupon_row['coupon_title'];
													$coupon_code = $coupon_row['coupon_code'];
												 ?>
											
											<div class="col-4">
												<div class="fdeal">
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
														<div class="fdealtext">
														<p><span class="dealtitle"><?php echo $coupon_title; ?></span></p>
														<p><span class="showcouponbtn"><?php echo $coupon_code; ?></span></p>
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
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
											//<?php 	
											$select_vendor_id = mysql_query("SELECT * FROM vendor where vendor_type='Trains' LIMIT 3");
												while($row = mysql_fetch_assoc($select_vendor_id)){
													$vendor_id = $row['vendor_id'];
													$vendor_logo =$row['vendor_logo'];
													$coupon =mysql_query("SELECT * FROM coupon WHERE vendor_id='$vendor_id'");
													$coupon_row = mysql_fetch_assoc($coupon);
													$coupon_title = $coupon_row['coupon_title'];
													$coupon_code = $coupon_row['coupon_code'];
												 ?>
											
											<div class="col-4">
												<div class="fdeal">
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
														<div class="fdealtext">
														<p><span class="dealtitle"><?php echo $coupon_title; ?></span></p>
														<p><span class="showcouponbtn"><?php echo $coupon_code; ?></span></p>
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
											
											
											
											//
										</div>
											
									</div>
									
								</div>

							</div> <!-- #tab-content1 -->
						   
						    <div id="tabthird-content2" class="tabthird-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Most Popular Stores</h2>
											<?php 	$find_coupons = mysql_query("SELECT * FROM vendor where vendor_type='Trains'");
													while($row = mysql_fetch_assoc($find_coupons)){
													$vendor_logo = $row['vendor_logo'];
													$vendor_name = $row['vendor_name'];
												 ?>
											
												<div class="col-4">
												<div class="fstore">
											
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
													<div class="fstorename">
													<p><?php echo $vendor_name; ?></p>
											
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
											
										</div>
											
									</div>
									
								</div>
							</div> <!-- #tab-content2 -->
				
						   
						   <div id="tabthird-content3" class="tabthird-content">
								<div class="container-inner"> 
			
									<div class="row">
										
										<div class="container-inner">
											<h2 style="text-align:center;">Grab These Daily Offers</h2>
											<?php 	
											$select_vendor_id = mysql_query("SELECT * FROM vendor where vendor_type='Trains'");
												while($row = mysql_fetch_assoc($select_vendor_id)){
													$vendor_id = $row['vendor_id'];
													$vendor_logo =$row['vendor_logo'];
													$coupon =mysql_query("SELECT * FROM coupon WHERE vendor_id='$vendor_id' AND coupon_title like '%megabus%'");
													$coupon_row = mysql_fetch_assoc($coupon);
													$coupon_title = $coupon_row['coupon_title'];
													$coupon_code = $coupon_row['coupon_code'];
												 ?>
											
											<div class="col-4">
												<div class="fdeal">
													<img src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
														<div class="fdealtext">
														<p><span class="dealtitle"><?php echo $coupon_title; ?></span></p>
														<p><span class="showcouponbtn"><?php echo $coupon_code; ?></span></p>
											</div>												
												</div>
											  
											</div>
											<?php } //while ?>
											
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
