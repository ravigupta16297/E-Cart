<?php session_start();
?>
<html>
<head>
<style>
h1{
text-align:center;
}
.detail{
width:100%;
height:400px;
background-color:white;
border-style:solid;
border-radius:10px;
}
</style>
</head>
<body style="background-color:pink">
<h1><?php echo "Welcome To Contact Page $_SESSION[name]"?>
</h1>
<div class="detail">
<p>
</div>
</body>
</html>