

<?php
$server="localhost";
$db="onlineshoppping";
$user="root";
$password="";
//connection string
$con=mysqli_connect($server,$user,$password,$db);
if($con)
{
  echo "connected";
}
else{
  echo"not connected".mysqli_error($con);
}
if(isset($_POST['BIIKA']))
{
  $seller_name=$_POST['seller_name'];
  $Product_name=$_POST['Product_name'];
  $query="INSERT INTO product('Product_name','seller_name') values('$seller_name','$Product_name')";
  $submit=mysqli_query($con,$query);
  if($submit)
  {
    echo 'successfully submitted';
  }
  else{
    echo 'successfully submitted';
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>contact</title>
<link rel="stylesheet" href="./contact.css">

</head>
<body>
    <div class="nav">
        <h1>ONLINE SHOP</h1>
        <ul>
            <li><a href="home.html" id="nav1">Home</a></li>
            <li><a href="services.html" id="nav1">Services</a></li>
            <li><a href="about us.html" id="nav1">About Us</a></li>
            <li><a href="Contact Us.html" id="nav1">Contact Us</a></li>
            <li><a href="login.html" id="nav1">Login</a></li>
            <li><a href="Sign Up.html" id="nav1">Sign Up</a></li>
        </ul>
     </div>
       
       <div class="info">
        <h1>Contact</h1>
        <hr>
        <p><span>Name:</span>ONLINE SHOPPING</p>
        <p><span>Email:</span>onshop@gmail.com</p>
        <p><span>Phone:</span>+123 4567 890</p>
        <p><span>Address:</span>Worldwide</p>
       </div>
    <div class="social">
        <a href=""><img src="twitter.jpeg"></a>
        <a href=""><img src="facebook.jpeg" alt=""></a>
        <a href=""><img src="instagram.jpeg" alt=""></a>
    </div>
   
</body>
</html>