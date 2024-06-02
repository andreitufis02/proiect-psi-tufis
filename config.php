<?php

$server = "localhost";
$username = "hotel_user";
$password = "password";
$database = "proiecthotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>