<?php
session_start();
$con=mysqli_connect('localhost','root', '');
mysqli_select_db($con,'store');
$q="delete from input";
$res=mysqli_query($con,$q);
session_destroy();
header('location:http://localhost/shop/shop.php');

?>
