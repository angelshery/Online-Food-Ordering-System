<?php
include("connection.php");
if(isset($_GET['id']))
{
$rid=$_GET['id'];
$query="delete from restaurant_register where Rid=$rid";
$result=mysqli_query($con,$query);
if($result)
{
    echo "Restaurant deleted successfully";
    header("location:rest_list.php");

}
}
?>