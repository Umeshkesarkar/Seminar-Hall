<?php
$id=$_GET['id'];
include('db.php');
$q="select * from hallbooking where id='$id'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_assoc($res);

?>
<html>
<body>
	<center>
		<form method='post'><br><br>
			Persons: <br><input type="text" name="persons" value="<?php echo $r['persons'];?>"><br><br>
			Services: <br><input type="text" name="book_services" value="<?php echo $r['book_services'];?>"><br><br>
			<input type="submit" name='update' value='Update'>
		</form>
	</center>
	</body>
</html>
<?php
if(isset($_POST['update'])){
	$p=$_POST['persons'];$b=$_POST['book_services'];
	$sql="update hallbooking set persons='$p',book_services='$b' where id='$id'";
	if(mysqli_query($con,$sql)){
		echo 'Data updated...';
		header('location:admin.php');
	}else echo 'Failed to update!';
}
?>