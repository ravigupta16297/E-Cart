<?php
session_start();
$name=$_POST['name'];
$pass=$_POST['pass'];
?>

<?php
if($name==null)
{?>
<script>alert("enter the username");</script>
<?php
header('location:http://localhost/shop/shop.php');
}
?>
<html>
<head>
<metaname="viewport" content="width=device-width, initial-scale:1">
<style>
*{
text-decoration:none;
}
.h1{
background-color:white;
height:60px;
}

.ul{
list-style-type:none;
}
 
.ul li{
display:inline;
font-size:40px;
padding:0px 35px;
}
.img1{
margin-left:30px;
margin-top:25px;
padding:0px 240px;
}

.table{
margin-top:-20px;
margin-left:100px;
}
.table th{
font-size:30px;
text-align:center;
}
.table th td{
  border:2px solid black;
}
.ul li ul li{
display:blocks;

}
.ul li ul{
display:none;
}
.ul li:hover .ul li ul 
{
display:blocks;
}
#foot{
width:100%;
height:70px;
background-color:white;
margin-top:25px;
}

#foot a{
font-size:40px;
text-align:center;
}
.table:hover{
color:red;
}

</style>
</head>
<body style="background-color:pink">

<h1 style="text-align:center;color:blue">
<?php
echo "Welcome $name"?><br/>
<h1 style="text-align:center"> RV-CART WELCOMES YOU</h1>
<header class="h1">
<ul class="ul">
<li> Home</li>
<li> Mens</li>
<li> Kids</li>
<li> Women</li>

</ul>
</header>
<div class="img1">
<img src="shop.jpg" style="width:100%;height:350px">
<p style="text-align:center;font-size:30px;">latest Arrivals Waiting!!!</p>
</div>
<table class="table">
<tr>
<tr><p' style="margin-left:99px;font-size:25px">Click On the Links Below To Enter Into The Section:-</P></tr>
<th style="margin-top:-10px"><a href="men.php">Mens</a></th>
</tr>
<tr>
</tr>
<tr>
<td><img src="men.jpg" style="width:180px;height:150px"></td>

<td><img src="men2.jpg" style="width:180px;height:150px"></td>

<td><img src="men3.jpg" style="width:180px;height:150px"></td>

<td><img src="men4.jpg" style="width:180px;height:150px"></td>
</tr>

<tr>
<th><a href="women.php">Women</a></th>
</tr>
<tr>
<td><img src="women.jpg" style="width:180px;height:150px"> </td>
<td><img src="women1.jpg" style="width:180px;height:150px"> </td>
<td><img src="women2.jpg" style="width:180px;height:150px"> </td>
<td><img src="women3.jpg" style="width:180px;height:150px"> </td>
</tr>

<tr>
<th><a href="kid.php">Kids</a></th>
</tr>
<tr>
<td> <img src="kid.jpg" style="width:180px;height:150px"></td>
<td> <img src="kid2.jpg" style="width:180px;height:150px"></td>
<td> <img src="kid3.jpg" style="width:180px;height:150px"></td>
<td> <img src="kid4.jpg" style="width:180px;height:150px"></td>
</tr>
</table>
</body>
<footer id="foot">
<a href="contact.php"><p style="padding:0px 80px">Contact-me</p></a>
<?php
$_SESSION['name']=$name;
?>
</footer>

</html>