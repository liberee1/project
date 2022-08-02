<?php
$_SERVER = "localhost";
$user ="root"<div class=";
$pass = "";
$db = "ebooking";
$scon = mysql_connect($server, $user, $pass, $db);
if($con){
    echo "byakunze";
}else{
    echo "ntibigerayo";.mysqli_error($con);
}
?>