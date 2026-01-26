<html>
<head>
<title>Add Food</title>
<style>
body{
	background-image:url("images/abc.jpg");
	background-repeat:no-repeat;
	background-size:100%;
	background-position:center;
	
}
input[type=submit]
{
	font-size:17px;
	background-color:skyblue;
	margin:3px;
	border-radius:5px;
	cursor:pointer;
	font-family:Comic Sans MS;
}
</style>
<body>
<div id="menu" align="middle"><big><big>
<a href="rest_home_page.php">HOME</a>|
<a href="rest_login.php">LOGOUT</a>
</big></big></div>
<br><br>
<fieldset>
<h1><center>ADD YOUR FOOD</center></h1>
<form action="addf.php" method="post" enctype="multipart/form-data">
<center>Food Name <input type=text name="food_name"/>
<br><br>
Food Price <input type=text name="food_price"/>
<br><br>
Food Description <input type=text name="food_description"/>
<br><br>
Food Image <input type=file name="file_upload"/>
<br><br>
Restaurant ID <input type=text name="rest_id"/>
<br><br>
<input type=submit name="add_food" value="Add Food"/>
</center>
</fieldset>
</form>
</body>
</head>
</html>