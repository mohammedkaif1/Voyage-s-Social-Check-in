<?php
include('configure.php');
$email=$_POST['email'];
$name=$_POST['name'];
$transport=$_POST['transport'];
$seat=$_POST['seat'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$day=$_POST['day'];
$time=$_POST['time'];
$sql=mysqli_query($al,"select * from tab where email='$email' and name='$name' and  seat ='$seat' and transport='$transport' and source='$source' and destination='$destination' and time1='$time' and day1='$day'");
if ($email==NULL || $name==NULL || $transport==NULL || $seat==NULL || $source==NULL || $destination==NULL || $day==NULL || $time==NULL)
{
	
}
if(mysqli_num_rows($sql)==1)
{
	$info="";

}
elseif(mysqli_num_rows($sql)==0){
	mysqli_query($al,"INSERT INTO tab(email,name,transport,seat,source,destination,time1,day1) VALUES('$email','$name','$transport','$seat','$source','$destination','$time','$day')");
	$info="New user added successfully";
	mysqli_query($al,"delete from tab where email=' ' and name=' ' and transport=' ' and seat=' ' and source=' ' and destination=' ' and time1=' ' and day1=' '");
}
else{
	$info="";
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
<span class="heading">Add Coustomer Panel</span><br />
<br /><br />
<br />
<form method="post" action="">
<table class="table" cellpadding="4" cellspacing="4">
<tr><td align="center" colspan="2" class="tableHead">Adding A New User</td></tr>
<tr><td align="center" class="info" colspan="2"><?php echo $info;?></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email"  placeholder="Enter E-mail id"class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">name: </td><td><input type="text" name="name"  placeholder="Enter FullName" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels"> Airlines: </td><td><input type="text" name="transport"  placeholder="Enter Your Airline" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">seat : </td><td><input type="text" name="seat" class="fields"  placeholder="Enter your Seat" size="30" required="required" /></td></tr>
<tr><td class="labels">source: </td><td><input type="text" name="source" class="fields"  placeholder="Enter Source"size="30" required="required" /></td></tr>
<tr><td class="labels">destination: </td><td><input type="text" name="destination" class="fields"  placeholder="Enter Destination"size="30" required="required" /></td></tr>
<tr><td class="labels">day: </td><td><input type="text" name="day" class="fields"  placeholder="dd-mm-yyyy" size="30" required="required" /></td></tr>
<tr><td class="labels">time: </td><td><input type="text" name="time" class="fields" placeholder="24 hours time" size="30" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="ADD" class="commandButton" /></td></tr>
</table>
</form>
<br />

<br />


<br />



</div>
<center>
<a href="adminHome.php">BACK</a>
</center>
</body>
<!-- 
Property of Tech Vegan Not For Sell/Not for Selling through any Blog/Website
Designed &amp; Developed by:
								Ashish Labade - https://www.ashishvegan.com 
                                Tech Vegan YouTube Channel Link: https://bit.ly/2MFT35Q
                                Copyright 2020 - Tech Vegan
-->
</html>

