<?php
session_start();
require_once("../db_info.php");
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());
mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="../js/zeroclipboard/ZeroClipboard.js"></script>
<script src="../js/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
<!-- <script src="js/zeroclipboard/copycouponcode.js" type="text/javascript"></script> -->

<script type="text/javascript">
$(document).ready(function() {
	
  var clip = new ZeroClipboard($("#d_clip_button"));

  clip.on("ready", function() {
    debugstr("Flash movie loaded and ready.");

    this.on("aftercopy", function(event) {
      debugstr("Copied text to clipboard: " + event.data["text/plain"]);
    });
  });

  clip.on("error", function(event) {
    $(".demo-area").hide();
    debugstr('error[name="' + event.name + '"]: ' + event.message);
    ZeroClipboard.destroy();
  });


  // jquery stuff (optional)
  function debugstr(text) {
    $("#d_debug").append($("<p>").text(text));
  }

  $("#clear-test").on("click", function () {
    $("#fe_text").val("");
    $("#testarea").val("");
  });

});
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
 <!-- <script src='http://code.jquery.com/jquery-1.4.2.min.js'></script>  -->
 

<title>British Airways - Coupons</title>
</head>
<script>
function likeCliked(coupon_id,type){  
	$.post("rating.php",{couponId:coupon_id,type:type},function(data){
		console.log(data);
	});
	}
</script>
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
									<?php
											$all_coupons = mysql_query("SELECT * FROM coupon");
											while($row = mysql_fetch_assoc($all_coupons)){
												$vendor_id = $row['vendor_id'];
												$vendor =mysql_query("SELECT * FROM vendor WHERE vendor_id='$vendor_id'");
												$vendor_row = mysql_fetch_array($vendor);
												$vendor_logo = $vendor_row['vendor_logo'];
												 ?>
													<div class="single-deal">
													<img class="storelogo" src="<?php echo $vendor_logo; ?>" height="150px" width="240px">
													<div class="single-dealtext">									
													<div class="dealtitle"><?php echo $row['coupon_title']; ?></div>
													<p><span class="dealdesc"><?php echo $row['coupon_description']; ?></span></p>
													
													<!-- <p><span id="fe_text" class="showcouponbtn"><strong>Promo Code: </strong><?php // echo $row['coupon_code']; ?></span></p> -->
													
													<!--  code to click and copy promocode-->
													<span rows="3" cols="50" id="fe_text"><?php echo $row['coupon_code']; ?></span>
              <p class="align-right"><button data-clipboard-target="fe_text" title="Click me to copy to clipboard." class="my_clip_button" id="d_clip_button">Copy To Clipboard...</button></p>
													
													
													
													<div>
														<a href='javascript:;' onclick="likeCliked('<?php echo $row['coupon_id']; ?>','like');">Like(<span id="<?php echo $row['coupon_id'];?>_like"><?php echo $row['coupon_like']?></span>)</a>  
														<a href='javascript:;' onclick="ratingCliked('<?php echo $row['coupon_id']; ?>','dislike');">dislike(<span id="<?php echo $row['coupon_id'];?>_dislike"><?php echo $row['coupon_dislike']?></span>)</a>  

													</div>
													<div class="single-deal-footer">
														<p class="single-deal-expiry"><strong>Expiry: </strong><?php echo $row['coupon_expiry_date']; ?></p>
													</div>
													</div>												
													</div>
													<br>
										<?php } ?>
								
						
						</div>

				
				</div>
			
		</div>
	</div>
	
          
       
</div> <!-- end of wrapper -->

<?php
include '../footer.php';
?>

</div> <!-- end of container-outer -->
</body>
</html>
