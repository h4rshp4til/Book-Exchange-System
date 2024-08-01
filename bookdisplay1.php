<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Newsprint
Version    : 1.0
Released   : 20070824
Description: A two-column, fixed-width design for blogs and small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Newsprint by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div id="header">
	<h1><em><strong>Book Exchanger</strong></em></h1>
  <p></p>
</div>
<!-- end header -->
<!-- star menu -->
<div id="menu">
	<ul>
		<li class="first"></li>
        <li><a href="user.php">User</a></li>
		<li><a href="upload.php">Upload</a></li>
		<li><a href="bookdisplay1.php">Interest</a></li>
        <li><a href="dealinterest.php">Confirm</a></li>
		<li><a href="aboutus.html">About</a></li>
		<li><a href="contactus.html">Contact</a></li>
		<li><a href="bookdisplay.php">Logout</a></li>

	</ul>
</div>
<!-- end menu -->

<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select * from upload where status='Available' and userid<>'$_SESSION[userid]' and uploadno not in (select uploadno from interest where userid='$_SESSION[userid]')";
$result=mysql_query($sql,$cn);
echo "<table>";
$i=0;
echo "<tr>";
while($row=mysql_fetch_array($result))
{
echo "<td><a href=largedisplay1.php?upl=$row[0]><img src=$row[11] height=250 width=150><br>title:$row[2]<br>original_price:$row[9]<br>selling_price:$row[10]</a></td>";
$i=$i+1;
if($i==6)
{
$i=0;
echo "</tr>";
echo "<tr>";
}
}
echo "</tr></table>";
?>
</body>
</html>