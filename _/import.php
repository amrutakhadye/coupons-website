<?php
//include ("db_info.php");
 require_once("db_info.php");
//$conn = mysql_connect($db_host,$db_username,$db_password,$db_name);
mysql_connect($db_host,$db_username,$db_password,$db_name);
	//mysql_select_db("grabxgvz_dev2couponz");
//mysql_select_db($db_name, $conn);
mysql_select_db($db_name);

//require_once("db_info.php");
if(isset($_POST["import"])){

	echo $filename=$_FILES["file"]["tmp_name"];
 
 
		 if($_FILES["file"]["size"] > 0)
		 {
 
		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
 
	          //It wiil insert a row to our subject table from our csv file`
	           $sql = "INSERT into wishist 
	            	values('$emapData[0]','$emapData[1]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysql_query( $sql);
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						</script>";
 
				}
 
	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";
 
 
 
			 //close of connection
			//mysql_close($conn); 
			echo "connection close";
 
 
		 }
	}	
else
{ echo "file size is greater";}	
?>	