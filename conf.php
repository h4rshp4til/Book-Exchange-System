<?php
$inn=$_GET['intno'];
$upn=$_GET['uppno'];
$uid=$_GET['userid'];
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="update interest set deal='Y' where interestno=$inn and uploadno=$upn and userid=$uid";
mysql_query($sql,$cn);
header("location:http://localhost/book exchanger/dealinterest.php");

?>