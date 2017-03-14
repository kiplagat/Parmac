<?php
 include("includes/connection.php");
	
	$ids =$_REQUEST['id'];
		// sending query
	mysql_query("DELETE FROM newstock WHERE id = '$ids'")
	or die(mysql_error());  	
	
	header("Location: report.php");
?>