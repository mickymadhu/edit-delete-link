<?php
 $con=mysqli_connect('localhost','root','','micky');


$delete_record=$_GET['del'];

$query="delete from register WHERE id='$delete_record' ";

if(mysqli_query($con,$query)) {
header('location:index.php');

}

?>
