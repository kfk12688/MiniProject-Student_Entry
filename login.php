<?php 
$login=$_POST['login'];
$password=$_POST['password'];
$con=@mysql_connect('localhost','root','')or die(mysql_error());
$db=@mysql_select_db('late',$con)or die(mysql_error());
$res=@mysql_query("select * from table5 where login='$login' and password='$password'") or die(mysql_error());
$aa=mysql_fetch_array($res);
if($aa['login']and $aa['password'])
	header('location:home.html');
else
	echo"<h2 align='center'>Login Failed</h2>";
?>
