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
<center><h1>ORDER LIST</h1>
<table border="1px">
<?php
include("connection.php");
$query="select * from order_table order by Oid";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
?>
	<thead>
		<tr>
		     <th>OID</th>
			 <th>FID</th>
		     <th>NAME</th>
		     <th>PRICE</th>
		     <th>QUANTITY</th>
		     <th>TOTAL</th>
		     <th>USERNAME</th>
			 <th>DATE</th>
		</tr>
	</thead>
	<?php 

	while($row=mysqli_fetch_array($res))
	{

	?>
	<tbody>
		<tr>
		      <td><?php echo $row["Oid"]; ?></td>
		      <td><?php echo $row["Fid"]; ?></td>
		      <td><?php echo $row["Name"]; ?></td>
		      <td><?php echo $row["Price"]; ?></td>
		      <td><?php echo $row["Quantity"]; ?></td>
			  <td><?php echo $row["Total"]; ?></td>
			  <td><?php echo $row["Username"]; ?></td>
			  <td><?php echo $row["Date"]; ?></td>
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
