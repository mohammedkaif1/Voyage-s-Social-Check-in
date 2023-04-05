<?php
include("configure.php");
$id=$_POST['id'];
$password=$_POST['password'];
$name=$_POST['name'];
if($id==NULL || $_POST['password']==NULL)
{
	
}
else
{
	$sql=mysqli_query($al,"insert into admin (id,name,password)values('$id','$name','$password')");
	$info="new admin successfully added";
	
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>adding new admin</title>
<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center"><br />
<span class="heading">Add the admin</span><br />
<br /><br />
<br />
<form method="post" action="">
<table class="table" cellpadding="4" cellspacing="4">
<tr><td align="center" colspan="2" class="tableHead">admin</td></tr>
<tr><td align="center" class="info" colspan="2"><?php echo $info;?></td></tr>
<tr><td class="labels">ID : </td><td><input type="text" name="id" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">name : </td><td><input type="text" name="name" class="fields" size="30" required="required" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="password" class="fields" size="30" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="add" class="commandButton" /></td></tr>
</table>
</form>
<br />

<br />
<span class="text">Main Page </span><a href="index.php">Click Here</a></br></br>
<span class="text">Back </span><a href="adminHome.php">Click Here</a>


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