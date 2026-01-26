<?php
include("connection.php");
if(isset($_POST['register']))
{
$Rname=($_POST['rname']);
$Remail=($_POST['email']);
$Rcontact=($_POST['contact']);
$Place=($_POST['place']);
$Password=($_POST['password']);
$query="insert into restaurant_register(Rname,Remail,Rcontact,Place,Password)values('$Rname','$Remail','$Rcontact','$Place','$Password')";
$result=mysqli_query($con,$query);
if($result) 
{
		echo "New record created successfully !";
		header("location:rest_login.php");
} 
}
?>