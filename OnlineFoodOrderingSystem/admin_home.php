
<html>
<head>
<style>
body{
	background-image:url("images/admin.jpg");
	background-repeat:no-repeat;
	background-size:100%;
	background-position:center;
	
}
.col-div-3{
  width:25%;
  float:left;
}
.box1{
  width:75%;
  height:150px;
  background-color:red;
  margin-left:10px;
  padding:15px 15px;
  box-shadow:4px 8px 20px grey;
}
.box2{
  width:75%;
  height:150px;
  background-color:lightblue;
  margin-left:10px;
  padding:15px 15px;
  box-shadow:4px 8px 20px grey;
}
.box3{
  width:75%;
  height:150px;
  background-color:lightgreen;
  margin-left:10px;
  padding:15px 15px;
  box-shadow:4px 8px 20px grey;
}
.box1 p{
  font-size:35px;
  color:black;
  font-weight:bold;
  line-height:30px;
  padding-left:10px;
  margin-top:20px;
  display:inline-box;
}
.box2 p{
  font-size:35px;
  color:black;
  font-weight:bold;
  line-height:30px;
  padding-left:10px;
  margin-top:20px;
  display:inline-box;
}
.box3 p{
  font-size:35px;
  color:black;
  font-weight:bold;
  line-height:30px;
  padding-left:10px;
  margin-top:20px;
  display:inline-box;
}
</style>
<title>Admin Dashboard</title>
<body><big><big>
<div id="menu" align="middle">
<a href="rest_list.php">RESTAURANTS</a>
<a href="user_list.php">USERS</a>
<a href="order_list.php">ORDERS</a>
<a href="admin_login.php">LOG OUT</a>
</div>
<br><br>

<h1><center>WELCOME ADMIN!</center></h1>
<br><br>
<div id="menu" align="right">
        <div class="col-div-3">
        <div class="box1"><center>
          <?php
          include("connection.php");
          $query="SELECT Rid from restaurant_register order by Rid";
          $res=mysqli_query($con,$query);
          $row=mysqli_num_rows($res);
          echo '<p>'.$row.'</p>';
          ?>
         <h3>Total Restaurants<h3></center>
        </div>
        </div>
        <div class="col-div-3">
        <div class="box2"><center>
        <?php
          include("connection.php");
          $query="SELECT Uid from user_register order by Uid";
          $res=mysqli_query($con,$query);
          $row=mysqli_num_rows($res);
          echo '<p>'.$row.'</p>';
          ?>
          <h3>Total Users</h3> </center> 
        </div>
        </div>      
        <div class="col-div-3">
        <div class="box3"><center>
        <?php
          include("connection.php");
          $query="SELECT Oid from order_table order by Oid";
          $res=mysqli_query($con,$query);
          $row=mysqli_num_rows($res);
          echo '<p>'.$row.'</p>';
          ?>
        <h3>Confirmed Orders</h3></center>
        </div> 
        </div>
</div> 
</body>
</head>
</html>

