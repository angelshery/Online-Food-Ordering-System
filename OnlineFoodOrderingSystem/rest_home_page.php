<html>
<head>
<title>Restaurant Zone</title>
<style>
body{
	background-image:url("images/abc.jpg");
	background-repeat:no-repeat;
	background-size:100%;
	background-position:center;
	
}
h1{
	font-family:Georgia;
}
input[type=submit]
{
	font-size:23px;
	background-color:skyblue;
	margin:3px;
	border-radius:5px;
	cursor:pointer;
	font-family:Comic Sans MS;
}
</style>
<body><big><big>
<div id="menu" align="middle">
<a href="rest_home_page.php">HOME</a>|
<a href="rest_login.php">LOGOUT</a>
</div>
</big></big><big><big>
<br><br>
<center><h1>WELCOME TO RESTAURANT ZONE </h1>
<a href="add_food.php">
<input type="submit" name="ADD_FOOD_ITEMS" value="ADD  FOOD  ITEMS"/>
</a>
<br>
<a href="rest_view_food.php">
<input type="submit" name="VIEW_FOOD_ITEMS" value="VIEW  FOOD  ITEMS"/>
</a>
<br>
<a href="rest_update_food.php">
<input type="submit" name="UPDATE_FOOD_ITEMS" value="UPDATE  FOOD  ITEMS"/>
</a>
</center>
</body>
</head>
</html>
