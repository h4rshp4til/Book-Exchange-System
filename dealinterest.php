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

<form name=frm method=post action=dealinterest.php>
<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="Select interestno,interestdate,uploadno,interest.userid,interest.deal,user.username from interest,user where user.userid=interest.userid and interest.upuserid='$_SESSION[userid]' and  interest.deal='N'";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Interest no</th>";
echo"<th>Interest date</th>";
echo"<th>Upload no</th>";
echo"<th>User id</th>";
echo "<th>deal</th>";
echo "<th>name</th>";
echo"</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"<td>$row[4]</td>";
echo"<td><a href=conf.php?intno=$row[0]&uppno=$row[2]&userid=$row[3]>$row[5]</a></td>";
echo"</tr>";
}
echo"record displayed";
echo"</table></center>";
?>
<center>
<input type=Submit name=sbm value=Display>
</center>
</form>
</body>
</html>
