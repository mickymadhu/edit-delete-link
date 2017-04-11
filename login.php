<?php
session_start();
$con=mysqli_connect('localhost','root','','micky');

if(isset($_REQUEST['submit'])){
	$name=$_SESSION['username']=$_POST['username'];
	$password=$_POST['password'];
	
$que="select * from login where username='$name' AND password='$password'";
 $run=mysqli_query($con,$que);
 
 if(mysqli_num_rows($run)>0){
	 
		header('location:index.php');
 }
 else
 {
 echo "error";
}
}
 





?>
<html>
<head>
<body>
	<center>
<form action="" method="post">
username:<input type="text" name="username"><br>
password:<input type="password" name="password"><br>
<input type="submit" name="submit" >
</center>
</form></body></head></html>
