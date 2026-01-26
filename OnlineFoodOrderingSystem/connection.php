<?php
$server="localhost";
$user="root";
$password="";
$db_name="food";
$con=mysqli_connect("$server","$user","$password","$db_name");
if(!$con){ 
die("Could not connect to mysql"); 
}

?>