<?php
include("configure.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
header("Refresh:45");
$msg=$_POST['msg'];
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$transport=$_SESSION['transport'];
$source=$_SESSION['source'];
$destination=$_SESSION['destination'];
$seat=$_SESSION['seat'];

$day=$_SESSION['day'];
$time=$_SESSION['time'];
$sql=mysqli_query($al,"select * from tab where email='$email' and name='$name' and transport='$transport' and seat='$seat' and source='$source' and destination='$destination' and day1='$day' and time1='$time'");
$b=mysqli_fetch_array($sql);
$name=$b['name'];

$date=date('d-M-Y');
$curtime = date('h:i:a');
if($msg==NULL)
{
	
}
else
{
	mysqli_query($al,"INSERT INTO box(sender,msg,date,source,destination,day1,time1,tranport,time) VALUES('$name','$msg','$date','$source','$destination','$day','$time','$transport','$curtime')");
}
$fetch=mysqli_query($al,"SELECT * FROM box  where source='$source' and destination='$destination' and day1='$day' and time1='$time' and tranport='$transport' ORDER BY id DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat Room</title>
<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />

</head>

<body>
<span class="heading">Chat Room</span><span style="float:right"><a href="logout.php">
<img src="images/logout.png" height="50" width="100"  /></a></span>
<hr style="border:6px dotted #63C;"/><br />
<br />
<div align="center">
<form method="post" action="">
<table class="table" cellpadding="4" cellspacing="4">
<tr><td align="center" class="tableHead" colspan="2">Chatter Box</td></tr>
<tr><td colspan="2"><div class="fields" style="overflow:scroll;height:150px;word-wrap:normal;width:300px;">
<?php while($f=mysqli_fetch_array($fetch))
{
	?>
<span class="nick"><?php echo $f['sender'];?></span> : <span class="msg"><?php echo $f['msg'];?></span><br /><?php ?><span style="font-size:10px;color:rgba(89,255,0,1.00);"><?php echo $f['time']." | ". $f['date']."<br>";?></span></span><br /><?php } ?>
</div></td></tr>
<tr><td><textarea name="msg" class="fields" rows="2" cols="28" placeholder="Enter Your Message" required="required" >
</textarea></td>
<td><input type="submit" value="SEND" class="commandButton" /><br />
<br />
<a href="box.php">Refresh</a></td></tr>

</table>
</form><br />
<br />
<a href="home.php">BACK</a>
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