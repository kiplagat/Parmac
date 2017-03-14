<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parmac Fashions</title>
<link rel="stylesheet" type="text/css" href="stylesheet/index.css"  />
<script type="text/javascript" src="javascript/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="javascript/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider1').s3Slider({
            timeOut: 3000 
        });
    });
</script>
<script  >
function openWin()
{
 window.open("login.php","Log-in","width=400, height=200");
 <?php
 
  ?>
}
</script>
</head>
<body>
<div id="main">
   <div id="header">
   <ul>
   <li><a href="index.php">Home</a></li>
   <li><a href="" onclick="openWin()" >NewStock</a></li>
    <li><a href="soldstock.php">SellStock</a></li>
     <li><a href="report.php">Report</a></li>
     <li><a href="gallary.php">Gallery</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
   </ul>
   </div>
    <div id="content">
    <div id="slider1">
        <ul id="slider1Content">
             <li class="slider1Image">
                <a href=""><img src="images/1.jpg" alt="1" /></a>
                <span class="left"><strong>DRESS</strong><br />New dress from dubai</span></li>
            <li class="slider1Image">
                <a href=""><img src="images/2.jpg" alt="2" /></a>
                <span class="right"><strong>TROUSER</strong><br />get it with liitle</span></li>
                <li class="slider1Image">
                <a href=""><img src="images/4.jpg" alt="2" /></a>
                <span class="right"><strong>TROUSER</strong><br />get it with liitle</span></li>
            <li class="slider1Image">
                <img src="images/3.jpg" alt="3" />
                <span class="right"><strong>SHOES</strong><br />it includes spanish shoes from spain</span></li>
            <div class="clear slider1Image"></div>
        </ul>
    </div>
    </div>
    
    <div id="footer">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&copy; Parmac Fashions, 2015 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Designed by: Eric Kiplagat
    </div>
 </div>   
</body>
</html>
