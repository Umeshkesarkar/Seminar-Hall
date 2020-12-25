<?php
$id=$_GET['id'];
include('db.php');
$q="DELETE from hallbooking where id='$id'";
if(mysqli_query($con,$q)){
	echo 'Deleted';
	header('location:admin.php');
}else echo 'Failed to delete';
?>