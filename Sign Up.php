
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
  $category_id=$_POST['category_id'];
  $category_name=$_POST['category_name'];
  $category_type=$_POST['category_type'];
  $query="INSERT INTO tbl-customer(category_name,category_id,category_type) values('$category_name','$category_id','category_type)";
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
    <title>SIGN UP</title>
    
    <link rel="stylesheet"href="SignUp.css">
</head>
<body>
    <nav class="nav">
        <h1>SIGN UP</h1>
        <form method = "POST">
            <label1 for="">First Name:</label1>
            <input type="text" Name="FName" id="" placeholder="Enter First Name"/></br>
            <label1 for="">Last Name:</label1>
            <input type="text" Name="LName" id="" placeholder="Enter Second Name"/></br>
            <label1 for="">Email Address:</label1>
            <input type="Email" Name="EMAIL" id="" placeholder="Enter Email Address"/></br>
            <label1 for="">password:</label1>
            <input type="password" Name="password" id="" placeholder="Enter password"/></br>
            <p>Dob:<input type="date" name=""size="10"></p>
        <button>Submit</button>
        <a href="home.html" style="color: red; font-style: 15px;">Back to Home</a>
        </form>
    </nav>
</body>




