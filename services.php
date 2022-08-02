
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
        <title>service page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        img{
            width: 430px;
            height: 300px;
        }
            .nav{
    display: flex;
    justify-content: space-between;
}
ul li a{
   text-decoration: none;
   color: white;
   display: block;
}

    h1{
            text-align: center;
            padding-bottom: 2rem;
        }
        p{
            padding: 2rem;
        }
        td h3{
            padding: 10px;
            background: blue;
            color: white;
            border: 1px solid blue;
            width: 100px;
            margin: auto;
        }
        .nav{
            background: blue;
            color: white;
            width: 100%;
        }
        .nav h1{
            font-size: 30px;
            float: left;
        }
        .nav ul li{
            list-style: none;
            display: inline-block;
        }
        .nav ul li a{
            text-decoration: none;
            font-size: 20px;
            padding: 10px;
        }
        .nav ul li a:hover{
            background: blueviolet;
        }
    </style>
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
        <h1>Services</h1>
        <table border="2">
            <tr>
                <td>
                    <img src="sho.jpg" alt="">
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
            <tr>
                <td>
                    <img src="min.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga eius vitae molestias in voluptatem sequi soluta, deserunt quos dolorum quis quia numquam excepturi? Quae distinctio voluptatum architecto, dolorum deserunt nesciunt.</p>
                    <h3>10000 RWF</h3>
                </td>
                <td>
                    <img src="lib.jpg" alt="" >
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste facilis officiis, molestiae perferendis eum laborum. Voluptates laboriosam porro eius laudantium quo, quaerat consequuntur reiciendis, corrupti officiis itaque quas? Quo, officiis?</p>
                    <h3>10000 RWF</h3>
                </td>
                <td>
                    <img src="cloth.webp" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi dicta velit odio deleniti est, sed voluptate commodi, in ipsa, cumque ad officia ipsam culpa qui autem rerum ut illum.</p>
                    <h3>10000 RWF</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="lib2.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga eius vitae molestias in voluptatem sequi soluta, deserunt quos dolorum quis quia numquam excepturi? Quae distinctio voluptatum architecto, dolorum deserunt nesciunt.</p>
                    <h3>10000 RWF</h3>
                </td>
                <td>
                    <img src="sho.jpg" alt="" >
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste facilis officiis, molestiae perferendis eum laborum. Voluptates laboriosam porro eius laudantium quo, quaerat consequuntur reiciendis, corrupti officiis itaque quas? Quo, officiis?</p>
                    <h3>10000 RWF</h3>
                </td>
                <td>
                    <img src="img.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam excepturi dicta velit odio deleniti est, sed voluptate commodi, in ipsa, cumque ad officia ipsam culpa qui autem rerum ut illum.</p>
                    <h3>10000 RWF</h3>
                </td>
            </tr>
        </table>
    </body>
</html>