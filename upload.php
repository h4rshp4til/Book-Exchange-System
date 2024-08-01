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
$err6="";
$err7="";
$err8="";
$err9="";
$err10="";
$err11="";
$err12="";
$err13="";
$fl=0;
if(isset($_POST['sbm']))
{
if(empty($_POST['uno']))
{
$err1="<font color=red>upload no must exist</font>";
$fl=1;
}
if(empty($_POST['uid']))
{
$err2="<font color=red>userid must exist</font>";
$fl=1;
}
if(empty($_POST['date']))
{
$err3="<font color=red>uploaddate must exist</font>";
$fl=1;
}
if(empty($_POST['title']))
{
$err4="<font color=red>title must exist</font>";
$fl=1;
}
if(empty($_POST['cat']))
{
$err5="<font color=red>category must exist</font>";
$fl=1;
}
if(empty($_POST['lang']))
{
$err6="<font color=red>language must exist</font>";
$fl=1;
}
if(empty($_POST['edi']))
{
$err7="<font color=red>edition must exist</font>";
$fl=1;
}
if(empty($_POST['aut']))
{
$err8="<font color=red>author must exist</font>";
$fl=1;
}
if(empty($_POST['pub']))
{
$err9="<font color=red>publication must exist</font>";
$fl=1;
}
if(empty($_POST['org']))
{
$err10="<font color=red>orginal price must exist</font>";
$fl=1;
}
if(empty($_POST['sel']))
{
$err11="<font color=red>selling price must exist</font>";
$fl=1;
}
if(empty($_POST['bookimg']))
{
$err12="<font color=red>bookimg must exist</font>";
$fl=1;
}
if(empty($_POST['sta']))
{
$err13="<font color=red>status must exist</font>";
$fl=1;
}
}
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select count(*) from upload";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(uploadno) from upload";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$upn=$row[0]+1;
}
else
$upn=1;
?>


<form name=frm method=post action=upload.php>
<center>
<table>
<tr>
<td>Upload no</td>
<td>
<input type=text name=uno value=<?php echo $upn; ?>><?php echo $err1; ?></td>
</tr>
<tr>
<td>Userid</td>
<td>
<input type=text name=uid><?php echo $err2; ?></td>
</tr>
<tr>
<td>Title</td>
<td>
<input type=text name=title><?php echo $err3; ?></td>
</tr>
<tr>
<td>Update</td>
<td>
<input id="date" type="date" name=date><?php echo $err4; ?></td>
</tr>
<tr>
<td>Category</td>
<td>
<input type=text name=cat><?php echo $err5; ?></td>
</tr>
<tr>
<td>Language</td>
<td><select name=lang>
<option>English</option>
<option>Marathi</option>
<option>Hindi</option>
<option>Sanskrit</option>
</select><?php echo $err6; ?></td>
</tr>
<tr>
<td>Edition</td>
<td>
<input type=text name=edi><?php echo $err7; ?></td>
</tr>
<tr>
<td>Publication</td>
<td>
<input type=text name=pub><?php echo $err8; ?></td>
</tr>
<tr>
<td>Author</td>
<td>
<input type=text name=aut><?php echo $err9; ?></td>
</tr>
<tr>
<td>Original price</td>
<td>
<input type=text name=org><?php echo $err10; ?></td>
</tr>
<tr>
<td>Selling price</td>
<td>
<input type=text name=sel><?php echo $err11; ?></td>
</tr>
<tr>
<td>Book image</td>
<td>
<input type=file name=bookimg><?php echo $err12; ?></td>
</tr>
<tr>
<td>Status</td>
<td>
<input type=text name=sta><?php echo $err13; ?></td>
</tr>
</table>
<input type=Submit name=sbm value=Submit>
<input type=Submit name=sbm value=Update>
<input type=Submit name=sbm value=Delete>
<input type=Submit name=sbm value=Display>
<input type=Submit name=sbm value=Search>
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
$sql="insert into upload values('$_POST[uno]','$_POST[uid]','$_POST[title]','$_POST[date]','$_POST[cat]','$_POST[lang]','$_POST[edi]','$_POST[pub]','$_POST[aut]','$_POST[org]','$_POST[sel]','$_POST[bookimg]','$_POST[sta]')";
mysql_query($sql,$cn);
echo"record saved";
}
else
if($_POST['sbm']=="Update")
{
$sql="Update upload set Userid='$_POST[uid]',Title='$_POST[title]',Update='$_POST[date]',Category='$_POST[cat]',Language='$_POST[lang]',Edition='$_POST[edi]',Publication='$_POST[pub]',Author='$_POST[aut]',Original price='$_POST[org]',Selling price='$_POST[sel]',Book image='$_POST[bookimg]',Status='$_POST[sta]'where Uploadno='$_POST[uno]'";
mysql_query($sql,$cn);
echo"record updated";
}
else
if($_POST['sbm']=="Delete")
{
$sql="Delete from upload where Uploadno='$_POST[uno]'";
mysql_query($sql,$cn);
echo"record deleted";
}
else
if($_POST['sbm']=="Display")
{
$sql="Select * from upload";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Upload no</th>";
echo"<th>Userid</th>";
echo"<th>Title</th>";
echo"<th>Update</th>";
echo"<th>Category</th>";
echo"<th>Language</th>";
echo"<th>Edition</th>";
echo"<th>Publication</th>";
echo"<th>Author</th>";
echo"<th>Original Price</th>";
echo"<th>Selling Price</th>";
echo"<th>Book image</th>";
echo"<th>Status</th>";
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
echo"<td>$row[6]</td>";
echo"<td>$row[7]</td>";
echo"<td>$row[8]</td>";
echo"<td>$row[9]</td>";
echo"<td>$row[10]</td>";
echo"<td>$row[11]</td>";
echo"<td>$row[12]</td>";
echo"</tr>";
}
echo"record displayed";
echo"</table></center>";
}
else
if($_POST['sbm']=="Search")
{
$sql="Select * from upload where Uploadno='$_POST[uno]'";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Upload no</th>";
echo"<th>Userid</th>";
echo"<th>Title</th>";
echo"<th>Update</th>";
echo"<th>Category</th>";
echo"<th>Edition</th>";
echo"<th>Publication</th>";
echo"<th>Author</th>";
echo"<th>Original Price</th>";
echo"<th>Selling Price</th>";
echo"<th>Book image</th>";
echo"<th>Status</th>";
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
echo"<td>$row[6]</td>";
echo"<td>$row[7]</td>";
echo"<td>$row[8]</td>";
echo"<td>$row[9]</td>";
echo"<td>$row[10]</td>";
echo"<td>$row[11]</td>";
echo"</tr>";
}
echo"</table></center>";
}
}
?>