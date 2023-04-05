<?php
include('configure.php');
$email=$_POST['email'];
$name=$_POST['name'];
$transport=$_POST['transport'];
$source=$_POST['source'];
$seat=$_POST['seat'];
$destination=$_POST['destination'];
$day=$_POST['day'];
$time=$_POST['time'];

if ($email==NULL && $name==NULL && $transport==NULL && $day==NULL && $time==NULL)
{
    $sql=mysqli_query($al,"select * from tab where destination='$destination' and source='$source'");
}
elseif($day!=NULL && $time!=NULL && $transport!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where day1='$day' and time1='$time' and transport='$transport'");
}
elseif($source!=NULL && $destination!=NULL && $time!=NULL && $day!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where source='$source' and destination='$destination' and time1='$time' and day1='$day'");
}
elseif($time!=NULL && $day!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where time1='$time' and day1='$day'");
}
elseif($email==NULL && $name==NULL)
{
    $sql=mysqli_query($al,"select * from tab where destination='$destination' and source='$source' and day1='$day' and time1='$time'");
}
elseif($email!=NULL && $name!=NULL && $source!=NULL && $destination!=NULL && $seat!=NULL && $time!=NULL && $day!=NULL  && $transport!=NULL){
    $sql=mysqli_query($al,"select * from tab where email='$email' and name='$name' and source='$source' and destination='$destination' and time1='$time' and day1='$day' and transport='$transport'");
}
elseif($email!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where email='$email'");

}
elseif($name!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where name='$name'");

}
elseif($transport!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where transport='$transport'");

}
elseif($source!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where source='$source'");
}
elseif($destination!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where destination='$destination'");
}
elseif($day!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where day1='$day'");

}
elseif($time!=NULL)
{
    $sql=mysqli_query($al,"select * from tab where time1='time'");
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Browsing a customer</title>

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
<span class="heading">browse a customer</span><br />
<br /><br />
<br />
<form method="post" action="">
<table class="table" cellpadding="4" cellspacing="4">
<tr><td align="center" colspan="2" class="tableHead">Enter the customer details</td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email"  placeholder="Enter E-mail id"class="fields" size="30"  /></td></tr>
<tr><td class="labels">name: </td><td><input type="text" name="name"  placeholder="Enter FullName" class="fields" size="30"  /></td></tr>
<tr><td class="labels"> Airlines: </td><td><input type="text" name="transport"  placeholder="Enter Your Airline" class="fields" size="30" /></td></tr>
<tr><td class="labels">seat : </td><td><input type="text" name="seat" class="fields"  placeholder="Enter your Seat" size="30"  /></td></tr>
<tr><td class="labels">source: </td><td><input type="text" name="source" class="fields"  placeholder="Enter Source"size="30"  /></td></tr>
<tr><td class="labels">destination: </td><td><input type="text" name="destination" class="fields"  placeholder="Enter Destination"size="30"  /></td></tr>
<tr><td class="labels">day: </td><td><input type="text" name="day" class="fields"  placeholder="dd-mm-yyyy" size="30"  /></td></tr>
<tr><td class="labels">time: </td><td><input type="text" name="time" class="fields" placeholder="24 hours time" size="30"  /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="browse" class="commandButton" /></td></tr>
</table>
</form>
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

