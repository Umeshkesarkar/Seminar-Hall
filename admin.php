<!DOCTYPE html>
<html>
<head>
	<title>try</title>
	<style>
		body{
			margin: 0px;
			border: 0px;
		}
		#header{
			width: 100%;
			height: 150px;
			background: black;
			color: white;
		}
		#sidebar{
			width: 300px;
			height: 400px;
			background: #27ae60;
			float: left;
		}
		#data{
			height: 700px;
			background: #c0392b;
			color: white;
			font-family: Helvetica;
			font-size: 50px;
		}
		#adminlogo{
			background: white;
			border-radius: 50px;
		}
		 .container{
      margin: 20px;
    }
    .column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 20px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 2px 4px 8px 2px rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
	</style>
  <script type="text/javascript">
    function del(id){
    if(confirm('Are you sure to delete?')){
      window.location.href="delete.php?id="+id;
    }
  }
  </script>
</head>
<body>
	<div id="header">
		<center><img src="logof.jpg" alt="adminlogo" id="adminlogo"><!--<br>This is Admin Panel, Please proced with caution!-->
		</center>
		
	</div>
<div class='container'>

  <?php
 // session_start();
include('db.php');
//$user=$_SESSION['username'];//'user1';
$q="select * from `hallbooking`";
$res=mysqli_query($con,$q);
$tot=0;
while($r1=mysqli_fetch_assoc($res)){
  $id=$r1['id'];
  ?>
<div class="row" style="margin-bottom: 20px;">

  <div class="column">
    <div class="card">
      <button onclick="del('<?php echo $id;?>')">Delete</button>

      <button onclick="window.location.href='update.php?id='+<?php echo $r1['id'];?>">Update</button>
      <h3>Order ID: <?php echo $r1['id'];?></h3>
      
      <p><b>Hall Name:- </b><?php echo $r1['name'];?></p>
    <p><b>Hall Address:- </b> <?php echo $r1['location'];?></p>
      <p><b>Capacity:- </b> <?php echo $r1['capacity'];?></p>
      <p><b>Cost:- </b> <?php echo $r1['price'];?></p>      
      <p><b>Services:- </b> <?php echo $r1['services'];?></p>
      <p><b>Contact No.:- </b> <?php echo $r1['phone'];?></p>
      <p><b>E-Mail:- </b> <?php echo $r1['email'];?></p>
    <h2>Booking Date:- <br><?php echo $r1['booking_date'];?></h2>
    <hr/>
    <h3>Booked for :</h3>
    <p><b>Name:- </b><?php echo $r1['book_name'];?></p>
    <p><b>Phone:- </b><?php echo $r1['contact'];?></p>
    <p><b>Persons:- </b><?php echo $r1['persons'];?></p>
    <p><b>Occuption:- </b><?php echo $r1['occuption'];?></p>
    <p><b>Services:- </b><?php echo $r1['book_services'];?></p>
    </div>
  </div>
</div>
<?php } ?>
</div>
</body>
</html>
<head></head>