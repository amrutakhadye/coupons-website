<?php

require_once("db_info.php");
mysql_connect($db_host,$db_username,$db_password,$db_name) or die(mysql_error());
//$createdb=mysql_query("CREATE DATABASE users") or die(mysql_error());
//mysql_select_db('grabxgvz_dev2couponz') or die(mysql_query());

mysql_select_db($db_name) or die(mysql_query());

$insert_values = mysql_query('INSERT INTO category( '.
'category_name,category_type) '.
'VALUES( '.
'"British Airways", '.
'"Airways")');

if($insert_values)
{
print "values inserted";

}
else  {
print "not inserted";
}
?>