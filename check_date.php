<?php
$date=$_GET['date'];
$name=$_GET['hname'];
include('db.php');
$q="select * from hallbooking where booking_date='$date' and name='$name'";
$res=mysqli_query($con,$q);
$n=mysqli_num_rows($res);
if($n>0)
echo 'Hall already has been booked for this date.';
else
echo 'ok';
?>