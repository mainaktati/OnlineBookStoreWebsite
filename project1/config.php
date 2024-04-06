<?php
$server="localhost";
$username="root";
$password="";
$database="shop_db";

if(!$conn=mysqli_connect($server,$username,$password,$database)){
    die("failed to connect");
}

?>
