
<?php
include("connection.php");
if(isset($_POST['add_food']))
{
$name=($_POST['food_name']);
$price=($_POST['food_price']);
$description=($_POST['food_description']);
$filename=($_FILES['file_upload']['name']);
$rid=($_POST['rest_id']);
$query="INSERT INTO food_table(Fname,Price,Description,Rid,Image)VALUES('$name','$price','$description','$rid','$filename')";
$result=mysqli_query($con,$query);
if($result) 
{
		echo "New food inserted !";
} 
}
?>