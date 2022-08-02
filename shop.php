
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
  $query="INSERT INTO product(Product_name,seller_name) values('$seller_name','$Product_name')";
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
<html>
    <head>MY FORM</head>
    <body>
    <form method="POST">
<p>ProductN:<input type="text" name="Product_name"size="10"></p>
<p>SELLERN:<input list="district" name="seller_name"size="10"></p>
<p>SUBMIT:<input type="submit" name="BIIKA"value="send"size="10"></p>
<p>RETRIEVE:<input type="submit" name="BIKURA"value="get"size="10"></p>
</form>
</body>
</html>