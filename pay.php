<html>
<head>

<style>
#name{
margin-top:15px;
padding:10px 0px;
}
.h1{
background-color:tomato;
width:100%;
height:70px;
}
.feed:hover
{

}

.feed{
background-color:pink;
width:350px;
height:350px;
border-radius:10px;
margin-left:300px;
margin-top:90px;
padding:0px 70px;
}
</style>
<header class="h1">
<h1 style="text-align:center">FEEDBACK</h1>
</header>
</head>
<body style="background-color:red">

<div class="feed">
<form  method="post" action="pay1.php">
<p id="name">Name:-</p>
<input type="text" name="name" style="margin-top:-18px;">
<p id="feed">Feedback</p>
<input type="textarea" name="feed" style="width:300px;height:200px;">
<button type="submit" name="feedo" style="margin-top:4px;">Submit</button>
</form>
</div>

</body>
</html>