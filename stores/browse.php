<?php 
//include ("db_info.php");
require_once("db_info.php");
//$conn = mysql_connect($db_host,$db_username,$db_password,$db_name);
mysql_connect($db_host,$db_username,$db_password,$db_name);
	//mysql_select_db("grabxgvz_dev2couponz");
//mysql_select_db($db_name, $conn);
mysql_select_db($db_name);
 
?>	
<html lang="en">
	
	<body>    

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
 
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
 
		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>cid</th>
				  		<th>uid</th>
				  		
 
 
				  	</tr>	
				  </thead>
			<?php
			
			
				$SQLSELECT = "SELECT * FROM wishist ";
				//$result_set =  mysql_query($SQLSELECT,$conn);
				$result =  mysql_query($SQLSELECT);
				//$count = mysql_num_rows($result);
				if($result === FALSE) { 
					die(mysql_error()); // TODO: better error handling
				}


				while($row = mysql_fetch_array($result))
				{
				?>
 
					<tr>
						<td><?php echo $row['cid']; ?></td>
						<td><?php echo $row['uid']; ?></td>
						
 
					</tr>
				<?php
				}
			?>
		</table>
	</div>
 
	</div>
 
	</body>
</html>