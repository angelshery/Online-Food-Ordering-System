<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
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
                        <a href="userlogin.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </section>
    <!-- Restaurants Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">EXPLORE RESTAURANTS</h2>

            <?php 
              include("connection.php");
             //Display all the cateories that are active
             //Sql Query
             $sql = "SELECT * FROM restaurant_register order by Rid";

             //Execute the Query
             $res = mysqli_query($con, $sql);

             //Count Rows
             $count = mysqli_num_rows($res);

             //CHeck whether restaurants available or not
             if($count>0)
            {
               //CAtegories Available
               while($row=mysqli_fetch_array($res))
               {
                    //Get the Values
                    $id = $row['Rid'];
                    $name = $row['Rname'];
                    ?>
        
        <a href="Bar-b-Que.php?rest_id=<?php echo $id; ?>">
            <div class="box-3 float-container">
                <img src="images/rest.jfif" class="img-responsive img-curve">
                <h3 class="float-text text-white"><?php echo $name; ?></h3>
            </div>
               </a>
             <?php
                    }
                }
                else
                {
                    //CAtegories Not Available
                    echo "<div class='error'>Category not found.</div>";
                }
            
            ?>
       
            <div class="clearfix"></div>
        </div>
    </section>

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