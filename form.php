<?php

$con=mysqli_connect('localhost','root','','micky');

if(isset($_REQUEST['submit']))
{

$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['date'];
$address=$_POST['address'];
$image=$_FILES['image']['name'];
$img_tmp=$_FILES['image']['tmp_name'];
$store="uploads/".$image;

move_uploaded_file($img_tmp,$store);

$ins="insert into register(name,gender,dob,address,image) values('$name','$gender','$dob','$address','$image')";

if($result=mysqli_query($con,$ins)){
	header('location:index.php');
}
}


?>

<html>
<head>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<center>
	Name:<input type="text" name="name" id="name"><br>
	gender:<input type="radio" name="gender" value="male">male <input type="radio" name="gender" value="female">female<br>
	Dob:<input type="date" name="date" ><br>
	address:<input type="text" name="address"><br>
	image:<input type="file" name="image" ><br>
	<input type="submit" name="submit" value="submit">
</center>
</form>
</html>
