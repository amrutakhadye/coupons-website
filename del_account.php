<?php
/*			Script by Jesin
			Visit http://jesin.tk/
*/
require_once("db_info.php");	//include the file containing database credentials

session_start();	//Start a new session or resume a session

if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{
//If user isn't logged in redirects to the login page

header("Location: login.php");
}
if(isset($_POST['confirm']))
{
//Checks if Yes or No has been clicked
if($_POST['confirm']=='Yes')
{
//Deletes rthe user if yes is clicked

mysql_connect($db_host,$db_username,$db_password,$db_name);
//mysql_select_db("grabxgvz_dev2couponz");
mysql_select_db($db_name);
mysql_query("delete from login where username='".$_SESSION['username']."'");
print "Your account has been deleted";
session_destroy();
}
else
{
//Redirects the user to myaccount.php if no is clicked

header("Location: myaccount.php");
}
}
else
{
//Displays the HTML form if this page is viewed without POSTing anything

?>
<form method="post" action="del_account.php">
<h4>Are you sure you want to delete your account ?</h4>
<input type="submit" value="Yes" name="confirm" />
<input type="submit" value="No" name="confirm" />
</form>
<?php
}
?>