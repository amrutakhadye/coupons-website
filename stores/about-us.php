<?php
session_start();/*to start a new session  */
?>
<!DOCTYPE html>
<html>
<head>
<style>
<!--to set the two dives next to each other and style them  -->
#wrap{
width: 100%;
height: 100%;
background-color: # FFF;

}
#div1{
width: 50%;
height: 100%;
background-color: # FFF;
float: left;

}
#dive2{
width:50%;
height: 100%;
background-color: # FFF;
float: right;

}
.single-deal .single-deal p .note {
	color: #000;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">

<title> | DailyRetailCouponz</title>

</head>
<body>

<div class="container-outer"><!--to set the two dives next to each other and style them  -->
<?php
include 'header.php';/*to call the header page  */
?>
	<div id="wrapper"> <!-- start of full-container -->
		<div class="container-inner">
			<div class="row">
				<?php 
					
						include 'sidebar-vendor-page.php';/*to call the sidebar page  */
					?>
				
<div class="col-9">
				<div id="single-page-layout">
				<!-- menu for all the pages -->
				
					<div id="myaccountdetails">
						<div class="single-page-title">
						
						<h1 align="center">About Us </h1>
						</div>
						
					</div>
					
					<div class="myaccount-tabs">
						<ul id="myaccount-tabs-menu" class="myaccount-tabs-menu">
<li>
								
					
					<p class="form_success_info"></p>
                    
                    
                    
  <div class="single-deal">
    <p><span class="note">We are a group of four student. Publishing this website for two reasons:
     <br> First: as final project for our computer since master degree. 
      <br>Second: to provide all the customers and users with various types of transportation coupons for international as well as domestic transportation. Coupon Bonanza is affiliated with various transportation companys which in turn provide coupons for their transportation companys. </span></p></div>
        
        
        
         <div class="single-deal">
        <div id="wrap">
    <div id="div1">
    <img src="/images/social/image2.JPG" alt="Anik" width="100" height="100" align="top" />
      <p>Name: Aniket Sarkar
      <br>Email: sarkara@sacredheart.edu   
 <br>Education: Sacred Heart University </p>
    </div>
    <div id="div2">
     <img src="/images/social/image1.JPG" alt="saeed" width="100" height="100" align="top" />
    <p>Name: Saeed Alqahtani	 
    <br>Email: alqahtanis4@sacredheart.edu
 <br>Education:	Sacred heart university</p>
    </div>

</div> </div> <!--End wrap div-->

 <div class="single-deal">
<div class="wrap" >
    <div id="div1">
    <img src="/images/social/image4.JPG" alt="praj" width="100" height="100" align="top" />
    <p>Name: Prajacta Khopkar	
    <br>
   Email: khopkarp@sacredheart.edu 
 <br>Education: Sacred Heart University
    </p>
    </div>
    <div id="div2">
    <img src="/images/social/image3.JPG" alt="amr" width="100" height="100" align="top" />
    <p>Name: Amruta Khadye
    <br>Email: khadyea@sacredheart.edu 
 <br>Education: Sacred Heart University</p>
    
    </div>

</div> </div><!--End wrap div-->  
                     
         
  <p class="form_error_info">&nbsp;</p>
<!-- end of wrapper -->

<?php
include 'footer.php';/*to call the footer page  */
?>

</div> <!-- end of container-outer -->
</body>
</html>
