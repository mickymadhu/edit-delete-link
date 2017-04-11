<?php
session_start();

if(!$_SESSION['username']) {
header('location:login.php');
}

?>

<html>
  <head>
  <title> micky </title>
  </head>
<body>
<a href="logout.php">logout </a><br>
<a href="form.php">insert new data</a><br><br>

<table align="center" width="1000" border="4">
 <tr>
 <td colspan="20" align="center" bgcolor="red"><h1>view </h1> </td>
 </tr>
 <tr align="center">
 <th>Serial No. </th>
 <th> name</th>
 <th>gender</th>
 <th>dob</th>
  <th>address</th>
   <th>image</th>
 <th>Delete</th>
 <th>Edit</th>
 </tr>

 <tr align="center">
 <?php
 $con=mysqli_connect('localhost','root','','micky');
 $que="select * from register";
 $run=mysqli_query($con,$que);
 
 $i=1;
 
 while ($row=mysqli_fetch_array($run))
 {
     $u_id = $row['id'];
	$name = $row[1];
	$gender = $row[2];
	$dob= $row[3];
	$address= $row[4];
	$image= $row[5];
	 
 
 
 
 
 ?>
 <td align="center"><?php echo $i; $i++; ?></td>
 <td align="center"><?php echo $name; ?></td>
 <td align="center"><?php echo $gender; ?></td>
 <td align="center"><?php echo $dob; ?></td>
 <td align="center"><?php echo $address; ?></td>
 <td align="center"><?php echo "<img width='150px' height='100px' src='uploads/".$row['image']."'>"; ?></td>
 <td align="center"><a href="delete.php?del=<?php echo $u_id; ?>">Delete</a> </td>
 <td align="center"><a href="edit.php?del=<?php echo $u_id; ?>">Edit</a></td>
 </tr>

<?php } ?>


</table>
 
</body>
</html>
