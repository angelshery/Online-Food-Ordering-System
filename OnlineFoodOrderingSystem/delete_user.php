<?php
include("connection.php");
if(isset($_GET['id']))
{
$uid=$_GET['id'];
$query="delete from user_register where Uid=$uid";
$result=mysqli_query($con,$query);
if($result)
{
    echo "Data deleted successfully";
    header("location: user_list.php");
}
}
?>