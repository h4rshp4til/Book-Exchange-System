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
if(empty($_POST['ui']))
{
$err1="<font color=red>userid must exist</font>";
$fl=1;
}
if(empty($_POST['un']))
{
$err2="<font color=red>username must exist</font>";
$fl=1;
}
if(empty($_POST['addr']))
{
$err3="<font color=red>address must exist</font>";
$fl=1;
}
if(empty($_POST['cn']))
{
$err4="<font color=red>contactno must exist</font>";
$fl=1;
}
if(empty($_POST['eid']))
{
$err5="<font color=red>emailid must exist</font>";
$fl=1;
}
if(empty($_POST['ps']))
{
$err6="<font color=red>password must exist</font>";
$fl=1;
}
}
?>
<html>
<body>
<form name=frm method=post action=user.php>
<center>
<table>
<tr>
<td>Userid</td>
<td>
<input type=text name=ui><?php echo $err1; ?></td>
</tr>
<tr>
<td>Username</td>
<td>
<input type=text name=un><?php echo $err2; ?></td>
</tr>
<tr>
<td>Address</td>
<td>
<input type=text name=addr><?php echo $err3; ?></td>
</tr>
<tr>
<td>Contact no</td>
<td>
<input type=text name=cn><?php echo $err4; ?></td>
</tr>
<tr>
<td>Email id</td>
<td>
<input type=text name=eid><?php echo $err5; ?></td>
</tr>
<tr>
<td>Password</td>
<td><input type=password name=ps><?php echo $err6; ?></td>
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
if($fl==0)
{
$sql="insert into user values('$_POST[ui]','$_POST[un]','$_POST[addr]','$_POST[cn]','$_POST[eid]','$_POST[ps]')";
mysql_query($sql,$cn);
echo"record saved";
}
}
else
if($_POST['sbm']=="Update")
{
$sql="Update user set Username='$_POST[un]',Address='$_POST[addr]',Contact no='$_POST[cn]',Email id='$_POST[eid]',Password='$_POST[ps]'where userid='$_POST[ui]'";
mysql_query($sql,$cn);
echo"record updated";
}
else
if($_POST['sbm']=="Delete")
{
$sql="Delete from user where userid='$_POST[ui]'";
mysql_query($sql,$cn);
echo"record deleted";
}
else
if($_POST['sbm']=="Display")
{
$sql="Select * from user";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Userid</th>";
echo"<th>Username</th>";
echo"<th>Address</th>";
echo"<th>Contact no</th>";
echo"<th>Email id</th>";
echo"<th>Password</th>";
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
echo"</th>";
}
echo"record displayed";
echo"</table></center>";
}
else
if($_POST['sbm']=="Search")
{
$sql="Select * from user where userid='$_POST[ui]'";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Userid</th>";
echo"<th>Username</th>";
echo"<th>Address</th>";
echo"<th>Contact no</th>";
echo"<th>Email id</th>";
echo"<th>Password</th>";
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
echo"</th>";
}
echo"</table></center>";
}
}
?>