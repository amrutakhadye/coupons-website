<?php
/*			Script by Jesin
			Visit http://jesin.tk/
*/
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
?>
<h3>Welcome <?php print $_SESSION['display_name']; ?></h3>
<ul>
<li><a href="change_name.php">Change Display Name</a></li>
<li><a href="change_pass.php">Change Password</a></li>
<li><a href="logout.php">Log out</a></li>
<li><a href="del_account.php">Delete Account</a></li>
</ul>
<?php
}
else
{
//Redirects the user to the login page if he is not logged in
header("Location: login.php");
}
?>