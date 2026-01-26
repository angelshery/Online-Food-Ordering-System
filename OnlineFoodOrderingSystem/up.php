<?php
include("connection.php");
if(isset($_POST['update'])) {
$id=($_POST['fid']);
$Fname=($_POST['fname']);
$Price=($_POST['price']);
$Description=($_POST['description']);
$filename=($_FILES['file_upload']['name']);
$Rid=($_POST['rest_id']);

$query="UPDATE food_table SET Fname='$Fname',Price='$Price',Description='$Description',Image='$filename',Rid='$Rid' where Fid='$id'";
$result=mysqli_query($con,$query);
if($result) 
{
		echo '<script>alert("Food updated successfully!")</script>';
		header("location:rest_update_food.php");
} 
}

?>



