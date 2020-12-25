<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
                  $(document).ready(function(){
  $("#orderdate").change(function(){
    var det=this.value;
    var hName="<?php echo $_GET['name'];?>";
    //alert(this.value+' '+hName);
    var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       if(this.responseText!='ok')alert( xhttp.responseText);
    }
};
xhttp.open("GET", "check_date.php?date="+det+'&hname='+hName, true);
xhttp.send();
  });
});
                </script>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method='post'>
      
        <div class="row">
          <div class="col-50">
            <h3>Booking Details</h3>
            <div class="row">
            <div class="col-50">
                <label for="state"><i class="fa fa-address-card-o"></i> Order date</label>
                <input type="date" id="orderdate" name="date" required><br><br>
                
              </div>
              <div class="col-50">
               <label for="state"><i class="fa fa-user"></i> Persons</label>
                <input type="number" id="orderdate" name="persons" required><br><br>

              </div>
            </div>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="book_name" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Contact NO.</label>
            <input type="text" id="contact" name="contact" placeholder="9875464595" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Occuption</label>
            <input type="text" id="adr" name="occuption" placeholder="Ex. Meeting,Conference" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Services</label>
            <input type="text" id="adr" name="book_services" placeholder="Ex. Wifi,Food,Snacks" required>
            <div class="row">
              
              
            </div>
          </div>
          
          
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <select id="cards">
              <option value="card">Visa Card</option>
              <option value="card">Master Card</option>
              <option value="card">RuPay Card</option>
              <option value="card">Maestro Card</option>
            </select>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
        
 
          
        </div>
        
        <input type="submit" value="Pay Now" name='pay' class="btn">
      </form>
      <?php
     
include('db.php');
$adr=$_GET['address'];$price=$_GET['price'];$email=$_GET['email'];$capacity=$_GET['capacity'];
  $name=$_GET['name'];$services=$_GET['services'];$phone=$_GET['phone'];
if(isset($_POST['pay'])){
  $persons=$_POST['persons'];$book_name=$_POST['book_name'];
  $contact=$_POST['contact'];$occuption=$_POST['occuption'];$book_services=$_POST['book_services'];
  $date=$_POST['date'];
  $id=''.rand();
  $user=$_SESSION['username'];
  $sql="INSERT INTO `hallbooking` (`id`,user, `name`, `location`, `price`, `phone`, `email`, `capacity`, `services`,booking_date,persons,book_name,contact,occuption,book_services) VALUES ('$id', '$user','$name', '$adr', '$price', '$phone', '$email', '$capacity', '$services','$date','$persons','$book_name','$contact','$occuption','$book_services');";
  if(mysqli_query($con,$sql)){echo 'added';}else echo 'failed ';
echo "<script>alert('Your hall has been booked...');window.location.href='mybooking.php';</script>";
}

     ?>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      
      
       <h4>Hall </h4>

      <p><span><?php echo $_GET['name'];?></span><span class="price"><?php echo 'Rs '.$_GET['price'];?></span></p>
    
      <hr>
      <p>Price <span class="price" style="color:black"><b><?php echo $_GET['price'];?></b></span></p>
    </div>
  </div>
</div>
</body>
</html>
