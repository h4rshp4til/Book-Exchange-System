<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select * from upload where status='Available'";
$result=mysql_query($sql,$cn);
echo "<table>";
$i=0;
echo "<tr>";
while($row=mysql_fetch_array($result))
{
echo "<a href=<td><img src=$row[11] height=200 width=150><br>title:$row[2]<br>language:$row[5]<br>edition:$row[6]<br>publication:$row[7]<br>author:$row[8]<br>original_price:$row[9]<br>selling_price:$row[10]</td>";
echo "<td></td><td></td><td></td><td></td><td></td><td></td>";
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