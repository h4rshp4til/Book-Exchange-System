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
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$fl=0;
if(isset($_POST['sbm']))
{
if(empty($_POST['cn']))
{
$err1="<font color=red>confirmationno must exist</font>";
$fl=1;
}
if(empty($_POST['date']))
{
$err2="<font color=red>confirmationdate must exist</font>";
$fl=1;
}
if(empty($_POST['un']))
{
$err3="<font color=red>upload no must exist</font>";
$fl=1;
}
if(empty($_POST['touser']))
{
$err4="<font color=red>touser must exist</font>";
$fl=1;
}
if(empty($_POST['fromuser']))
{
$err5="<font color=red>fromuser must exist</font>";
$fl=1;
}
}
?>



<form name=frm method=post action=confirm.php>
<center>
<table>
<tr>
<td>Confirmation No</td>
<td>
<input type=text name=cn><?php echo $err1; ?></td>
</tr>
<tr>
<td>Confirmation Date</td>
<td><input id="date"type="date" name=date><?php echo $err2; ?></td>
</tr>
<tr>
<td>Upload No</td>
<td>
<input type=text name=un><?php echo $err3; ?></td>
</tr>
<tr>
<td>To User</td>
<td>
<input type=text name=touser><?php echo $err4; ?></td>
</tr>
<tr>
<td>From User</td>
<td>
<input type=text name=fromuser><?php echo $err5; ?></td>
</tr>
</table>
<input type=Submit name=sbm value=Submit>
<input type=Submit name=sbm value=Update>
<input type=Submit name=sbm value=Delete>
<input type=Submit name=sbm value=Display>
</center>
</form>
</body>
</html>

<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Submit")
{
$sql="insert into Confirm values('$_POST[cn]','$_POST[date]','$_POST[un]','$_POST[touser]','$_POST[fromuser]')";
mysql_query($sql,$cn);
echo"record saved";
}
else
if($_POST['sbm']=="Update")
{
$sql="Update Confirm set Confirmation date='$_POST[date]',Upload no='$_POST[un]',To user='$_POST[touser]',From user='$_POST[fromuser]'where Confirmation no='$_POST[cn]'";
mysql_query($sql,$cn);
echo"record updated";
}
else
if($_POST['sbm']=="Delete")
{
$sql="Delete from confirm where Confirmationno='$_POST[cn]'";
mysql_query($sql,$cn);
echo"record deleted";
}
else
if($_POST['sbm']=="Display")
{
$sql="Select * from confirm";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Confirmation no</th>";
echo"<th>Confirmation date</th>";
echo"<th>Upload no</th>";
echo"<th>To user</th>";
echo"<th>From user</th>";
echo"</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"<td>$row[4]</td>";
echo"</tr>";
}
echo"</table></center>";
}
}
?>