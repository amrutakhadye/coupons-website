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
?>
<html>
<head>
	<title>Login Page - DailyRetailCouponz</title>
</head>
<body>
<?php
	if (isset($_POST['uname']) && isset($_POST['pass']))
	{
//Checks if the submit button has been clicked

		if (!empty($_POST['uname']) && !empty($_POST['pass']))
		{
			$uname=stripslashes(trim($_POST['uname']));
			$pass=stripslashes(trim($_POST['pass']));
			mysql_connect($db_host,$db_username,$db_password,$db_name);
			//mysql_select_db("grabxgvz_dev2couponz");
			mysql_select_db($db_name);
			$check=mysql_query("SELECT * FROM login WHERE username='$uname' AND password='$pass'");

			if(mysql_num_rows($check)!=0)
			{
				$details=mysql_fetch_array($check);

			//Creates session variables if the username and password match
			$_SESSION['display_name']=$details[0];
			$_SESSION['username']=$details[1];
			$_SESSION['password']=$details[2];
			
				//for all Employee's
				if (($details[1] == 'khadyea') || ($details[1] == 'alqahtanis4') || ($details[1] == 'sarkara') || ($details[1] == 'khopkarp'))
				{
					?>
					<script type="text/javascript">
						window.location.href = '/empaccount.php';
					</script>
					<?php 
				}
				//for all other customers redirects to myaccount.php
				else
				{
					?>
					<script type="text/javascript">
						window.location.href = '/myaccount.php';
					</script>
					<?php 
				}
			}
			else
			{
			//Displays error if the credentials don't match
			print "Invalid Username/Password";
			}
		}
		else
		{
		//Displays this if the one or more text boxes are left empty
		print "All fields must be filled";
		}
	}
	else
	{
		//Displays the HTML form if this page is viewed without POSTing anything
		?>
<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
</style>
		<!-- login form -->
		<div id="login">
			<h1><strong>Welcome.</strong> Please login.</h1>
			<form action="login.php" method="post">
				<fieldset>
					<p>Username: <input type="text" name="uname" size="11" /><br /></p>
					<p>Password: <input type="password" name="pass" size="30" /><br /></p>
					<p><a href="#">Forgot Password?</a></p>
					<p><input type="submit" value="Login"></p>
				</fieldset>
			</form>
			<!-- <p><span class="btn-round">or</span></p> -->
			
		</div> <!-- end of div id login -->
<?php }
?>
</body>
</html>