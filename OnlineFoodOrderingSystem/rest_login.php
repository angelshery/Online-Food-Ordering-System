<?php
   include("connection.php");
   session_start();
   
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $myusername =($_POST['email']);
      $mypassword =($_POST['password']); 
      
      $sql = "SELECT Rid FROM restaurant_register WHERE Remail = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['email'] = $myusername;
         header("location: rest_home_page.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>






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
.rest_login
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
<div class="rest_login">
<h1><center>RESTAURANT LOGIN</center></h1>
<form action="" method="post">
<center>Email <input type="text" name="email"/>
<br><br>
Password <input type="password" name="password"/>
<br><br>
<input type="submit" name="login" value="Login"/>
</a>
<br><br>
<a href="forgot.php">Forgot password?</a>
<h4>If not registered, please</h4>
<a href="rest_register.php"><i>Sign in here..</i></a></center>
</form>
</div>
</body>
</head>
</html>