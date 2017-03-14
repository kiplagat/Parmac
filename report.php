<?php include("includes/connection.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parmac Fashions</title>
<link rel="stylesheet" type="text/css" href="stylesheet/index.css"  />
</head>
<body>
<div id="main1">
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
    <div id="content1">
<fieldset id="table1"><legend>Available products</legend>
      <table width="400" border="1" >
        <tr>
          <?php
						           
                                    echo"<th>"."Item"."</th>"."<th>"."Number"."</th>"."<th>"."Description"."</th>"."<th>"."Delete"."</th>";
                                    $result=mysql_query("SELECT * FROM newstock");                                    
                                    while($row = mysql_fetch_array($result))
                                    { $ids=$row['id'];
                                        echo "<tr align='center'>";	
                                        echo"<td><font color='black' size='-1'>". $row['item']. "</font></td>";											
                                        echo"<td><font color='black'>". $row['number']."</font></td>";
										echo"<td><font color='black'>". $row['description']."</font></td>";
										echo"<td><a href ='delete1.php?id=$ids'><font color='black'>". "<img width='15px' height='15px' src='images/delete.jpeg' />"."</font></a></td>";
                                        echo "</tr>";
                                    }
									
                                ?>
        </tr>
      </table>
      </fieldset>
      <hr align="left" width="1" size="900" height="900" >
      </hr>
      <fieldset  id="table2"><legend>Sold Items</legend>
       <table width="400" border="1">
        <tr>
          <?php
						           
                                    echo"<th>"."Item"."</th>"."<th>"."Amount"."</th>"."<th>"."Description"."</th>"."<th>"."Delete"."</th>";
                                    $result=mysql_query("SELECT * FROM sellstock");                                    
                                    while($row = mysql_fetch_array($result))
                                    {   $id=$row['id'];
                                        echo "<tr align='center'>";	
                                        echo"<td><font color='black' size='-1'>". $row['item']. "</font></td>";											
                                        echo"<td><font color='black'>". $row['amount']."</font></td>";
										echo"<td><font color='black'>". $row['description']."</font></td>";
										echo"<td><a href ='delete.php?id=$id'><font color='black'>". "<img width='15px' height='15px' src='images/delete.jpeg' />"."</font></a></td>";
                                        echo "</tr>";
                                    }
									
                                ?>
        </tr>
      </table>
 </fieldset>
    </div>
    <div id="footer">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&copy; Parmac Fashions, 2015 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Designed by: Eric Kiplagat
    </div>
 </div>   
</body>
</html>
