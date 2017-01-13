<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 

$password=$_POST['password'];
$login=$_POST['login'];

$npassword=$_POST['npassword'];
$nlogin=$_POST['nlogin'];
$cpassword=$_POST['cpassword'];
$con=@mysql_connect('localhost','root','')or die(mysql_error());
$db=@mysql_select_db('late',$con)or die(mysql_error());
$res=@mysql_query("select * from table5 where login='$login' and password='$password'") or die(mysql_error());
$rest=@mysql_query("insert into table5(npassword,cpassword,nlogin) values('".$npassword."','".$cpassword."','".$nlogin."')") or die(mysql_error());
$rests=@mysql_query("select * from table5 where npassword='$npassword' and cpassword='$cpassword'") or die(mysql_error());
$aa=mysql_fetch_array($res);
$bb=mysql_fetch_array($rests);
if($aa['login']and $aa['password'])
{
	if($bb['npassword']and$bb['cpassword'])
	{
   	$restbb=@mysql_query("insert into table5(password,login) values('".$npassword."','".$nlogin."')") or die(mysql_error());
	$rrr=@mysql_query("truncate table table5")or die(mysql_error());
	$restbb=@mysql_query("insert into table5(password,login) values('".$npassword."','".$nlogin."')") or die(mysql_error());
	header("location:settings.html");
	}
	else
	{
		echo"Reenter the confirmation password";
		header("location:settings.html");
	}
}
	else
	{
		echo"Current password or loginId is Incorrect";
	}
?>
<body>
</body>
</html>