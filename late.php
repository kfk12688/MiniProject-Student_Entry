<?php
$con=@mysql_connect('localhost','root','') or die(mysql_error());
$db=@mysql_select_db('late',$con) or die(mysql_error());
$date=$_POST['date'];
$time=$_POST['time'];
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$res=@mysql_query("insert into table1 values('$date','$time','$name','$rollno')") or die(mysql_error());
header('location:late.html');
?>
