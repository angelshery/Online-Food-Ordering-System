<?php
include("connection.php");
if(isset($_POST['register']))
{
$Username=($_POST['username']);
$Email=($_POST['email']);
$Contact=($_POST['contact']);
$Place=($_POST['place']);
$Password=($_POST['password']);
$query="insert into user_register(Username,Email,Contact,Place,Password)values('$Username','$Email','$Contact','$Place','$Password')";
$result=mysqli_query($con,$query);
if($result)
{
echo "New record created successfully !";
header("location:userlogin.php");
}
}
?>