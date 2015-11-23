<?php
session_start();//Start a new session or continuous the session
require_once("db_info.php");//include the file containing database credentials
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());


mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());
//Checks if the user is logined in
if(isset($_SESSION['username']) && isset($_SESSION['password']))// to check if the user/employee logged in or not
{


	if (($_SESSION['username'] == 'khadyea') || ($_SESSION['username'] == 'alqahtanis4') || ($_SESSION['username'] == 'sarkara') || ($_SESSION['username'] == 'khopkarp'))
		{//looking for the 4 employees


	if (isset($_POST['vendor_name']) && isset($_POST['vendor_type']) && isset($_POST['vendor_logo']) )	//checks if all the fields are not empty
	{
	

	$vendor_name=stripslashes(trim($_POST['vendor_name']));//removes backslashes
	$vendor_type=stripslashes(trim($_POST['vendor_type']));//removes backslashes
	$vendor_logo=stripslashes(trim($_POST['vendor_logo']));//removes backslashes


	
	$add_vendor=mysql_query("INSERT INTO vendor(vendor_name,vendor_type,vendor_logo) VALUES('$vendor_name','$vendor_type','$vendor_logo')");//inserts into the vendor
	
		if ($add_vendor)
		{	//if data is inserted. Success message is displayed. 
			$info_success = "The vendor has added.";

			
		}
		else
		{
		// Displays a messsge if the message is already present in the system.
		$passfail = "This coupon already exist.";
		}
	
	
	
	}	//end if fields are not empty	

else
{

header("Location: my-count.php");//go to my-count.php page
}//end else if looking for the 4 employees
}//end if logged in or not

else
{

header("Location: login.php");// go to login oage
}//end else if logged in or not

	

?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">

<title>Add A Vender | DailyRetailCouponz</title>

</head>
<body>

<div class="container-outer">
<?php
include 'header.php';//to get the header
?>
	<div id="wrapper"> <!-- start of full-container -->
		<div class="container-inner">
			<div class="row">
					<?php 
						include 'sidebar-vendor-page.php';//to get the sidebar
					?>
				
				<div class="col-9">
				<div id="single-page-layout">
				<!-- menu for all the pages -->
				
					<div id="submit-a-coupon">
						<div class="single-page-title">
						<h1>Add A Vender</h1>
						<!--Displays the name of the Logined User-->
						<p><span><?php print $_SESSION['display_name']; //to display the employee's name ?></span></p>


						</div>
						
					</div>
					
                        <p class="form_success_info"><?php  echo  $passsuccess; ?></p>
						<p class="form_error_info"><?php  echo  $fillall; ?></p>
						<div id="change-password">	
				
						<form action="add-vendor.php" method="post">									
						<p><span class="customformtitle">Vendor Name: </span><input type="text" name="vendor_name" required/><br /></p>						
						<p><span class="customformtitle">Vendor Type: </span><input type="text" name="vendor_type" size="11"  required/><br/></p>						
						<p><span class="customformtitle">Vendor Logo: </span><input type="text" name="vendor_logo" size="11"  required><br /></p>		
						<p><input type="submit" value="Submit" /></p>
						</form>
						


						
				
							
						</div>
					</div>
				</div>
			</div>
		</div>

</div> <!-- end of wrapper -->

<?php
include 'footer.php';//to get the footer
?>

</div> <!-- end of container-outer -->
</body>
</html>

