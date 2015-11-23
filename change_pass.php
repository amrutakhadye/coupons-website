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
if (isset($_POST['cur_pass']) && isset($_POST['pass1']) && isset($_POST['pass2']))
{
//Checks if the submit button has been clicked

if (!empty($_POST['cur_pass']) && !empty($_POST['pass1']) && !empty($_POST['pass2']))
{
$current_pass=stripslashes(trim($_POST['cur_pass']));
$pass1=stripslashes(trim($_POST['pass1']));
$pass2=stripslashes(trim($_POST['pass2']));
if($pass1==$pass2)
{
//Checks if both passwords match

if($current_pass==$_SESSION['password'])
{
//Checks if current password is correct

mysql_connect($db_host,$db_username,$db_password,$db_name);
//mysql_select_db("grabxgvz_dev2couponz");
mysql_select_db($db_name);
mysql_query("UPDATE login SET password='$pass1' WHERE username='".$_SESSION['username']."'");
$_SESSION['password']=$pass1;
print "Password successfully changed";
}
else
{
print "The current password is incorrect";
}
}
else
{
print "Both the passwords do not match";
}
}
else
{
//Displays this if the text box is left empty

print "Please fill all the fields";
}
}
else
{
//Displays the HTML form if this page is viewed without POSTing anything

?>
<form action="change_pass.php" method="post">
Current Password: <input type="password" name="cur_pass" size="30" /><br />
New Password: <input type="password" name="pass1" size="30" /><br />
Retype New Password: <input type="password" name="pass2" size="30" /><br />
<input type="submit" value="Change Password" />
</form>
<?php
}
?>