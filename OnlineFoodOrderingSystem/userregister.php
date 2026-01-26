<html>    
<head>
<style>
body{
	color:white;
	background-repeat:no-repeat;
	background-image:url("images/admin1.jpeg");
	background-size:100%;
	background-position:center;
	
}
a:visited{
	color:cyan;
}
.user_register
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
<body>
<div class="user_register">
<h1><center>USER REGISTRATION</center></h1>
<form action="userconnect.php" method="post">
<center>Username:<input type="text" name="username"/>
<br><br>
Email:<input type="text" name="email"/>
<br><br>
Password:<input type="password" name="password"/>
<br><br>
Confirm Password:<input type="password" name="password"/>
<br><br>
Contact:<input type="text" name="contact"/>
<br><br>
Place:<input type="text" name="place"/>
<br><br>
<input type="submit" name="register" value="Register"/>
<h4>If you've registered, please</h4>
<a href="userlogin.php"><i>Login here..</i></a></center>
</form>
</div>
</body>
</head>
</html>