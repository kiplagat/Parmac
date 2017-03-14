<?php
$db=mysql_connect("localhost","root","") or die("error in connection".mysql_error());
$db_select=mysql_select_db("myparmac") or die("error in selecting database".mysql_error());
?>