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
		<li><a href="interest.php">Interest</a></li>
        <li><a href="confirm.php">Confirm</a></li>
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
$err6="";
$fl=0;
if(isset($_POST['sbm']))
{
if(empty($_POST['in']))
{
$err1="<font color=red>interestno must exist</font>";
$fl=1;
}
if(empty($_POST['date']))
{
$err2="<font color=red>interestdate must exist</font>";
$fl=1;
}
if(empty($_POST['un']))
{
$err3="<font color=red>uploaddate must exist</font>";
$fl=1;
}
if(empty($_POST['uid']))
{
$err4="<font color=red>userid must exist</font>";
$fl=1;
}
if(empty($_POST['upid']))
{
$err5="<font color=red>Upuserid must exist</font>";
$fl=1;
}
if(empty($_POST['deal']))
{
$err6="<font color=red>Deal must exist</font>";
$fl=1;
}
}
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select count(*) from interest";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(interestno) from interest";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$inn=$row[0]+1;
}
else
$inn=1;

?>

<form name=frm method=post action=interest.php>
<center>
<table>
<tr>
<td>InterestNo</td>
<td>
<input type=text name=in value=<?php echo $inn; ?> ><?php echo $err1; ?></td>
</tr>
<tr>
<td>InterestDate</td>
<td><input id="date"type="date" name=date><?php echo $err2; ?></td>
</tr>
<tr>
<td>UploadNo</td>
<td>
<input type=text name=un><?php echo $err3; ?></td>
</tr>
<tr>
<td>Userid</td>
<td>
<input type=text name=uid><?php echo $err4; ?></td>
</tr>
<tr>
<td>Upuserid</td>
<td>
<input type=text name=upid><?php echo $err5; ?></td>
</tr>
<tr>
<td>Deal</td>
<td>
<input type=text name=deal><?php echo $err6; ?></td>
</tr>
</table>
<input type=Submit name=sbm value=Submit>
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
$sql="insert into interest values('$_POST[in]','$_POST[date]','$_POST[un]','$_POST[uid]','$_POST[upid]','$_POST[deal]')";
mysql_query($sql,$cn);
echo"record saved";
}
else
if($_POST['sbm']=="Delete")
{
$sql="Delete from interest where interestno='$_POST[in]'";
mysql_query($sql,$cn);
echo"record deleted";
}
else
if($_POST['sbm']=="Display")
{
$sql="Select * from interest";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Interest no</th>";
echo"<th>Interest date</th>";
echo"<th>Upload no</th>";
echo"<th>User id</th>";
echo"<th>Upuser id</th>";
echo"<th>Deal</th>";
echo"</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"<td>$row[4]</td>";
echo"<td>$row[5]</td>";
echo"</tr>";
}
echo"record displayed";
echo"</table></center>";
}
}
?>