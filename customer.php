
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
    $query="INSERT INTO customer(category_name,category_id,category_type) values('$category_name','$category_id','category_type)";
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
<p>category_type:<input type="text" name="category_type"size="10"></p>
<p>category_name:<input list="text" name="category_name"size="10"></p>
<p>category_id:<input list="text" name="category_name"size="10"></p>
<p>SUBMIT:<input type="submit" name="BIIKA"value="send"size="10"></p>
<p>RETRIEVE:<input type="submit" name="BIKURA"value="get"size="10"></p>
</form>
</body>
</html>