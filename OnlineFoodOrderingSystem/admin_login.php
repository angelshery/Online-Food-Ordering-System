<?php
   include("connection.php");
   session_start();
   
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $myusername =($_POST['username']);
      $mypassword =($_POST['password']); 
      
      $sql = "SELECT Id FROM admin_login WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['username'] = $myusername;
         header("location: admin_home.php");
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
   background-image:url("images/adminhome.jpeg");
	background-repeat:no-repeat;
	background-size:100%;
	background-position:center;
	
}
a:visited{
	color:cyan;
}
.admin_login
{
	text-align:center;
	width:400px;
	padding:20px;
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
<br><br><br><br><br><br>
<div class="admin_login">
<h1><center>ADMIN LOGIN</center></h1>
<form action="" method="POST">
<center>Username:<input type="text" name="username"/>
<br><br>
Password:<input type="password" name="password"/>
<br><br>
<input type="submit" name="login" value="Login"/>
</a>
<br><br>
<a href="forgot.php">Forgot password?</a></center>
</form>
</div>
</body>
</head>
</html>
