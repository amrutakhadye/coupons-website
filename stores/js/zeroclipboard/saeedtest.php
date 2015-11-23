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

<script>
function ratingCliked(coupon_id,type){  
	$.post("../stores/rating.php",{couponId:coupon_id,type:type},function(data){
		$('#'+coupon_id+'_'+type).text(data);
		document.getElementById('button_'+coupon_id+'_like').disabled = true; 
		document.getElementById('button_'+coupon_id+'_dislike').disabled = true; 
	});
}

function loginRequest(){
	alert("Please login in to vote");
}
</script>
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
						<!-- call sidebar specific to single vendor page -->
						<?php 
						include 'sidebar-vendor-page.php'
						?>
						
						<!-- main content page -->
						<div class="col-9">
							<div class="single-page-title">
							
							<!-- we have to right a loop and fetch data from the database  -->
									<?php
											if (isset($_POST['searchterm'])){
												$searchterm=mysql_real_escape_string(trim($_POST['searchterm']));
												$find_coupons = mysql_query("SELECT * FROM coupon where coupon_description like '%$searchterm%' OR coupon_title like '%$searchterm%'");
												$find_comment = mysql_query("SELECT * FROM comment_comment where comment like '%$searchterm%' ");
												
												while($row = mysql_fetch_assoc($find_coupons)){
													$vendor_id = $row['vendor_id'];
													$vendor =mysql_query("SELECT * FROM vendor WHERE vendor_id='$vendor_id'");
													$vendor_row = mysql_fetch_assoc($vendor);
													$vendor_logo = $vendor_row['vendor_logo'];
													$vendor_name = $vendor_row['vendor_name'];
													$vendor_link = $vendor_row['vendor_logo'];
													
												 ?>
												 
													
													<div class="single-deal">
													<img class="storelogo" src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
													<div class="single-dealtext">									
													<div class="dealtitle"><?php echo $row['coupon_title']; ?></div>
													<p><span class="dealdesc"><?php echo $row['coupon_description']; ?></span></p>
													
													<p><span class="showcouponbtn"><strong>Promo Code: </strong><?php echo $row['coupon_code']; ?></span></p>
													<?php 
														$username = $_SESSION['username'];
														if (!empty($username)){ ?>
													<div>
														<button class="like" onclick="ratingCliked('<?php echo $row['coupon_id']; ?>','like');" id="button_<?php echo $row['coupon_id'];?>_like" >
														Like(<span id="<?php echo $row['coupon_id'];?>_like"><?php echo $row['coupon_like']?></span>)
														</button>  
														<button class="dislike" onclick="ratingCliked('<?php echo $row['coupon_id']; ?>','dislike');" id="button_<?php echo $row['coupon_id'];?>_dislike">
														dislike(<span id="<?php echo $row['coupon_id'];?>_dislike"><?php echo $row['coupon_dislike']?></span>)</button>  

														</div>
													<?php }else { ?>
													
													<div>
														<button class="like" onclick="loginRequest();">Like(<span><?php echo $row['coupon_like']?></span>)</button>  
														<button class="dislike" onclick="loginRequest();">dislike(<span><?php echo $row['coupon_dislike']?></span>)</button>  
														</div>
													<?php } ?>
													<div class="single-deal-footer">
														<p class="single-deal-expiry"><strong>Expiry: </strong><?php echo $row['coupon_expiry_date']; ?></p>
														
														<br>
														<p class="single-deal-expiry"><strong>Comment: </strong></span></p>
														<br>
													<div class="dealtitle"><?php echo $row['comment']; ?></div>
													</div>
													</div>												
													</div>
										<?php }
										}
										 ?>
								
						
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
