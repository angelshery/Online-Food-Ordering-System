<?php
   include("connection.php");
   
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $myusername =($_POST['username']);
      $mypassword =($_POST['password']); 
      
      $sql = "SELECT Uid FROM user_register WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         session_start();
         $_SESSION['username'] = $myusername;
         header("location: index.php");
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
	background-repeat:no-repeat;
   background-image:url("images/admin1.jpeg");
	background-size:100%;
	background-position:center;
	
}
a:visited{
	color:cyan;
}
.user_login
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
<div class="user_login">
<h1><center>USER LOGIN</center></h1>
<form action="" method="post">
<center>Username:<input type="text" name="username"/>
<br><br>
Password:<input type="password" name="password"/>
<br><br>
<input type="submit" name="login" value="Login"/>
<br><br>
<a href="forgot.php">Forgot password?</a>
<h4>If not registered, please</h4>
<a href="userregister.php"><i>Sign in here..</i></a></center>
</form>
</div>
</body>
</head>
</html>