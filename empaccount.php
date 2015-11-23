<?php
/*			Script by Jesin
			Visit http://jesin.tk/
*/
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	
	if (($_SESSION['username'] == 'khadyea') || ($_SESSION['username'] == 'alqahtanis4') || ($_SESSION['username'] == 'sarkara') || ($_SESSION['username'] == 'khopkarp'))
	{
		
		?>
			<h3>Welcome <?php print $_SESSION['display_name']; ?></h3>
			<ul>
			<li><a href="change_name.php">Change Display Name</a></li>
			<li><a href="change_pass.php">Change Password</a></li>
			<li><a href="logout.php">Log out</a></li>
			<li><a href="del_account.php">Delete Account</a></li>
			<li><a href="#">Role 2</a></li>
			<li><a href="#">Role 3</a></li>
			<li><a href="#">Role 4</a></li>
			</ul>
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
else
{
//Redirects the user to the login page if he is not logged in
header("Location: login.php");
}
?>