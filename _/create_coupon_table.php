<?php

require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());
//$createdb=mysql_query("CREATE DATABASE users") or die(mysql_error());
mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());

$create_vendor_table = mysql_query('CREATE TABLE vendor( '.
'vendor_id mediumint(11) NOT NULL AUTO_INCREMENT, '.
'vendor_name VARCHAR(11) NOT NULL, '. 
'vendor_type VARCHAR(11) NOT NULL, '.
'PRIMARY KEY (vendor_id))ENGINE = MYISAM AUTO_INCREMENT =1');

$create_coupon_table = mysql_query('CREATE TABLE coupon( '.
'coupon_id mediumint(11) NOT NULL AUTO_INCREMENT, '.
'coupon_title VARCHAR(20) NOT NULL, '. 
'coupon_description VARCHAR(30) NOT NULL, '.
'coupon_code VARCHAR(11) NOT NULL, '. 
'coupon_link VARCHAR(30) NOT NULL, '. 
'coupon_expiry_date VARCHAR(11) NOT NULL, '. 
'vendor_id VARCHAR(11) NOT NULL, '. 
'PRIMARY KEY (coupon_id),
FOREIGN KEY (vendor_id) REFERENCES category(vendor_id))ENGINE = MYISAM AUTO_INCREMENT =1');

$create_submitted_coupon_table = mysql_query('CREATE TABLE submitted_coupons( '.
'submitted_coupon_id mediumint(11) NOT NULL AUTO_INCREMENT, '.
'submitted_coupon_title VARCHAR(20) NOT NULL, '. 
'submitted_coupon_description VARCHAR(30) NOT NULL, '.
'submitted_coupon_code VARCHAR(11) NOT NULL, '. 
'submitted_coupon_link VARCHAR(30) NOT NULL, '. 
'submitted_coupon_expiry_date VARCHAR(11) NOT NULL, '. 
'submitted_vendor_name VARCHAR(11) NOT NULL, '. 
'PRIMARY KEY (submitted_coupon_id))ENGINE = MYISAM AUTO_INCREMENT =1');



$create_coupon_comments_table = mysql_query('CREATE TABLE coupon_comments( '.
'comment_id mediumint(11) NOT NULL AUTO_INCREMENT, '.
'coupon_id VARCHAR(11) NOT NULL, '. 
'username VARCHAR(30) NOT NULL, '.
'comment_description VARCHAR(300) NOT NULL, '. 
'rating VARCHAR(11) NOT NULL, '.  
'PRIMARY KEY (comment_id),
FOREIGN KEY (coupon_id) REFERENCES coupon(coupon_id))ENGINE = MYISAM AUTO_INCREMENT =1');

if($create_category_table)
{
print "Table category successfully created";
}
if($create_coupon_table)
{
print "Table coupon successfully created";
}
if($create_coupon_comments_table)
{
print "Table coupon_Comments successfully created";
}
if($create_submitted_coupon_table)
{
print "Table submitted_coupon successfully created";
}
?>