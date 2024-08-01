<?php
session_start();
if($_POST['sbm']=="like")
{

$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$dt=date('Y-m-d');
echo "wel come $dt";
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
$upp=$_SESSION['uplno'];
$upui=$_SESSION['upuserid'];
$ui=$_SESSION['userid'];
$sql11="insert into interest(interestno,interestdate,uploadno,userid,upuserid,deal) values('$inn','$dt','$upp','$ui','$upui','N')";
mysql_query($sql11);
}
header("location:http://localhost/book exchanger/bookdisplay1.php");
?>