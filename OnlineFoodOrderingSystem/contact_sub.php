<?php
include("connection.php");
$Name=$_POST['myName'];
$Email=$_POST['myEmail'];
$Message=$_POST['mesg'];
$query="insert into contact(Name,Email,Message) values('$Name','$Email','$Message')";
$result=mysqli_query($con,$query);
if($result){
echo "Data inserted successfully";
}

?>

<html>
<body>
<h1><center>Thanks for the feedback!!!</center></h1>
</body>
</html>