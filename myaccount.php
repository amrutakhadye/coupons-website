<?php
/*			Script by Jesin
			Visit http://jesin.tk/
*/
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	//this condition will check if the logged in user is a employee
	if (($_SESSION['username'] == 'khadyea') || ($_SESSION['username'] == 'alqahtanis4') || ($_SESSION['username'] == 'sarkara') || ($_SESSION['username'] == 'khopkarp'))
	{
		//if a employee, he/she will be redirected to empaccount.php
		?>
			<script type="text/javascript">
						window.location.href = '/empaccount.php';
			</script>
		<?php 
	}
	else {
			?>
			<h3>Welcome <?php print $_SESSION['display_name']; ?></h3>
			<ul>
			<li><a href="change_name.php">Change Display Name</a></li>
			<li><a href="change_pass.php">Change Password</a></li>
			<li><a href="logout.php">Log out</a></li>
			<li><a href="del_account.php">Delete Account</a></li>
			<li><a href="submit_coupon.php">Submit Coupon</a></li>
			</ul>
			<?php
		}
}
else
{
//Redirects the user to the login page if he is not logged in
header("Location: login.php");
}
?>