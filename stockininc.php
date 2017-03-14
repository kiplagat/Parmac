<?php
include("includes/connection.php");
$item=$_POST["item"];
$number=$_POST["number"];
$desc=$_POST["description"];
$query="insert into newstock(item,number,description) values('$item',$number,'$desc')";
$result=mysql_query($query);

$qry="select * from newstock";
$rel=mysql_query($qry);
$row=mysql_fetch_array($rel);
$id=$row['id'];
$oldnumber=$row['number'];
$newnumber=(($oldnumber)+($number));

$query3="update newstock set number=$newnumber,description='$desc' where id=$id and item='$item'";
$rel3=mysql_query($query3);
?>