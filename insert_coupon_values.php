<?php

require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password,$db_name) or die(mysql_error());
//$createdb=mysql_query("CREATE DATABASE users") or die(mysql_error());
//mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());

mysql_select_db($db_name) or die(mysql_query());

$insert_values = mysql_query('INSERT INTO coupon( '.
'coupon_title,coupon_description,coupon_code,coupon_link,coupon_expiry_date,category_id,approval) '.
'VALUES( '.
'"20% OFF on British Airways domestic flights", '.
'"On purchase of any Bristish Airways domestic flights avail an off of 20% by using this coupon", '.
'"20DOMBA", '.
'"www.google.com", '.
'"12/31/2015", '.
'"British Airways",'.
'"Approved")');


if($insert_values)
{
print "values inserted";

}
else  {
print "not inserted";
}
?>