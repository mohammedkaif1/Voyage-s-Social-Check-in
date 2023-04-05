<?php
include("configure.php");
session_start();
if(!isset($_SESSION['id']))
{
	header("location:adminLogin.php");
}
$sql=mysqli_query($al,"SELECT * FROM tab");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
<title>Manage Users</title>
</head>

<body>
<span class="heading">Manage Users</span><span style="float:right"><a href="logout.php">
<img src="images/logout.png" height="50" width="100"  /></a></span>
<hr style="border:6px dotted #63C;"/><br />

<div align="center">
<table class="table" cellpadding="4" cellspacing="4">
<tr class="tableHead" style="font-size:15px;"><th>id</th><th>E-mail</th><th>name</th><th>transport</th><th>source</th><th>destination</th><th>day</th><th>time</th>
<th>Delete</th></tr>
<?php
while($b=mysqli_fetch_array($sql))
{
	?>
<tr class="msg"><td><?php echo $b['id'];?></td>
<td><?php echo $b['email'];?></td>
<td><?php echo $b['name'];?></td>
<td><?php echo $b['transport'];?></td>
<td><?php echo $b['source'];?></td>
<td><?php echo $b['destination'];?></td>
<td><?php echo $b['day1'];?></td>
<td><?php echo $b['time1'];?></td>
<td><a href="deleteUser.php?del=<?php echo $b['id'];?>" onclick="return confirm('Are You Sure..?');">Delete</a></td></tr>
<?php } ?>
</table>	
<br />
<br />
<a href="adminHome.php">BACK</a>
</body>
<!-- 
Property of Tech Vegan Not For Sell/Not for Selling through any Blog/Website
Designed &amp; Developed by:
								Ashish Labade - https://www.ashishvegan.com 
                                Tech Vegan YouTube Channel Link: https://bit.ly/2MFT35Q
                                Copyright 2020 - Tech Vegan
-->
</html>