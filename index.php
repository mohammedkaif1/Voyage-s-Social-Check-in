<?php
include("configure.php");

session_start();
if(isset($_SESSION['email']))
{
	header("location:login.php");
}
$email=$_POST['email'];
$name=$_POST['name'];
$transport=$_POST['transport'];
$seat=$_POST['seat'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$day=$_POST['day'];
$time=$_POST['time'];
$info="";


if($email==NULL || $_POST['name']==NULL)
{
	/*
 			*****	This Project is developed in 2015	*****
	 Designed &amp; Developed by Tech Vegan YouTube 
 Subscribe for More Projects Download Source Codes
 Channel Link https://bit.ly/2MFT35Q
 
 Don't Share this Project on any Blog or YouTube 
 All Projects &amp; Tech Vegan Contents are Managed by Bumble Tech(TM) Solutions (Registered by Government of India).
 You can use this Project
 You can submit this Project in College/Schools
 You cannot Sell this Project
 Thank you!*/
 
}
else
{
	$sql=mysqli_query($al,"select * from tab where email='$email' and name='$name' and transport='$transport' and seat='$seat' and source='$source' and destination='$destination' and time1='$time' and day1='$day'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$_POST['email'];
		$_SESSION['name']=$_POST['name'];
		$_SESSION['transport']=$_POST['transport'];
		$_SESSION['seat']=$_POST['seat'];
		$_SESSION['source']=$_POST['source'];
		$_SESSION['destination']=$_POST['destination'];
		$_SESSION['day']=$_POST['day'];
		$_SESSION['time']=$_POST['time'];

		header("location:login.php");
	}
	else
	{
		$info="Incorrect Login Details";
	}
} 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Chatter Box</title>

<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
<style>
	h4
	{
		color:yellow;
	}
</style>
</head>
<body>
<div align="center"><br />
<span class="heading">WELCOME TO VOYAGERS SOCIAL CHECK-IN</span><br />
<br /><br />
<br />
<form method="post" action="">
<table class="table" cellpadding="4" cellspacing="4">
<tr><td align="center" colspan="2" class="tableHead">User Login</td></tr>
<tr><td align="center" class="info" colspan="2"><?php echo $info;?></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">name: </td><td><input type="text" name="name" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels"> Airlines: </td><td><input type="text" name="transport" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">seat : </td><td><input type="text" name="seat" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">source: </td><td><input type="text" name="source" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">destination: </td><td><input type="text" name="destination" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">day: </td><td><input type="text" name="day" class="fields"  placeholder="dd-mm-yyyy" size="30" required="required" /></td></tr>
<tr><td class="labels">time: </td><td><input type="text" name="time" class="fields" placeholder="24 hours time" size="30" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" class="commandButton" /></td></tr>
</table>
</form>
<br />

<br />

<span class="text">Admin Login </span><a href="adminLogin.php">Click Here</a>
<br />
<br />


<div>
	<h4>FOR ANY QUERIES CONTACT admin@gmail.com</h4>
</div>
</div>
</body>
<!-- 
Property of Tech Vegan Not For Sell/Not for Selling through any Blog/Website
Designed &amp; Developed by:
								Ashish Labade - https://www.ashishvegan.com 
                                Tech Vegan YouTube Channel Link: https://bit.ly/2MFT35Q
                                Copyright 2020 - Tech Vegan
-->
</html>

