<?php
 include("includes/connection.php");
	
	$id =$_REQUEST['id'];
		// sending query
	mysql_query("DELETE FROM sellstock WHERE id = '$id'")
	or die(mysql_error());  	
	
	header("Location: report.php");
?>