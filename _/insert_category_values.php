<?php

require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password,$db_name) or die(mysql_error());
//$createdb=mysql_query("CREATE DATABASE users") or die(mysql_error());
//mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());

mysql_select_db($db_name) or die(mysql_query());

$insert_values1 = mysql_query('INSERT INTO category( '.
'category_name,category_type) '.
'VALUES( '.
'"British Airways", '.
'"Airways")');

$insert_values2 = mysql_query('INSERT INTO category( '.
'category_name,category_type) '.
'VALUES( '.
'"Southwest Airways", '.
'"Airways")');

$insert_values3 = mysql_query('INSERT INTO category( '.
'category_name,category_type) '.
'VALUES( '.
'"Amtrak", '.
'"Trains")');

$insert_values4 = mysql_query('INSERT INTO category( '.
'category_name,category_type) '.
'VALUES( '.
'"MTA", '.
'"Trains")');
if($insert_values1 && $insert_values2 && $insert_values3 && $insert_values4)
{
print "values inserted";

}
else  {
print "not inserted";
}
?>