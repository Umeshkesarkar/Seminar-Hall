<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

?>
<!--<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <li class="active"><a href="search.php">Search</a></li>
  <li><a href="about.html">AboutUs</a></li>
  <li><a href="contact.hmtl">Contact</a></li>
  <li><a href="mybooking.php">My Booking</a></li>
  <li style="float:right"><a href='logout.php'>Logout</a></li>
</ul>
<br>
<h3>Concourse seminar hall</h3>
<p>Search Seminar Halls</p>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="seminar-hall 1.jpg" alt="Seminar-Hall 1" style="width:100%;" >
      <div class="container" style="">
        <h1 class="name">A.A.Seminar Hall </h1>
        <p class="title">Andheri</p>
        <p>Contact No-4561237897</p>
        <p>example@example.com</p>
        <h2 class="star">Star Rating</h2>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        <p><a href='ADetail 1.html' class="button" onclick=''>Details</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="seminar-hall 2.jpg" alt="Seminar-Hall 2" style="width:100%">
      <div class="container">
        <h1 class="name">A.B. Seminar Hall</h1>
        <p class="title">Borivali</p>
        <p>Contact No-4561237897</p>
        <p>example@example.com</p>
        <h2 class="star">Star Rating</h2>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        <p><a href='ADetail 2.html' class="button" onclick=''>Details</a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="seminar-hall 3.jpg" alt="Seminar-Hall 3" style="width:100%">
      <div class="container">
        <h1 class="name">A.C. Seminar Hall</h1>
        <p class="title">Bandra</p>
        <p>Contact No-4561237897</p>
        <p>example@example.com</p>
        <h2 class="star">Star Rating</h2>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        <p><a href='ADetail 3.html' class="button" onclick=''>Details</a></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="seminar-hall 4.jpg" alt="Seminar-Hall 4" style="width:100%">
      <div class="container">
        <h1 class="name">A.D. seminar hall</h1>
        <p class="title">Dadar</p>
        <p>Contact No-4561237897</p>
        <p>example@example.com</p>
        <h2 class="star">Star Rating</h2>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        <p><a href='ADetail 4.html' class="button" onclick=''>Details</a></p>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="seminar-hall 5.jpg" alt="Seminar-Hall 5" style="width:100%">
      <div class="container">
        <h1 class="name">A.E.seminar hall </h1>
        <p class="title">Bandra</p>
        <p>Contact No-4561237897</p>
        <p>example@example.com</p>
        <h2 class="star">Star Rating</h2>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        <p><a href='ADetail 5.html' class="button" onclick=''>Details</a></p>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="seminar-hall 6.jpg" alt="Seminar-Hall 6" style="width:100%">
      <div class="container">
        <h1 class="name">A.F.seminar hall</h1>
        <p class="title">Andheri</p>
        <p>Contact No-4561237897</p>
        <p>example@example.com</p>
        <h2 class="star">Star Rating</h2>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        <p><a href='ADetail 6.html' class="button" onclick=''>Details</a></p>
      </div>
    </div>
  </div>

<!--</body>
</html>-->

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

   
</div>
		
</body>
</html>