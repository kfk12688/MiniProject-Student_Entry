
<?php
$con=@mysql_connect('localhost','root','') or die(mysql_error());
$db=@mysql_select_db('late',$con) or die(mysql_error());
$date=$_POST['date'];
$days=$_POST['days'];
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$cgname=$_POST['cgname'];
$event=$_POST['event'];
$pname=$_POST['pname'];
$orgdate=$_POST['orgdate'];
$res=@mysql_query("insert into table4 values('$date','$days','$name','$rollno','$cgname','$event','$place','$orgdate')") or die(mysql_error());
header('location:external.html');
?>
