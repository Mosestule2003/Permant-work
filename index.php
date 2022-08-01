<?php 
    include('./config/constants.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cavana</title>
    <link rel="stylesheet" href="./css/styles3.css">
    <link rel="stylesheet" href="styles-srch.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
</head>
<body>
    <!-- navigation -->
    <header>
        <div class="navigation-bar">
            <div class="navigation-bar-top">
                <label for="logo" class="logo">Cavana</label>
            </div>
            <div class="nav-btn-container">
                <main>
                    <div class='container'>       
                   
                    </div>
                </main>
            <button class="nav-btn"><a href="logout.php">Log out</a></button>
            <a href="payement-page.php"><img src="images/landing-page-images/shopping_bag_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="nav-icon"></a>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        </div>
    </header>
    <div class="navigation-bottom">
        <ul class="nav-menu">
            <li class="nav-item"><a href="" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="catgories.php" class="nav-link">CATEGORIES</a></li>
            <li class="nav-item"><a href="" class="nav-link">SPECIALS</a></li>
            <li class="nav-item"><a href="" class="nav-link">CONTACT</a></li>
            <button class="nav-btn-hidden"><a href="logout.php">Log out</a></button>
        </ul>
    </div>
            <!-- navigation End-->

    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    <div class="body-content">
            <div class="page-one-content">
                <div class="content-one">
                    <div class="nested-one">
                        <div class="nested-container-one">
                        <h1>A PREMIUM<br><span> AND AUTHENTIC</span><br> STEAHKHOUSE</h1>
                        <div class="nested-btn-one-container">
                        <button class="nested-btn-one"><a href="#">Learn More</a></button>
                    </div>
                    </div>
                </div>
                    <div class="nested bg-fit">
                        <img src="images/index-bg-images/ezgif.com-gif-maker-removebg-preview.png" alt="" class="image image-rt">
                    </div>
                </div>
            </div>
        </div>

        <div class="page-two-container">
            <h1>Our<span>Speciality</span></h1>
            <div class="content-two">
                <div class="nested-two">
                    <a href="#">
                    <div class="img-container">
                        <img src="images/scroller-img/margaret-jaszowska-Pj7Yf6Etb0A-unsplash.jpg" alt="" class="image">
                    </div>
                    <div class="nested-desc-one-container">
                        <h3>Tomato Pasta</h3>
                        <p class="nested-desc-one-paragraph">Beef of the Dolomites, extra virgin olive oil, salt, rosemary, potatoes, tomatos.</p>
                    </div>
                </a>
                </div>
                <div class="nested-three">
                <a href="#">
                    <div class="img-container">
                        <img src="images/scroller-img/zane-baker-drbgFj8crBo-unsplash.jpg" alt="" class="image">
                    </div>
                    <div class="nested-desc-one-container passive">
                        <h3>Egg Plate</h3>
                        <p class="nested-desc-one-paragraph">Beef of the Dolomites, extra virgin olive oil, salt, rosemary, potatoes, tomatos.</p>
                    </div>
                </a>
                </div>
                <div class="nested-four">
                    <a href="#">
                    <div class="img-container">
                        <img src="images/scroller-img/mgg-vitchakorn-PLyJqEJVre0-unsplash.jpg" alt="" class="image">
                    </div>
                    <div class="nested-desc-one-container">
                    <h3>Beef Steack</h3>
                    <p class="nested-desc-one-paragraph">Beef of the Dolomites, extra virgin olive oil, salt, rosemary, potatoes, tomatos.</p>
                </div>
            </a>
            </div>
            </div>

        </div>
        <div class="page-three-container">
            <div class="page-three-header">
                <h1><span>Menu</span></h1>
            </div>
            <div class="page-three-header-links-container">
            <div class="page-three-header-links">
                <div class="page-three-btn-container">
                <button class="page-three-btn visible-btn"><a href="#"><img src="images/scroller-img/burger-removebg-preview(1).png" alt="" class="nav-icon-two"></a></button>
                <button class="page-three-btn hidden-btn"><a href="#"><img src="images/scroller-img/burger_1_-removebg-preview.png" alt="" class="nav-icon-two"></a></button>
            </div>
            <div class="page-three-btn-container-two">
                <button class="page-three-btn visible-btn"><a href="#"><img src="images/scroller-img/appetizer-removebg-preview.png" alt="" class="nav-icon-two"></a></button>
                <button class="page-three-btn hidden-btn"><a href="#"><img src="images/scroller-img/appetizer_1_-removebg-preview.png" alt="" class="nav-icon-two"></a></button>
            </div>
            <div class="page-three-btn-container-three">
                <button class="page-three-btn visible-btn"><a href="#"><img src="images/scroller-img/food-removebg-preview.png" alt="" class="nav-icon-two"></a></button>
                <button class="page-three-btn hidden-btn"><a href="#"><img src="images/scroller-img/food_1_-removebg-preview.png" alt="" class="nav-icon-two"></a></button>
            </div>
            </div>
        </div>
            <div class="content-three">

            <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                <div class="nested-five">
                    <div class="sub-nested">
                        <div class="img-container-two hidden-desc">
                        <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="" class="image">
                                    <?php
                                }
                            ?>
                        </div>
                        <section class="visible-desc">
                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $description; ?></p>
                        <div class="sub-nested-container">
                            <div class="sub-nested-btn-container">
                                <button class="sub-nested-btn"><a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>"><span><i class="fa fa-shopping-cart fa-lg icon-move"></i></span>Buy</a></button>
                            </div>
                            <div class="sub-nested-text">
                                <h3>$<?php echo $price; ?><span>50%</span>off</h3>
                            </div>
                        </div>
                    </section>
                    </div>
 
                    <div class="sub-nested">
                        <div class="img-container-two visible-desc">
                        <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="" class="image">
                                    <?php
                                }
                            ?>
                        </div>
                        <section class="hidden-desc">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $description; ?></p>
                            <div class="sub-nested-container">
                                <div class="sub-nested-btn-container">
                                    <button class="sub-nested-btn"><a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>"><span><i class="fa fa-shopping-cart fa-lg icon-move"></i></span>Buy</a></button>
                                </div>
                                <div class="sub-nested-text">
                                    <h3>$<?php echo $price; ?><span>50%</span>off</h3>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>


        <div class="page-four-container">
            <div class="content-four">

            </div>
        </div>
       
            <!-- body-content End-->
    
    <?php include('partials-front/footer.php'); ?>