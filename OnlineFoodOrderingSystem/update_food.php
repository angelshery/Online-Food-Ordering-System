<html>
<head>
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
  
 <br><br>
      <?php
      include("connection.php");
      if(isset($_GET["id"]))
    {
      $id=$_GET["id"];
      $qry="select * from food_table where Fid=$id";
      $run=mysqli_query($con,$qry);
      while ($rows=mysqli_fetch_array($run))
      {
      ?>
    <fieldset>
    <h1><center>UPDATE FOOD</center></h1>
        <br>
    <form method="POST" action="up.php" enctype="multipart/form-data">
        <center>
                Food ID: <input type="text"  name="fid" value=<?php echo $rows['Fid'];?>>
              <br><br>
                Food Name: <input type="text"  placeholder="Item Name" name="fname" value=<?php echo $rows['Fname'];?>>
                   
                <br><br>
                Price: <input type="text" placeholder="Price" name="price" value=<?php echo $rows['Price'];?>>
                   
                <br><br>
                Description: <input type="text" placeholder="Description" name="description" value=<?php echo $rows['Description'];?>>
                   
                <br><br>
                Current Image: <img src="images/<?php echo $rows['Image']; ?>" width="100">
                <br><br>
                Select Food Image: <input type="file" name="file_upload">
                   
                <br><br>
                Restaurant ID: <input type="text" placeholder="Restaurant id" name="rest_id" value=<?php echo $rows['Rid'];?>>
                <br><br> 
              
              <input type="submit" name="update" value="Update"/>
      </center>
              </form>
      </fieldset>
      <?php }?>
      <?php }?>
  <div class="row" style="height: 20%; ">
    <div class="col-12"></div>
     
      </div>
</div>
</head>
</body>
</html>


