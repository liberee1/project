

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
<!DOCTYPE.html> 
<html>
<head>
<body style="background-color: pink;">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .nav{
            background: hwb(202 18% 10%);
            padding: 30px;
            color: white;
            width: 90%;
            justify-content: space-between;
        }
        .nav h1{
            font-size: 100px;
            float: left;
        }
        .nav ul{
            float: right;
            margin-right: 90px;
        }
        .nav ul li{
            list-style: none;
            display: inline-block;
        }
        .nav ul li a{
            text-decoration: none;
            font-size: 20px;
            padding: 10px;
            
            color: white;
        }
        .nav ul li a:hover{
            background: rgb(29, 28, 28);
        }
        form{
            margin-top: 80px;
        }
    </style>
</head>

<body>
<div class="nav">
    <table border="2">
        <tr>
            <td>
                <img src="lib2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga eius vitae molestias in voluptatem sequi soluta, deserunt quos dolorum quis quia numquam excepturi? Quae distinctio voluptatum architecto, dolorum deserunt nesciunt.</p>
                <h3>10000 RWF</h3>
            </td>
            <td>
                <img src="red.jpg" alt="" >
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste facilis officiis, molestiae perferendis eum laborum. Voluptates laboriosam porro eius laudantium quo, quaerat consequuntur reiciendis, corrupti officiis itaque quas? Quo, officiis?</p>
                <h3>10000 RWF</h3>
            </td>
            <td>
                <img src="dress.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi dicta velit odio deleniti est, sed voluptate commodi, in ipsa, cumque ad officia ipsam culpa qui autem rerum ut illum.</p>
                <h3>10000 RWF</h3>
            </td>
        </tr>
    <ul>
        <li><a href="home.php" id="nav1">Home</a></li>
        <li><a href="services.php" id="nav1">Services</a></li>
        <li><a href="about us.html" id="nav1">About Us</a></li>
        <li><a href="Contact Us.html" id="nav1">Contact Us</a></li>
        <li><a href="login.html" id="nav1">Login</a></li>
        <li><a href="Sign Up.html" id="nav1">Sign Up</a></li>
    </ul>
 </div>
<form>
<th style="font-size: 60px; font-family: arial; color:#1f15a8 "></th>online shop is looking forward to assisting you in any query you may have about your shopping, Payment, order or Delivery, Returns, and Refunds. Please don't hesitate to contact us during our working times</th>
<ol>Kukku Capital is one of Rajasthan’s premier Investment  Services companies, offering personalized services to High Net worth Clients, corporate houses, institutional investors, Non-Resident Indians (NRIs).
    We help our clients for wealth creation and their investment requirements, We are always dedicated for active and need based help to our clients based on their risk profile and requirements.
<li>shirts</li>
<li>dresses</li>
<li>trousers</li>
<li>skirts</li>
<li>and others</li>
</ol>
</form>
    
</body>
</html>