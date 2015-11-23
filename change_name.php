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
if(isset($_POST['new_name']))
{
//Checks if the submit button has been clicked

if(!empty($_POST['new_name']))
{
//Chnages the Display name
$old_name=$_SESSION['display_name'];
$new_name=stripslashes(trim($_POST['new_name']));
$uname=$_SESSION['username'];
mysql_connect($db_host,$db_username,$db_password,$db_name);
//mysql_select_db("grabxgvz_dev2couponz");
mysql_select_db($db_name);
mysql_query("UPDATE login SET full_name='$new_name' WHERE username='$uname'");
$_SESSION['display_name']=$new_name;
print "Your Account name has been changed from $old_name to $new_name";
}
else
{
//Displays this if the text box is left empty

print "Field cannot be blank";
}
}
else
{
//Displays the HTML form if this page is viewed without POSTing anything

?>
<form action="change_name.php" method="post">
Current Display Name is <b><?php print $_SESSION['display_name']; ?></b><br />
Enter a new display name: <input type="text" name="new_name" size="30" /><br />
<input type="submit" value="change" />
</form>
<?php
}
?>
<a href="myaccount.php">Go Back</a>