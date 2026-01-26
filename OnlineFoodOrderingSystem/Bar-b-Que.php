<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

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
                        <a href="homepage.php">LOGOUT</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
     
    <?php 
    include("connection.php");
        //CHeck whether id is passed or not
        if(isset($_GET['rest_id']))
        {
            //Category id is set and get the id
            $rest_id=$_GET['rest_id'];
            // Get the CAtegory Title Based on Category ID
            $sql="SELECT Rname FROM restaurant_register WHERE Rid=$rest_id";

            //Execute the Query
            $res=mysqli_query($con,$sql);

            //Get the value from Database
            $row = mysqli_fetch_array($res);
            //Get the TItle
            $rname = $row['Rname'];
        }
        else
        {
            //CAtegory not passed
            //Redirect to Home page
            //header('location:index.php');
        }
    ?>

 
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
        <h2><a href="#" class="text-white"><?php echo $rname; ?> Restaurant</a></h2>
        </div>
    </section>
    

    <!-- fOOD MEnu Section Starts Here -->
	<form action="addtocart.php" method="post">
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php 
                  include("connection.php");
                //Create SQL Query to Get foods based on Selected Restaurant
                $sql2= "SELECT * FROM food_table WHERE Rid in(select Rid from restaurant_register where Rid=$rest_id) order by Fid";

                //Execute the Query
                $res2=mysqli_query($con,$sql2);

                //Count the Rows
                $count2=mysqli_num_rows($res2);

                //CHeck whether food is available or not
                if($count2>0)
                {
                    //Food is Available
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        $fid = $row2['Fid'];
                        $name = $row2['Fname'];
                        $price = $row2['Price'];
                        $description = $row2['Description'];
                        $image_name = $row2['Image'];
                        ?>

            <div class="food-menu-box">
                <div class="food-menu-img">
                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                ?>
                <img src="images/<?php echo $image_name; ?>" class="img-responsive img-curve">
                <?php
                                    }
                                ?>
                </div>
 
                <form method="post" action="addtocart.php?action=add&id=<?php echo $fid; ?>">
                <div class="food-menu-desc">
                    <h4><?php echo $name; ?></h4>
                    <p class="food-price">&#8377; <?php echo $price; ?></p>
                    <p class="food-detail"><?php echo $description; ?></p>
					<br>
					<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
                    <input type="hidden" name="hidden_name" value="<?php echo $name; ?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $price; ?>">
                    <input type="hidden" name="hidden_image" value="<?php echo $image_name; ?>">
                    <br>
                    <input type="submit" name="add" class="btn btn-primary" value="Add to Cart">
                </div>
                </form>
            </div>
            <?php
                    }
                }
                else
                {
                    //Food not available
                    echo "<div class='error'>Food not Available.</div>";
                }
            
            ?>

            <div class="clearfix"></div>
        </div>
    </section>
	</form>
	
    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Jaimol&Angel</a></p>
        </div>
    </section>
</body>
</html>