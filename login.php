<?php
include("includes/connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parmac fashion</title>

<script type="text/javascript">
<!--
function validate_form()
{ 
    valid = true; 
    if (( document.frmlogin.username.value == "2" )&&(document.frmlogin.password.value == "2"))
    {
        
		opener.parent.frames.location.href="stockin.php";
		self.close();		
        valid = false;
		    }
	else
	{
	   alert("wrong password,username or both");
	   self.reload();
	   valid=false;	   
	}	
    return valid;
}
</script> 
</head>
<body >
<form name="frmlogin" method="Post" onsubmit="validate_form()">
<table border=0 cellspacing=5 cellpadding=10 width=50% align="center" bgcolor="lightblue">
<tr>
</tr>
<tr>
<td>UserName:</td>
<td><input type="text" name="username" value=""  /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="Password" name="password" value=""></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;<input type="submit" value="login"></td>
</tr>
</table>
</form>
</body>
</html>
