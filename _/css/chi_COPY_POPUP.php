<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">

<title>British Airways - Coupons</title>


</head>
<body>

<div class="container-outer">
<?php
include '../header.php';
?>
<div id="wrapper"> <!-- start of full-container -->
	<!-- only for inner pages
	<section id="titlebar"> <!-- title goes here
		<div class="container">
		</div>
	</section> -->

<?php //$uri = $_SERVER['REQUEST_URI'];
//echo $uri;
 ?>
	<!-- displays all featured deals on homepage -->
	<div id="deals-container" class="deals-container">
		<div class="container-inner"> 
			
				<div class="row">
						<!-- call sidebar specific to single vendor page -->
						<?php 
						include '../sidebar-vendor-page.php'
						?>
						
						<!-- main content page -->
						<div class="col-9">
							<div class="single-page-title">
							<h1 style="text-align:center;">Check out our Featured Deals</h1>
							</div>
							<!-- we have to right a loop and fetch data from the database  -->
							<div class="single-deal">
								<img class="storelogo" src="http://placehold.it/240x150">
								<div class="single-dealtext">
									<div class="dealtitle">60% Off International Flights</div>
									<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
									
										<script>	
										
												var clip = new ZeroClipboard.Client();
												//event
												clip.addEventListener('mousedown',function() {
													var couponcode = "BA60INT";	
													clip.setText(document.getElementById('couponcode').value);
												});
												
												});
												//glue it to the button
												clip.glue('showcouponbtn');
															
								        </script>		
									<p><span class="showcouponbtn"><a href="http://www.britishairways.com/travel/home/public/en_us">Redeem Coupon</a></span></p>
									<div class="single-deal-footer">
										<p class="single-deal-expiry"><strong>Expiry: </strong> June 21, 2015</p>
										<!-- <p class="single-deal-share"><strong>Share </strong></p> -->
										<p class="single-deal-comment"><strong><a href="#">Comment</a></strong></p>
									</div>
								</div>												
							</div>
							
							<div class="single-deal">
								<img class="storelogo" src="http://placehold.it/240x150">
								<div class="single-dealtext">
									<div class="dealtitle">$50 Off Domestic Flights</div>
									<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
									<p><span class="showcouponbtn">Redeem Coupon</span></p>
									<div class="single-deal-footer">
										<p class="single-deal-expiry"><strong>Expiry: </strong> June 21, 2015</p>
										<!-- <p class="single-deal-share"><strong>Share </strong></p> -->
										<p class="single-deal-comment"><strong><a href="#">Comment</a></strong></p>
									</div>
								</div>												
							</div>
							
							<div class="single-deal">
								<img class="storelogo" src="http://placehold.it/240x150">
								<div class="single-dealtext">
									<div class="dealtitle">10% Off Flights</div>
									<p><span class="dealdesc">Grab this deal and receive huge savings on your purchase.</span></p>
									<p><span class="showcouponbtn">Redeem Coupon</span></p>
									<div class="single-deal-footer">
										<p class="single-deal-expiry"><strong>Expiry: </strong> June 21, 2015</p>
										<!-- <p class="single-deal-share"><strong>Share </strong></p> -->
										<p class="single-deal-comment"><strong><a href="#">Comment</a></strong></p>
									</div>
								</div>												
							</div>
							
							
							<br>
						
						</div>

				
				</div>
			
		</div>
	</div>
	
	
	<!-- displays all featured testimonials on homepage 
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
-->
	

</div> <!-- end of wrapper -->

<?php
include '../footer.php';
?>

</div> <!-- end of container-outer -->
</body>
</html>
