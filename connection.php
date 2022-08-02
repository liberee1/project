<?php
$user = "localhost";
$name = "root";
$pass = "";
$db = "onlineshoppping";

$con = mysqli_connect($user,$name,$pass,$db);
if($con){
    echo "connected";
}else{
    echo "not connected";
}
?>