<!DOCTYPE html>
<html>
<head>
	<title>ufinalhome</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<style>
  *{
  margin: 0;
  padding: 0;

}
body {
  font-size: 25px;
  background: lightgrey;
  font-family: bazooka;
}
#header{
      width: 100%;
      height: 150px;
      background: black;
      color: white;
    }
    #adminlogo{
      background: white;
      border-radius: 50px;
    }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
  font-size: 20px;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #555;
}

.checked {
  color: orange;
}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 30px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}
.name{
  font-size: 40px;
  font-family: bazooka;
}
.star{
  font-size: 35px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>
   <div id="header">
    <center><img src="logof.jpg" alt="adminlogo" id="adminlogo"><!--<br>This is Admin Panel, Please proced with caution!-->
    </center>
    
  </div>
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="about.html">AboutUs</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li class="active"><a href="mybooking.php">My Booking</a></li>
  <li style="float:right"><a href='logout.php'>Logout</a></li>
</ul>
<div class='container'>
  <?php
  session_start();
include('db.php');
$user=$_SESSION['username'];//'user1';
$q="select * from `hallbooking` where user='$user' ORDER BY time_t DESC";
$res=mysqli_query($con,$q);
$tot=0;
while($r1=mysqli_fetch_assoc($res)){
  ?>
<div class="row" style="margin-bottom: 20px;">
  <div class="column">
    <div class="card">
      <h3>Booking ID: <?php echo $r1['id'];?></h3>
      
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