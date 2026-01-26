
<html>
<head>
<title>Restaurant Website</title>
<link rel="stylesheet" href="css/style.css">
<style>
  input[type=submit] {
    background-color: orange;
    padding:7px;
    border-radius:10px;
    color: black;
    cursor:pointer;
    text-decoration:none;
    font-weight: bold;
  }
  </style>
<body>
 <!-- Navbar Section Starts Here -->
 <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.jpeg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="addtocart.php">MY CART</a>
                    </li>
                    <li>
                        <a href="userlogin.php">LOGOUT</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>


<section class="food-search text-center">
        <div class="container">
        <h2><a href="#" class="text-white">My Shopping Cart!</a></h2>
        </div>
    </section>
<br>



<?php

session_start();

if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "food_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'food_image' => $_POST["hidden_image"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>alert("Food added to cart")</script>';
echo '<script>window.location="addtocart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="addtocart.php"</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'food_image' => $_POST["hidden_image"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}


//to remove food item
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["food_id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="addtocart.php"</script>';
}
}
}
}
?>


<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <center>
  
<table align="center" bgcolor="white" border="4">
<tr>
<th>Food Image</th>
<th>Food Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Total</th>
<th>Action</th>
</tr>

<?php  
$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><img src="images/<?php echo $values["food_image"]; ?>" height=60 width=60></td>
<td><?php echo $values["food_name"] ?></td>
<td><?php echo $values["food_quantity"] ?></td>
<td>&#8377; <?php echo $values["food_price"]; ?></td>
<td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
<td><a href="addtocart.php?action=delete&id=<?php echo $values["food_id"]; ?>"><span class="text-danger">Remove</span></a></td>
</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
</tr>
</table>
<br>
<form action="index.php" method="post" align="35px">
<input type="submit" value="ADD MORE..."/>
</form>
<br>
<form action="payment.php" method="post">
<input type="submit" value="ORDER NOW"/>
</form>
<br>
</div>
<br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        
        <h3><center>Cart is empty! Go back and <a href="index.php">order now.</a></h3>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>
</center>
</body>
</head>
</html>