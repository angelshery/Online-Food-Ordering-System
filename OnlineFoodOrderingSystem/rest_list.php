<html>
<head>
<style>
body{
	background-image:url("images/admin.jpg");
	background-repeat:no-repeat;
	background-size:100%;
	background-position:center;
	
}
.btn-danger {
  background-color: #ff6b81;
  padding: 1%;
  color:black;
  text-decoration: none;
  font-weight: bold;
}
</style>
<body><big><big>
<div id="menu" align="middle">
<a href="rest_list.php">RESTAURANTS</a>|
<a href="user_list.php">USERS</a>|
<a href="order_list.php">ORDERS</a>|
<a href="admin_login.php">LOG OUT</a>
</div>
</big></big>
<br><br>
<center><h1>RESTAURANT LIST</h1>
<table border="1px">
<?php
include("connection.php");
$query="select * from restaurant_register order by Rid";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
?>
	<thead>
		<tr>
		     <th>R_ID</th>
		     <th>RESTAURANT NAME</th>
		     <th>E-MAIL</th>
		     <th>CONTACT</th>
		     <th>PLACE</th>
		     <th>ACTION</th>
		</tr>
	</thead>
	<?php 

	while($row=mysqli_fetch_array($res))
	{

	?>
	<tbody>
		<tr>
		      <td><?php echo $row["Rid"]; ?></td>
		      <td><?php echo $row["Rname"]; ?></td>
		      <td><?php echo $row["Remail"]; ?></td>
		      <td><?php echo $row["Rcontact"]; ?></td>
		      <td><?php echo $row["Place"]; ?></td>
              <td><a href="delete_rest.php?id=<?php echo $row['Rid']; ?>" class="btn-danger">DELETE</a></td>
		</tr>
			
	</tbody>
	<?php } ?>
</table>
<?php } else { ?>
		<h4><center>0 RESULTS</center><h4>
			<?php } ?>
<br><br>
<a href="admin_home.php">Back</a>
</center>
</body>
</head>
</html>
