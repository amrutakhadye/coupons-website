<?php
session_start();/* starting a new session */
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">

<title> | DailyRetailCouponz</title>

</head>
<body>

<div class="container-outer">
<?php
include 'header.php';/* get the header */
?>
	<div id="wrapper"> <!-- start of full-container -->
		<div class="container-inner">
			<div class="row">
					<?php 
					
						include 'sidebar-vendor-page.php';/* get the sidebar */
					?>
				
<div class="col-9">
				<div id="single-page-layout">
				<!-- menu for all the pages -->
				
					<div id="myaccountdetails">
						<div class="single-page-title">
						
						<h1 align="center"> How to use our coupons </h1>
						</div>
						
					</div>
					
					<div class="myaccount-tabs">
						<ul id="myaccount-tabs-menu" class="myaccount-tabs-menu">
<li>
								
					
					<p class="form_success_info"></p>
                    
                    
                    
  <div class="single-deal">
                 <div class="single-deal">  <img src="/images/guide/first.png" alt="1" width="300" height="300" align="top" /></div>
                  <p>&nbsp;</p>
                 
                   <div class="single-deal"> <img src="/images/guide/fr1.png" alt="1" width="700" height="500" align="middle" /></div>
                <div class="single-deal">
                <p><span class="note">After determine the coupon that you want to use, click on the promo code as it is shown in the picture above.</span></p> 
    </div></div>
                 
                 
                 
                 
                 <div class="single-deal">
                 
                  <div class="single-deal"> <img src="/images/guide/second.png" alt="2" width="300" height="300" align="top"/></div>
                 <div class="single-deal"> <img src="/images/guide/sn2.png" alt="2" width="700" height="500" align="middle" /></div>
                   <div class="single-deal">
                   <p><span class="note">Copy the code that pop-up on the screen as it is shown above.</span></p>
                 </div> </div>
                 
                  <div class="single-deal">
                 
                  <div class="single-deal"> <img src="/images/guide/third.png" alt="3" width="300" height="300" align="top" /></div>
                 
                 <div class="single-deal"> <img src="/images/guide/th3.png" alt="3" width="700" height="500" align="middle" /></div>
                   <div class="single-deal">
                    <p><span class="note">Click on the "go to store" to take you to the vendor website.</span> </p>
                   </div> </div>
                   
                    <div class="single-deal">
                    <div class="single-deal">
                    <img src="/images/guide/fourth.png" alt="4" width="300" height="300" align="top" />  </div>             
                       <div class="single-deal">   <img src="/images/guide/fo4.png" alt="4" width="700" height="500" align="middle" /> </div>
                    <p>
                    <div class="single-deal">
                     <p><span class="note">Paste the copied  coupon on the textbox as it is shown above. Some other websits do not show you the promo textbox until you get to the payment step.</span> </p>
                     </div>
  </div>
                     
         
  <p class="form_error_info">&nbsp;</p>
<!-- end of wrapper -->

<?php
include 'footer.php';/* get the footer */
?>

</div> <!-- end of container-outer -->
</body>
</html>
