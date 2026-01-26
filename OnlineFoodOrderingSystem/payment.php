<html>
<head>
<style>
body{
	background-color:blueviolet;
	background-repeat:no-repeat;
	background-position:center;
	background-size:50%;
	}
	input[type=submit]
{
	background-color:orange;
	border-radius:10px;
	width:189px;
	padding:7px;
	cursor:pointer;
	font-size:20px;
	font-family:Georgia;
	font-weight:bold;
	
}
	</style>
<body>
<?php
include("connection.php");
session_start();

	$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
   $username = $_SESSION["username"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO order_table (Fid,Name,Price,Quantity,Total,Username,Date) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $total . "','" . $username . "','" . $order_date . "')";
             

              $success = mysqli_query($con,$query);        

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }

?>

<br><br><br>
<h1><center><big>Choose your Payment Option</center></big></h1>
<br><br>
<center><h2>Grand Total: &#8377;<?php echo "$gtotal"; ?>/-<h2>
<br><br>
<form action="payonline.php" method="post">
<input type="submit" name="pay_online" value="Pay Online"/>
</form>
<form action="successful.php" method="post">
<input type="submit" name="cash_on_delivery" value="Cash on Delivery"/></form>
</center>
<br><br>

</body>
</head>
</html>