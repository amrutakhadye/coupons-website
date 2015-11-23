<?php
/*
require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());
mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());

	if (isset($_POST['submit']))
	{
	echo "till submit";
	$email_news=stripslashes(trim($_POST['newsletter']));
	$add_email=mysql_query("INSERT INTO newsletter(email) VALUES('$email_news')");
	
		if ($add_email)
		{	
			echo "email added";
			echo "You are now subscribed to Daily Retail Couponz.";
			$to = $email_news; //fetching email
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
*/
?> 



<div id="footer">

<!-- displays all featured categories on homepage -->
	<div id="footer-menu" class="footer-menu">
		<div class="container-inner"> 
				<div class="row">
				<!--newsletter -->
				<br/>
				<!--	<form action="newsletter.php" method="post">
					
						<p><span class="customformtitle">Subscribe to our Newsletter: </span><input name="newsletter" type="email"/><br /></p>
						<p><input type="submit" value="submit" name="submit" /></p>
						</form>  -->
						
						<div class="container-inner">
							<div class="row">
								<div class="col-4">
								<ul>Options
									<li><a href="http://dev2couponz.dailyretailcouponz.com/stores/">All Stores</a></li>
									<li><a href="http://dev2couponz.dailyretailcouponz.com/testimonial.php">Testimonials</a></li>
									<li><a href="http://dev2couponz.dailyretailcouponz.com/contact-us.php">Contact US</a></li>
								</ul>
								</div>
								
								<div class="col-4">
								<ul>Logged In Options
									<li><a href="http://dev2couponz.dailyretailcouponz.com/submit-a-coupon.php">Submit A Coupon</a></li>
									<li><a href="http://dev2couponz.dailyretailcouponz.com/write-a-testimonial.php">Write a Testimonials</a></li>
									<li><a href="http://dev2couponz.dailyretailcouponz.com/contact-us.php">Contact US</a></li>
								</ul>
								</div>
								
								<div class="col-4">
								<ul>Vendors
									<li><a href="http://dev2couponz.dailyretailcouponz.com/stores/vendor.php?vendor=1">British Airways</a></li>
									<li><a href="http://dev2couponz.dailyretailcouponz.com/stores/vendor.php?vendor=6">MTA</a></li>
									<li><a href="http://dev2couponz.dailyretailcouponz.com/stores/vendor.php?vendor=8">Contact Greyhound</a></li>
								</ul>
								</div>
								
								
							</div>
						</div>
						
						
						
					<div class="col-12">
						<div class="socialmedia">

						  <p>Share Your Love & Get Social. Follow Us Now!</p>
						  <div id="footer-social-buttons">
							  <hr class="line">
							  <!-- Facebook -->
							  <a href="http://www.facebook.com/" target="_blank"><img src="/images/social/facebook.png" alt="Facebook" /></a>
								
							  <!-- Twitter -->
							  <a href="http://twitter.com/" target="_blank"><img src="/images/social/twitter.png" alt="Twitter" /></a>
							  
							  <!-- LOGO -->
							  <!--<a href="/"><img src="http://placehold.it/240x150" alt="Logo" /></a> -->
								
							  <!-- Google+ -->
							  <a href="https://plus.google.com/" target="_blank"><img src="/images/social/google.png" alt="Google" /></a>
								
							  <!-- LinkedIn -->
							  <a href="http://www.linkedin.com/" target="_blank"><img src="/images/social/linkedin.png" alt="LinkedIn" /></a>
							
							
						</div>
					</div>
					
				</div>
			<!--	<div class="row">
				<!-- footer part 1 
					<div class="col-3">
						<div style="line-height:22px;" class="footer-company">
							<h3>Company</h3>
							<ul clas=="footer-company-links">
							  <li><a href="">About Us</a></li>
							  <li><a href="">Contact Us</a></li>
							  <li><a href="">FAQ's</a></li>
							</ul>
						</div>
					</div>
				
				<!-- footer part 4
					<div class="col-3">
					  <div style="line-height:22px; padding:10px 10px;" class="footer-social-media">
						<p><span>Find Us On</span></p>
						Facebook | Twitter | Google
					  </div>
					  <div class="footer-newsletter" style="line-height:22px; padding:10px 10px;">
						<p><span>SIGN UP FOR SPECIAL PROMOTIONS</span></p>
								<input type="text" maxlength="120" placeholder="E-Mail Address" size="25" name="q" class="subscribe">
								<input type="button" class="subscribe-btn" value="Sign Up">
									
					  </div>
					</div>
				</div>
				</div> -->
				
		
		</div>
	</div>
	
</div> <!-- end of div footer -->

<div id="footer-bottom">
	
</div> <!-- end of div footer-bottom -->