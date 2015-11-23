<?php
session_start();	//Start a new session or resume a session
require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password,$db_name);
mysql_select_db($db_name);
?>
<div class="sidebar-vendor-page">
	<aside>
		<div class="sidebar-content">
		<h3>What Is DailyRetailCouponz?</h3>
		<p>DailyRetailCouponz is a real-time savings engine, aimed to help consumers find discount savings in the form of coupon codes. We track the latest coupon codes mentioned on Twitter and organize them. These discount codes are organized by popularity based on how many times they've been tweeted or retweeted, plus voting and feedback from our own editors and community. </p>
		<p>DailyRetailCouponz is a real-time savings engine, aimed to help consumers find discount savings in the form of coupon codes.</p>
		</div>
		 <?php
		
					//based on the vendor id, the coupons are fetched.
                    $all_coupons_active = mysql_query("SELECT COUNT(coupon_id) as coupon_count FROM coupon where DATE(coupon_expiry_date) >= CURDATE()");
					$row_acount=mysql_fetch_assoc($all_coupons_active);
					$active_count = $row_acount['coupon_count'];
					
					 $all_coupons_inactive = mysql_query("SELECT COUNT(coupon_id) as coupon_count FROM coupon where DATE(coupon_expiry_date) < CURDATE()");
					$row_incount=mysql_fetch_assoc($all_coupons_inactive);
					$inactive_count = $row_incount['coupon_count'];
				
				?>
				<br>
				<p><h2><span class="active-inactive">Active Coupon(s) Found: <?php echo $active_count;?></span></h2></p>
				<br>
				<p><h2><span class="active-inactive">Inactive Coupon(s) Found: <?php echo $inactive_count;?></span></h2></p>
				
				
				
				<br>
				<p><h2><span class="active-inactive">We have <?php echo  mysql_result(mysql_query("SELECT COUNT(`coupon_code`) FROM `coupon`"),0);?> coupons.</span></h2></p>
				<p><h2><span class="active-inactive">We have <?php echo mysql_result(mysql_query("SELECT COUNT(`username`) FROM `login`"),0);?> registered users.</span></h2></p>
				<p><h2><span class="active-inactive">We have <?php //echo mysql_result(mysql_query("SELECT COUNT(`username`) FROM `login` >= DATE_SUB(NOW(), INTERVAL 10 MINUTE);?> logged in.</span></h2></p>
		<div class="sidebar-content">
		<p>Some Text...</p>
		</div>
		
		<div class="sidebar-content">
		<p>Some Text...</p>
		</div>
	</aside>
</div>