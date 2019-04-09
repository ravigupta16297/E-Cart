<html>
<head>
<?php 
session_start();
global $num;
global $row;
?>
<style>
*{
text-decoration:none;
}
ul li{
display:inline;
float:left;
}
.h1{
width=100%;
height:100px;
background-color:brown;
}
table
{
margin-left:199px;
margin-top:70px;
}
table th{
margin-left:60px;
position:relative;
}
table:hover
{
}
.total{
width:450px;
height:35px;
background-color:white;
margin-top:20px;
margin-left:420px;
border-style:solid;
margin-top:2px;
}
.total:hover
{
color:red;
}
.delivery
{
width:450px;
height:25px;
background-color:white;
margin-top:20px;
margin-left:420px;
}
.foot{
background-color:white;
width=100%;
height:75px;
margin-top:45px;
margin-right:0px;
margin-left:0px;
}
.pay{
text-align:center;
text-size:45px;

}
</style>
</head>
<title>CART</title>
<body style="background-color:pink">
<header class="h1">
<h1 style="text-align:center">WELCOME TO CART-SECTION <?php echo $_SESSION['name']?></h1>
<ul>
<li style="margin-left:-40px;margin-top:20px;"><form  method="post"><button type="submit" name="clear">Clear-cart</form></li>
<li style="margin-left:40px;margin-top:20px;"><form  method="post" action="men.php"><button type="submit" name="clear">Men-Section</form></li>
<li style="margin-left:40px;margin-top:20px;"><form  method="post" action="women.php"><button type="submit" name="clear">Women-Section</form></li>
<li style="margin-left:40px;margin-top:20px;"><form  method="post" action="kid.php"><button type="submit" name="clear">Kids-Section</form></li>
<li style="margin-left:390px;margin-top:20px;"><form  method="post" action="logout.php"><button type="submit" name="clear">Logout</form></li>
</ul>
</header>
<?php 
if(isset($_POST["men"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(1,'JohnPlayer(cotton)',1,999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/men.php');
}

if(isset($_POST["men2"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(2,'Wrangler(Fabric)',1,1999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/men.php');

static $x=0;
$x++;
}
if(isset($_POST["men3"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(3,'Wrogn(cotton-shirt)',1,2999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/men.php');

}
if(isset($_POST["men4"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(4,'Mufti(pure fabric)',1,3999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/men.php');
}
if(isset($_POST["cart"]))
{
global $row;
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="select * from input";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
if($num >0)
{
while($row=mysqli_fetch_assoc($res))
{

?>
<table>
<tr>

<th style="padding:0px 30px">P-ID</th><th style="padding:0px 30px">P-NAME</th><th style="padding:0px 30px">QUANTITY</th>
<th style="padding:0px 30px">PRICE(for each piece)</th>
</tr>
<tr>
<td style="padding:0px 30px"><?php echo $row['pid'];?></td><td style="padding:0px 30px"><?php echo $row['name'];?></td>
<td style="padding:0px 70px"><?php echo $row['quantity'];?></td><td style="padding:0px 30px"><?php echo $row['price'];?></td>
</tr>
</table>
<?php
}
}
else
{
?><script> alert("your cart is empty");</script>
<?php

}
}
?>
</body>
<?php
if(isset($_POST["clear"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="delete from input";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/cart.php');
}
?>
<?php
if($num > 0)
{
total();
}
function total()
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="select sum(price) from input";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
if($num> 0)
{
while($row=mysqli_fetch_assoc($res))
{?>
<div class="delivery"><p style="margin-left:290px;color:blue">Delivery charge= 0rs</p></div>
<div class="total"><p style="margin-left:270px;margin-top:1px">TOTAL-PRICE : <?php echo $row['sum(price)'];?>rs</p></div>
<?php
}
}
}
?>







<?php 
if(isset($_POST["women"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'id7152442_store');
$q="insert into input(pid,name,quantity,price) values(5,'BIBA SUIT(cotton)',1,999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/women.php');
$ctr=$ctr+1;
}
if(isset($_POST["women1"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(6,'BIBA SUIT(cotton)',1,1999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/women.php');
}
if(isset($_POST["women2"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(7,'BIBA SUIT(cotton)',1,2999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/women.php');
}
if(isset($_POST["women3"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(8,'BIBA SUIT(cotton)',1,3999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/women.php');
}
?>










<?php
 
if(isset($_POST["kid"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(9,'Jinny&Jonny(cotton)',1,999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/kid.php');
$ctr=$ctr+1;
}
if(isset($_POST["kid2"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(10,'Jinny&Jonny(cotton)',1,1999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/kid.php');
}
if(isset($_POST["kid3"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(11,'Jinny&Jonny(cotton)',1,2999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/kid.php');
}
if(isset($_POST["kid4"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q="insert into input(pid,name,quantity,price) values(12,'Jinny&Jonny(cotton)',1,3999)";
$res=mysqli_query($con,$q);
header('location:http://localhost/shop/kid.php');
}
?>
<footer class="foot">
<div class="pay">
<a href="#">Click here to give your feedback</a>
</div>
</footer>
</body>
</html>