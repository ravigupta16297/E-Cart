<html>
<head>
<title>shop</title>
<link rel="stylesheet" href="shop1.css">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.h1{
background-color:brown;
width:auto;
height:70px;
margin-top:-20px;
margin-left:-10px;
margin-right:-8px;
font-weight:30px;
border-radius:20px;
}
h1{
text-align:center;
}

#detail{
background-color:white;
width:250px;
height:250px;
position:relative;
border-radius:20px;
border-style:solid;
}
#detail:hover{
background-color:brown;
}
#last{
width:device-width;
height:90px;
background-color:white;

margin-top:120px;
}
.rv{
width:100%;
height:70px;
}
</style>
<header class="h1">
<h1 style="font-size:34px">WELCOME TO RV-CART</h1>
</header>

<body style="background-color:pink">

<h2>Enter The Detail to Login</h2>
<div id="detail">
<form action="shop1.php" method="post">
<h2 style="text-align:center">Details</h2>
<p style="margin-left:10px">Username</p>
<input type="text" name="name" style="margin-left:10px">
<p style="margin-left:10px">Password</p>
<input type="password" name="pass" style="margin-left:10px"><br/><br/>
<button type="submit" style="margin-left:10px">Submit</button>
</div>
</body>
<footer id="last">
<table>
<tr>
<th>RESOURCES</th>
<th>FEATURES</th>
<th>MORE</th>
</tr>
<tr>
<td>W3-school</td>
<td>You-Tube</td>
</tr>
<p style="text-align:center">All rights Resrved</p>
</footer>
</html>