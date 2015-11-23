<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());
mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());
if (isset($_POST['searchterm'])){
	$searchterm=mysql_real_escape_string(trim($_POST['searchterm']));
	$find_coupons = mysql_query("SELECT * FROM coupon where coupon_description like '%$searchterm%' OR coupon_title like '%$searchterm%'");
	while($row = mysql_fetch_assoc($find_coupons)){
		$name = $row['coupon_title'];
		echo "$name<br/>";
	}
}
?>

</body>
</html>