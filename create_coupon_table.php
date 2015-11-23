<?php

require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());
//$createdb=mysql_query("CREATE DATABASE users") or die(mysql_error());
mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());

$create_category_table = mysql_query('CREATE TABLE category( '.
'category_id VARCHAR(11) NOT NULL, '.
'category_name VARCHAR(11) NOT NULL, '. 
'category_type VARCHAR(11) NOT NULL, '.
'PRIMARY KEY (category_id))');

$create_coupon_table = mysql_query('CREATE TABLE coupon( '.
'coupon_id VARCHAR(11) NOT NULL AUTO_INCREMENT, '.
'coupon_title VARCHAR(20) NOT NULL, '. 
'coupon_description VARCHAR(30) NOT NULL, '.
'coupon_code VARCHAR(11) NOT NULL, '. 
'coupon_link VARCHAR(30) NOT NULL, '. 
'coupon_expiry_date VARCHAR(11) NOT NULL, '. 
'category_name VARCHAR(11) NOT NULL, '. 
'approval VARCHAR(13) NOT NULL, '. 
'PRIMARY KEY (coupon_id),
FOREIGN KEY (category_name) REFERENCES category(category_name))');

$create_coupon_comments_table = mysql_query('CREATE TABLE coupon_comments( '.
'comment_id VARCHAR(11) NOT NULL AUTO_INCREMENT, '.
'coupon_id VARCHAR(11) NOT NULL, '. 
'username VARCHAR(30) NOT NULL, '.
'comment_description VARCHAR(300) NOT NULL, '. 
'rating VARCHAR(11) NOT NULL, '.  
'PRIMARY KEY (comment_id),
FOREIGN KEY (coupon_id) REFERENCES coupon(coupon_id))');

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

?>