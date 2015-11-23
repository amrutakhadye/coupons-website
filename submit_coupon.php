<?php
/*			Script by Jesin
			Visit http://jesin.tk/
*/
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{

require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());

mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());
$category_type = mysql_query("SELECT category_type FROM category");


$category_name = mysql_query("SELECT category_name FROM category WHERE category_type='$coupon_category'");
if (isset($_POST['coupon_category']) && isset($_POST['coupon_title']) && isset($_POST['description']) && isset($_POST['coupon_link'])&& isset($_POST['expiry_date']))
{


$coupon_category=stripslashes(trim($_POST['coupon_category']));
$coupon_title=stripslashes(trim($_POST['coupon_title']));
$description=stripslashes(trim($_POST['description']));
$coupon_link=stripslashes(trim($_POST['coupon_link']));
$expiry_date=stripslashes(trim($_POST['expiry_date']));

$add_coupon=mysql_query("INSERT INTO coupon VALUES ('006','$coupon_title','$description','B56','$coupon_link','$expiry_date','$category_name','Under Review')");
echo $add_coupon;
if ($add_coupon)
{
print "Your Coupon is under Review. After the approval of the coupon it will be added to the website and you will receive a email on your registered Email Id ";

$to = "amrutakhadye@gmail.com"; // this is your Email address
    $from = "amrutakhadye939@gmail.com"; // this is the sender's Email address
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "HIIII";
    $message2 = "Here is a copy of your message ";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $sent= mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you . we will contact you shortly.";
if($sent) 
{print "Your mail was sent successfully"; }
else 
{
print "We encountered an error sending your mail"; 
}

}
else
{
print "This coupon already exist.";
}
}

?>
<h3>Welcome <?php print $_SESSION['display_name']; ?></h3>
<form action="submit_coupon.php" method="post">

Coupon Category Type:
<?php
echo "<select name='categoryType'>";
while ($row = mysql_fetch_array($category_type)) {
    echo "<option value='" . $row['category_type'] ."'>" . $row['category_type'] ."</option>";
	}
echo "</select>"; ?>
Coupon Category:<input name="coupon_category" type="text"/><br /><br />
Coupon Title: <input type="text" name="coupon_title" size="11" /><br /><br />
Coupon Description: <input type="text" name="description" size="11" /><br /><br />
Coupon Link: <input type="text" name="coupon_link" size="30" /><br /><br />
Coupon Expiry Date: <input type="text" name="expiry_date" size="11" /><br /><br />
<input type="submit" value="Submit" />
</form>
<?php	
}
else
{
//Redirects the user to the login page if he is not logged in
header("Location: login.php");
}
?>