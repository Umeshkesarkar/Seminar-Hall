<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
  background: lightgrey;
}
#header1{
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
  font-family: bazooka;
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
</style>
<body>
  <div id="header1">
    <center><img src="logof.jpg" alt="adminlogo" id="adminlogo"><!--<br>This is Admin Panel, Please proced with caution!-->
    </center>
    
  </div>
<ul>
  <li><a href="/finalA">Home</a></li>
  <li><a href="about.html">AboutUs</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li style="float:right" class="active"><a href="register.php">Register</a></li>
  <li style="float:right"><a href="login.php">Login</a></li>
</ul>

<div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p class="text-center">
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>