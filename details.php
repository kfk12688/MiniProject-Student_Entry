<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Student Entries</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-in">
<div class="page">
<div class="main">
<div class="header">
<div class="header-top">
<h1>Department <span>Of Cse</span></h1>
</div>
<div class="header-bottom">
<h2>Hai<br>
.</h2>
</div>
<div class="topmenu">
<ul>
  <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a href="late.html"><span>Late&nbsp;Register</span></a></li>
  <li><a href="abs.html"><span>Absenties</span></a></li>
  <li><a href="internal.html"><span>Internal&nbsp;OnDuty</span></a></li>
  <li><a href="external.html"><span>External&nbsp;OnDuty</span></a></li>
  <li><a href="details.html"><span>Details</span></a></li>
  <li><a href="settings.html"><span>Settings</span></a></li>
 </ul>
</div>
</div>
<div class="content">
<div class="content-left">
<div class="row1"><br>
<h1 class="title" align="center">DETAILS</h1>
<br>

<?php
$con=@mysql_connect('localhost','root','') or die(mysql_error());
$db=@mysql_select_db('late',$con) or die(mysql_error());
echo"<h2 align='center'> DATABASE</h2>";
echo" <table align='center' border=1>";
$full=@mysql_query("select * from table1") or die(mysql_error());
echo" <tr><th>NAME</th><th>DESIGNATION</th><th>SALARY</th><th>rollno</th></tr>";
while($aa=mysql_fetch_array($full))
{
	echo"<tr><td width='300'>",$aa['date'],"</td>
	<td width='300'>",$aa['time'],"</td>
	<td width='300'>",$aa['name'],"</td>
	<td width='300'>",$aa['rollno'],"</td></tr>";	
}
	echo"</table>";
?>

<br>
<br>
<br>
<br>
<br>



</div>
</div>
<div class="content-right">
<div class="mainmenu">
<h2 class="sidebar1">Related Websites</h2>
<ul>
 <li><a href="http://www.annauniv.in/">Anna University</a></li>
  <li><a href="http://www.Reginpaul.com/">Reginpaul</a></li>
  <li><a href="http://www.csetube.com/">Cse Tube</a></li>
    <li><a href="http://www.kinindia.com/">Kinindia</a></li>
   <li><a href="http://www.vidthyathriplus.com/">Vidthyathriplus</a></li>
</ul>
</div>
<div class="contact">
<h2 class="sidebar2">Group Mail</h2>
<div class="contact-detail">
<p class="green"><strong></strong></p>

<p><strong>E-mail :</strong> &nbsp;&nbsp;&nbsp;<a href="http://www.gmail.com">angelcse11@googlegroups.com</a>


</div>
</div>
</div>
</div>
<div class="footer">


</div>
<!--DO NOT Remove The Footer Links-->
<!--Designed by--><a href="http://www.htmltemplates.net">
<img src="images/footnote.gif" class="copyright" alt="html templates"></a>
<!--DO NOT Remove The Footer Links-->
</div>
</div>
</div>

</body></html>

