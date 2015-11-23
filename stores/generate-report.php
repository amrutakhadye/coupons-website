<?php
session_start();	//Start a new session or resume a session
require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password,$db_name);
mysql_select_db($db_name);

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<script src="../js/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
</head>

<body>

<div class="container-outer">
<?php
include 'header.php';
?>
<div id="wrapper"> <!-- start of full-container -->
	<!-- only for inner pages
	<section id="titlebar"> <!-- title goes here
		<div class="container">
		</div>
	</section> -->

	<!-- displays all featured deals on homepage -->
	<div id="deals-container" class="deals-container">
		<div class="container-inner"> 
			
				<div class="row">
						
						
						<!-- main content page -->
						<div class="col-17">
							<div class="single-page-title">

							<!-- we have to right a loop and fetch data from the database  -->
									
							<div class="single-deal">
							<form action="create-excel-report.php" method="POST">
							
							<input type="submit" name="generateReport" value="Generate Excel Report" class="searchbutton">
							<table border="1" width="100%">
								<th>Coupon Id</th>
								<th>Coupon Code</th>
								<th>Title</th>
								<th>Description</th>
								<th>Expiry Date</th>
								<th>Link</th>
								<th>Likes</th>
								<th>Dislikes</th>
								<th>Used Count</th>
							<?php
								$all_coupons = mysql_query("SELECT * FROM coupon ORDER BY coupon_id");
								while($row = mysql_fetch_assoc($all_coupons)){
									$vendor_id = $row['vendor_id'];
									$vendor =mysql_query("SELECT * FROM vendor WHERE vendor_id='$vendor_id'");
									$vendor_row = mysql_fetch_assoc($vendor);
									$vendor_logo = $vendor_row['vendor_logo'];
									$vendor_name = $vendor_row['vendor_name'];
								 ?>
									<tr>
									<td name="coupon_id"><?php echo $row['coupon_id']; ?></td>
									<td><?php echo $row['coupon_code']; ?></td>
									<td><?php echo $row['coupon_title']; ?></td>
									<td><?php echo $row['coupon_description']; ?></td>
									<td><?php echo $row['coupon_expiry_date']; ?></td>
									<td><?php echo $row['coupon_link']; ?></td>
									<td><?php echo $row['coupon_like']; ?></td>
									<td><?php echo $row['coupon_dislike']; ?></td>
									<td><?php echo $row['coupon_count']; ?></td>
									
						<?php }
						
						 ?>
							
							
							</table>
							</div>
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
