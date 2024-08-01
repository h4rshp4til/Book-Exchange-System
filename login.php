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
</div>
<!-- end menu -->
<form name=frm method=post action=login.php>
<center>
<p>Login to your account</p> 
<table>
<tr>
<td>Userid</td>
<td>
<input type=text name=ui></td>
</tr>
<tr>
<td>Password</td>
<td><input type=password name=ps></td>
</tr>
</table>
<input type=submit name=sbm value=login><br>
<a href=user.php>new user?</a>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select count(*) from user where username='$_POST[ui]' and password='$_POST[ps]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
session_start();
$sql11="select * from user where username='$_POST[ui]' and password='$_POST[ps]'";
$result11=mysql_query($sql11,$cn);
$row11=mysql_fetch_array($result11);

$_SESSION['userid']=$row11[0];
header("location:http://localhost/book exchanger/index1.html");
}
else
echo "<font color=red>invalid username and or password</font>";
}
?>
