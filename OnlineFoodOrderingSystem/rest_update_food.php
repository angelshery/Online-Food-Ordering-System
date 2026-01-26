<html>
<head>
	<title>Update Food</title>
<style>
body{
	background-image:url("images/abc.jpg");
	background-repeat:no-repeat;
	background-size:100%;
	background-position:center;
	}
.btn-secondary {
  background-color: lightgreen;
  padding: 1%;
  color: black;
  text-decoration:none;
  font-weight: bold;
}
</style>
<body>
<div id="menu" align="middle">
<a href="rest_home_page.php">HOME</a>|
<a href="rest_login.php">LOGOUT</a>
</div>
<br><br>
<table align="center" bgcolor="white" border=6>
<h2><b><u><center>UPDATE YOUR FOOD LIST<center></u></b></h2>
<?php

include("connection.php");
$query="select * from food_table where Rid in(select Rid from restaurant_register) order by Fid";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
	?>
<thead>
<tr>
<th>Food Id</th>
<th>Food Name</th>
<th>Food Price</th>
<th>Food Description</th>
<th>Restaurant Id</th>
<th>Food Image</th>
<th>Action</th>
</tr>
</thead>

<?php 

	while($row=mysqli_fetch_array($res))
	{

	?>
		
 <tbody>       
<tr>
<td><?php echo $row["Fid"]; ?></td>
<td><?php echo $row["Fname"]; ?></td>
<td><?php echo $row["Price"]; ?></td>
<td><?php echo $row["Description"]; ?></td>
<td><?php echo $row["Rid"]; ?></td>
<td><img src="images/<?php echo $row['Image']; ?>" width=100 height=100/></td>
<td><a href="update_food.php?id=<?php echo $row['Fid']; ?>" class="btn-secondary">UPDATE</a></td>
	</tr>
	</tbody>
	<?php } ?>
	</table>
	<?php } else { ?>
		<h4><center>0 RESULTS</center><h4>
			<?php } ?>
</body>
</head>
</html>