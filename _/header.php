<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	//this condition will check if the logged in user is a employee
	if (($_SESSION['username'] == 'khadyea') || ($_SESSION['username'] == 'alqahtanis4') || ($_SESSION['username'] == 'sarkara') || ($_SESSION['username'] == 'khopkarp'))
	{
		//EMPLOYEE SPECIFIC HEADER
		?>
		
		<header id="header">

		<!-- area for banner -->
			<div class="fullwidthbanner-container intro">
			<!-- code for banner goes here -->
				<div class="header-menu-item">
			
					<div class="container-inner">
						<div class="row">
							<div class="col-4">
								<div class="greeting-message">
									<span>Welcome, <?php print $_SESSION['display_name']; ?></span>
								</div>
							</div>
							
							<div class="col-8">
								<div class="nav-div">
									<nav id="navigation" class="menu">
										<ul id="responsive" class="navbar-menu">
											<li>
												<a href="#">Home</a>
											</li>
											
											<li>
												<a href="#">All Coupons</a>
											</li>
											
											<li>
												<a href="#">Submitted Coupons</a>
											</li>
											
											<li>
												<a href="http://dev2couponz.dailyretailcouponz.com/empaccount.php">My Account</a>
											</li>
											
											<li>
											<a href="http://dev2couponz.dailyretailcouponz.com/logout.php">Logout</a>
											</li>
										
										
											
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- end of div header-menu-item -->
			
				<div style="padding:20px 0px 20px 0px;" class="container-inner">
					<div class="row singlepageheader">
						<div class="col-12">
							<h1 style="text-align:center; font-size: 60px;">LOGO HERE</h1>
							<!-- <h2 style="text-align:center; color:#fff;"> Over 50 discount &amp; coupon codes available! </h2> -->
						</div>
					</div>
					
					<div class="row singlepageheader">
				<!-- HTML for SEARCH BAR -->
						<div id="searchbar" class="col-12">
							<form action="../search.php" method="POST">
									<input type="text" class="searchbarinput" name="searchterm" size="70" placeholder="&nbsp;Search for Best Travel Deals..." maxlength="120">
									<input type="submit" value="Search" class="searchbutton">
							</form>
						</div>
					</div>
					
				</div>
			</div>

			
		</header> <!-- end of header -->
		
		<?php 
	}
	else {
			?>
			<?php 
			// FOR CUSTOMERS/USERS
			//print $_SESSION['display_name']; ?>
			
		<header id="header">

		<!-- area for banner -->
			<div class="fullwidthbanner-container intro">
			<!-- code for banner goes here -->
				<div class="header-menu-item">
			
					<div class="container-inner">
						<div class="row">
							<div class="col-4">
								<div class="greeting-message">
									<span>Welcome, <?php print $_SESSION['display_name']; ?></span>
								</div>
							</div>
							
							<div class="col-8">
								<div class="nav-div">
									<nav id="navigation" class="menu">
										<ul id="responsive" class="navbar-menu">
											<li>
												<a href="/">Home</a>
											</li>
											
											<li>
												<a href="#">Wishlist</a>
											</li>
											
												
											<li>
												<a href="http://dev2couponz.dailyretailcouponz.com/myaccount.php">My Account</a>
											</li>
											
											<li>
												<a href="http://dev2couponz.dailyretailcouponz.com/logout.php">Logout</a>
											</li>
										
											
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- end of div header-menu-item -->
			
				<div style="padding:20px 0px 20px 0px;" class="container-inner">
					<div class="row singlepageheader">
						<div class="col-12">
							<h1 style="text-align:center; font-size: 60px;">LOGO HERE</h1>
							<!-- <h2 style="text-align:center; color:#fff;"> Over 50 discount &amp; coupon codes available! </h2> -->
						</div>
					</div>
					
					<div class="row singlepageheader">
				<!-- HTML for SEARCH BAR -->
						<div id="searchbar" class="col-12">
							<form action="../search.php" method="POST">
									<input type="text" class="searchbarinput" name="searchterm" size="70" placeholder="&nbsp;Search for Best Travel Deals..." maxlength="120">
									<input type="submit" value="Search" class="searchbutton">
							</form>
						</div>
					</div>
					
				</div>
			</div>

			
		</header> <!-- end of header -->	
			
			<?php
		}
}
else 
{
?>	
<header id="header">

		<!-- area for banner -->
	<div class="fullwidthbanner-container intro">
	<!-- code for banner goes here -->
		<div class="header-menu-item">
	
		<div class="container-inner">
			<div class="row">
				<div class="col-4">
					<div class="greeting-message">
						<span>Welcome, Guest!</span>
					</div>
				</div>
				
				<div class="col-8">
					<div class="nav-div">
						<nav id="navigation" class="menu">
							<ul id="responsive" class="navbar-menu">
								<li>
									<a href="#">Home</a>
								</li>
								
								<li>
									<a href="#">Blog</a>
								</li>
								
								<li>
									<a href="contactus.php">Contact Us</a>
								</li>
								
									
								<li>
								<a href="../login.php">Login</a>
								</li>
								
								<li>
									<a href="../register.php">Register</a>
								</li>
							
								
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end of div header-menu-item -->
	
		<div style="padding:20px 0px 20px 0px;" class="container-inner">
			<div class="row singlepageheader">
				<div class="col-12">
					<h1 style="text-align:center; font-size: 60px;">LOGO HERE</h1>
					<!-- <h2 style="text-align:center; color:#fff;"> Over 50 discount &amp; coupon codes available! </h2> -->
				</div>
			</div>
			
			<div class="row singlepageheader">
		<!-- HTML for SEARCH BAR -->
				<div id="searchbar" class="col-12">
					<form action="../search.php" method="POST">
							<input type="text" class="searchbarinput" name="searchterm" size="70" placeholder="&nbsp;Search for Best Travel Deals..." maxlength="120">
							<input type="submit" value="Search" class="searchbutton">
					</form>
				</div>
			</div>
			
		</div>
	</div>

	
</header> <!-- end of header -->
<?php } ?>