<html>
<head>
<style>
body{
	color:white;
	background-image:url("images/rlogin.jpg");
	background-repeat:no-repeat;
	background-size:100%;
	background-position:center;
	
}
a:visited{
	color:cyan;
}
.rest_regis
{
	text-align:center;
	width:400px;
	padding:10px;
	margin:auto;
	background-color:black;
}
input[type=submit]
{
	background-color:orange;
	border-radius:10px;
	width:160px;
	padding:7px;
	cursor:pointer;
	font-size:20px;
	font-family:Georgia;
	font-weight:bold;
	
}
</style>
</head>
<body>
<div class="rest_regis">
<h1><center>RESTAURANT REGISTRATION</center></h1>
<br><br>
<form action="connect2.php" method="post" enctype="multipart/form-data">
<center>Restaurant name:<input type="text" name="rname">
<br><br>
Email:<input type="text" name="email">
<br><br>
Password:<input type="password" name="password">
<br><br>
Confirm Password:<input type="password" name="password">
<br><br>
Contact:<input type="text" name="contact">
<br><br>
Place:<input type="text" name="place">
<br><br>
<input type="submit" name="register" value="Register">
<h4>If you've registered, please</h4>
<a href="rest_login.php"><i>Login here..</i></a></center>
</form>
</div>
</body>
</html>