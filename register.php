<?php
/*			Script by Jesin
			Visit http://jesin.tk/
*/
require_once("db_info.php");	//include the file containing database credentials

session_start();	//Start a new session or resume a session

if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
//Checks whether user is already logged in if so redirects the user to myaccount.php
//header("Location: myaccount.php");

	if (($_SESSION['username'] == 'khadyea') || ($_SESSION['username'] == 'alqahtanis4') || ($_SESSION['username'] == 'sarkara') || ($_SESSION['username'] == 'khopkarp'))
		{
			//if a customer (not employee), redirect him back to myaccount.php page
			?>
				<script type="text/javascript">
							window.location.href = '/empaccount.php';
				</script>
			<?php 
		}
	else {
			?>
				<script type="text/javascript">
							window.location.href = '/myaccount.php';
				</script>
			<?php 	
			
	}




}

if (isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['pass1']) && isset($_POST['pass2']))
{
//Checks whether the form is submitted

$fname=stripslashes(trim($_POST['fname']));
$uname=stripslashes(trim($_POST['uname']));
$pass1=stripslashes(trim($_POST['pass1']));
$pass2=stripslashes(trim($_POST['pass2']));
if(!empty($fname) && !empty($uname) && !empty($pass1) && !empty($pass2))
{
//Checks if all the text boxes are filled
if($pass1==$pass2)
{
//Adds the user into the database if both the passwords match
mysql_connect($db_host,$db_username,$db_password,$db_name);
//mysql_select_db("grabxgvz_dev2couponz");
mysql_select_db($db_name);
$add_user=mysql_query("INSERT INTO login VALUES ('$fname','$uname','$pass1')");

 //$add_user = mysql_query("INSERT INTO login '.
   //   '(full_name,username, password) '.
     // 'VALUES ( '$fname', '$uname' , '$pass1')");


if ($add_user)
{
print "You've sucessfully registered on our website";
}
else
{
//If the INSERT query encounters an error it because the username already exists
print "Username already exists";
}
}
else
{
//Displays if passwords don't match
print "passwords do not match";
}
}
else
{
//This message is shown if anyone or all fields are left empty
print "Please Fill All the details";
}
}
else
{
//Displays the HTML form if this page is viewed without POSTing anything
?>
<form action="register.php" method="post">
Your Name: <input type="text" name="fname" size="30" /><br />
Username: <input type="text" name="uname" size="11" /><br />
Password: <input type="password" name="pass1" size="30" /><br />
Retype Password: <input type="password" name="pass2" size="30" /><br />
<input type="submit" value="Register" />
</form>
<?php
}
?>