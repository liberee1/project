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
  echo"not connected";
}

?>

<html>
<head>
    <title>login form</title>
    <link rel="stylesheet"href="login.css">
</head>
<body>
    <nav class="nav">
        <h1>login form</h1>
        NAME:<inputtype=>
        <form action="  " method="post">
            <label1 for="">First Name:</label1>
            <input type="text" Name="seller_name" id="" placeholder="Enter First Name"/></br>
            <label1 for="">seller_ Name:</label1>
            <input type="text" Name="product_id" id="" placeholder="Enter the seller Name"/></br>
            <label1 for="">product_id:</label1>
            <input type="number" Name="" id="" placeholder="Enter product number"/></br>
            
        submit:<input type="text"name="sub"placeholder="ohereza">
        <a href="home.html" style="color: red; font-style: 20px;">Back to Home</a>
        </form>
    </nav>
</body>