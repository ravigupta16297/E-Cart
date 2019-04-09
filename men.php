<?php 
session_start();
?> 
<html>
<head>
<title>MEN</title>
<style>
*{
text-decoration:none;
}
ul{
list-style-type:none;
font-size:27px;
}
ul li{
float:left;
display:inline;
color:blue; 
}
ul li:hover
{
color:black;
}
ul li ul li
{
display:blocks;
}
ul li ul li{
display:none;
}
ul li:hover 
{
color:red;
}
h1{
text-align:center;
font-size:40px;
color:black;
}
.cart{
float:left;
width:250px;
height:50px;
}
table th{
font-size:20px;
color:black;
margin-left:100px;
border-style:solid;
border-width:1px;
border-radius:10px;
padding:20px 0px;
}
table td{
margin-left:200px;
}
.h1{
background-color:white;
width:100%;
height:100px;
}
.foot{
background-color:white;
width:100%;
height:70px;
margin-top:20px;
}
table th td:hover div .men{
display:blocks;
}
</style>
<header class="h1">
<h1>
<?php
echo "Welcome to Men Section $_SESSION[name]";
?>
<ul>
<li style="margin-top:4px;margin-left:-40px"><form  method="post" action="women.php"><button type="submit" name="clear">Women-Section</form></li>
<li style="margin-left:40px;margin-top:4px"><form  method="post" action="kid.php"><button type="submit" name="clear">Kids-Section</form></li>
<li style="margin-left:40px;margin-top:4px"><form  method="post" action="cart.php"><button type="submit" name="cart">View-Cart</form></li>
<li style="margin-left:40px;margin-top:4px"><form  method="post" action="logout.php"><button type="submit" name="cart">Logout</form></li>
</ul>
</header>
</head>
<title>
</title>
<body style="background-color:pink">
<img src="men5.jpg" style="width:100%;height:400px;margin-top:30px">
<table>

<tr><td><img src="men.jpg" style="width:300px;height:300px;margin-top:30px;"><div class="men"></div></td>
</tr>
<th id="1">(1)John-players(Rs 999/-)<br/><br/><form method="post" action="cart.php"><button type="submit" name="men" value="Add to cart" style="width:120px;height:20px;">Add To cart</form></th>
<tr><td><img src="men2.jpg" style="width:300px;height:300px;margin-top:30px"></td>
</tr>

<th id="2">(2)Wrangler(Rs 1999/-)<br><br> <form method="post" action="cart.php"><button type="submit" name="men2" value="Add to cart" style="width:120px;height:20px;">Add To cart</form></th>
<tr><td><img src="men3.jpg" style="width:300px;height:300px;margin-top:30px"></td>
</tr>
<th id="3">(3)Wrogn(Rs 2999/-)<br><br><form method="post" action="cart.php"><button type="submit" name="men3" value="Add to cart" style="width:120px;height:20px;">Add To cart</form></th>
<tr><td><img src="men4.jpg" style="width:300px;height:300px;margin-top:30px"></td>
</tr>
<th id="4">(4)Mufti(Rs 3999/-)<br><br><form method="post" action="cart.php"><button type="submit"  name="men4" value="Add to cart" style="width:120px;height:20px;"></form>Add To cart</th>
</table>
</body>
<footer class="foot">
<p style="text-align:center;margin-top:50px">All rights reserved</p>


</footer>
</html>
