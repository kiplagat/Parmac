<?php
include("includes/connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parmac Fashions</title>
<link rel="stylesheet" type="text/css" href="stylesheet/index.css"  />
</head>
<body>
<div id="main">
   <div id="header">
   <ul>
   <li><a href="index.php">Home</a></li>
   <li><a href="stockin.php">NewStock</a></li>
    <li><a href="soldstock.php">SellStock</a></li>
     <li><a href="report.php">Report</a></li>
     <li><a href="gallary.php">Gallery</a></li>
     <li><a href="contactus.php">Contact Us</a></li>
   </ul>
    </div>
    <div id="content">
    <form action="stockininc.php" method="POST">
    <fieldset><legend>record stock</legend>
    Item: <select name="item">
    <option>Dress</option>
    <option>Shoes</option>
    <option>trouser</option>
    </select>&nbsp; &nbsp; &nbsp; &nbsp;
    Number of Items: <input name="number" type="text" value="">&nbsp; &nbsp; &nbsp; &nbsp;
    Description: <textarea name="description"> </textarea><br/><br/>
     <input name="submit" type="submit" value="Submit">
    </fieldset>
    </form>
    </div>
    <div id="footer">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&copy; Parmac Fashions, 2015 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Designed by: Eric Kiplagat
    </div>
 </div>   
</body>
</html>
