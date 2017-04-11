<html>
<head>
<body>
<?php
$con=mysqli_connect('localhost','root','','micky');
$edit=$_GET['del'];
if(isset($_REQUEST['submit']))
{

$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$image=$_FILES['image']['name'];
$img_tmp=$_FILES['image']['tmp_name'];
$store="uploads/".$image;

move_uploaded_file($img_tmp,$store);

if($image != ''){
	
$ins="UPDATE register SET name='$name', gender='$gender', dob='$dob', address='$address', image='$image' WHERE id=$edit ";
	
}else{
	
$ins="UPDATE register SET name='$name', gender='$gender', dob='$dob', address='$address'  WHERE id=$edit ";
	
}


if($result=mysqli_query($con,$ins)){
	header('location:index.php');
}
}



 $query="select * from register where id ='$edit'";
 
 $run=mysqli_query($con,$query);
 while($row=mysqli_fetch_assoc($run))
 {
       ?>
   <form action="" method="post" enctype="multipart/form-data">
<center>
	Name:<input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
	gender:<input type="radio" name="gender" value="male" <?php if($row['gender'] == 'male'){?>checked<?php }?>>male <input type="radio" name="gender" value="female" <?php if($row['gender'] == 'female'){?>checked<?php }?>>female<br>
	Dob:<input type="date" name="dob" value="<?php echo $row['dob']; ?>"><br>
	address:<input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
	image:<input type="file" name="image" ><br>
	<img src="uploads/<?php echo $row['image']; ?>" width="200" height="100">
	<input type="submit" name="submit" value="update">
</center>
</form>    
       
       
       <?php
 
 
 }




?>







</body></head></html>
