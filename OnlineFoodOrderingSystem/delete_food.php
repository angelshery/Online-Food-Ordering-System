<?php
include("connection.php");
if(isset($_GET['id']))
{
$fid=$_GET['id'];
$query="delete from food_table where Fid=$fid";
$result=mysqli_query($con,$query);
if($result)
{
    echo "Food deleted successfully";
    header("location: rest_view_food.php");
}
}
?>