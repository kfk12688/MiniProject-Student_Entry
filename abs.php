
<?php
$con=@mysql_connect('localhost','root','') or die(mysql_error());
$db=@mysql_select_db('late',$con) or die(mysql_error());
$date=$_POST['date'];
$days=$_POST['days'];
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$res=@mysql_query("insert into table2 values('$date','$days','$name','$rollno')") or die(mysql_error());
header('location:abs.html');

?>
