<?php
session_start();

if(isset($_POST["feedo"]))
{
$name=$_POST["name"];
$feed=$_POST["feed"];
$con=mysqli_connect('localhost','root', '');
mysqli_select_db($con,'store');
$q="insert into feedback(name,feedback)values('$name','$feed')";
$res=mysqli_query($con,$q);

header('location:http://localhost/shop/logout.php');
}
?>