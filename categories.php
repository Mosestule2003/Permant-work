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
    <link rel="stylesheet" href="./css/styles6.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://example.com/fontawesome/v6.1.2/js/all.js" data-auto-replace-svg="nest"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- navigation -->
    <div class="pre-header"><span>Free 30 minutes delivery</span><i class="fa fa-truck fa-bounce pre-icon"></i> <a
            href="login.html">Learn More</a></div>
    <header>
        <div class="navigation-bar">
            <div class="navigation-bar-top">
                <label for="logo" class="logo">Cavana</label>
            </div>
            <div class="nav-btn-container">
                <button class="nav-btn"><a href="logout.html">Log out</a></button>
                <a href="login.php"><img src="images/landing-page-images/shopping_bag_FILL0_wght400_GRAD0_opsz48.svg"
                        alt="" class="nav-icon"></a>
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
            <li class="nav-item"><a href="" class="nav-link">FASHION</a></li>
            <li class="nav-item"><a href="" class="nav-link">BEAUTY</a></li>
            <li class="nav-item"><a href="" class="nav-link">ARTS & LIFESTYLE</a></li>
            <li class="nav-item"><a href="" class="nav-link">NEWS</a></li>
            <li class="nav-item"><a href="" class="nav-link"><span>ROGUE SHOP</span></a></li>
            <button class="nav-btn-hidden"><a href="logout.html">Log out</a></button>
        </ul>
    </div>
    <!-- navigation End-->

    <!-- body-content -->
    
    <div class="body-content">

        <div class="page-one-container">
            <div class="content-one">
                <div class="nested one">
                    <h1>ENJOY OUR<BR> DELICIOUS <span>FOOD</span></h1>
                        <div class="input-holder">
                        <div class="read-only"> <p>Buy One Pizza. Get One Free</p></div>
                        <div class="input-holder-ext">
                            <p>FREE</p>
                        </div>
                    </div>
                    <div class="price-desc">
                    <p>Price :<span>$10.99</span></p>
                </div>
                    <div class="rider-section">
                        <div class="rider-container-sub">
                        <div class="icon-container">
                            <img src="images/icons/delivery-bike.png" alt="" class="image">
                        </div>
                        <div class="icon-container-desc">
                            <p>Deliver Know</p>
                            <p class="icon-container-desc-colored">+123-5979-4069</p>
                        </div>
                    </div>
                        <div class="icon-container-btn">
                            <button class="icon-btn"><a href="#">Try it Know</a></button>
                        </div>
                    </div>
                </div>

                <div class="nested two">
                    <div class="img-container">
                        <img src="images/categories-images/Pizza_1-removebg-preview.png" alt="" class="image-two">
                    </div>
                </div>
            </div>
        </div>

        <div class="page-two-container">
            <div class="content-two">
                <div class="nested three">
                    <div class="sub-nested-one">
                        <div class="img-container-two">
                            <img src="images/categories-images/pexels-valeria-boltneva-1833349.jpg" alt="" class="image">
                        </div>
                    </div>
                    <div class="sub-nested-two">
                        <div class="img-container-three">
                            <img src="images/login and sign-up design and images/wallpaperflare.com_wallpaper(2).jpg" alt="" class="image">
                        </div>
                    </div>
                    <div class="sub-nested-three">
                        <div class="img-container-four">
                            <img src="images/categories-images/pexels-william-choquette-2641886.jpg" alt="" class="image">
                        </div>
                    </div>
                    <div class="sub-nested-four">
                        <div class="img-container-five">
                            <img src="images/categories-images/somsoll-abdin-WXqkLcVIUWc-unsplash.jpg" alt="" class="image">
                        </div>
                    </div>
                </div>

                <div class="nested four">
                    <h1>Fresh taste at a great price, only for<span class="pepper"><img src="images/icons/pepper.png" alt="" class=" pepper-icon"></span> <span>hungry people.</span></h1>
                    <p class="four-paragraph">Cavana is a restaurant, bar and home located on a busy corner site in Farringdon's Exmouth Market. With equisite cusines. </p>
                    <div class="four-desc-container">
                        <div class="img-container-six">
                            <img src="images/categories-images/pexels-iina-luoto-1211887-removebg-preview(1).png" alt="" class="image">
                        </div>
                        <div class="four-desc">
                            <h2>Delicous  cuisines</h2>
                            <p>Let your cuisine be the medicine, and our service your calm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-three-container">
            <h2>Categories</h2>
            <h1>Popular <span>Menu</span></h1>
            <div class="content-three">
                <div class="nested five">
                    <div class="page-three-header-links">
                        <div class="page-three-btn-container">
                        <button class="page-three-btn visible-btn"><img src="images/scroller-img/burger-removebg-preview(1).png" alt="" class="nav-icon-two"></button>
                        <button class="page-three-btn hidden-btn"  onclick="openCity(event, 'London')"><img src="images/scroller-img/burger_1_-removebg-preview.png" alt="" class="nav-icon-two"></button>
                    </div>
                    <div class="page-three-btn-container-two">
                        <button class="page-three-btn visible-btn"><img src="images/scroller-img/appetizer-removebg-preview.png" alt="" class="nav-icon-two"></button>
                        <button class="page-three-btn hidden-btn"  onclick="openCity(event, 'Paris')"><img src="images/scroller-img/appetizer_1_-removebg-preview.png" alt="" class="nav-icon-two"></button>
                    </div>
                    <div class="page-three-btn-container-three">
                        <button class="page-three-btn visible-btn"><img src="images/scroller-img/food-removebg-preview.png" alt="" class="nav-icon-two"></button>
                        <button class="page-three-btn hidden-btn" onclick="openCity(event, 'Tokyo')"><img src="images/scroller-img/food_1_-removebg-preview.png" alt="" class="nav-icon-two"></button>
                    </div>
                    </div>

                         <div class="nested six">
                              
                              <div id="London" class="tabcontent">
                                <h2>Dessert</h2>
                                <div class="nested-container">

                                        <!-- Sub-container-one -->
                                <div class="sub-nested-five">
                                    <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                                <?php 

                                   
                                    $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                                    $res = mysqli_query($conn, $sql);

                                    $count = mysqli_num_rows($res);

                                    if($count>0)
                                    {
                                        while($row=mysqli_fetch_assoc($res))
                                        {
                                            $id = $row['id'];
                                            $title = $row['title'];
                                            $image_name = $row['image_name'];
                                            ?>
                                    <div class="img-container-seven">
                                    <?php 
                                    if($image_name=="")
                                    {
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else
                                    {
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="image">
                                        <?php
                                    }
                                ?>
                                    </div>
                                    <div class="card-desc">
                                        <h3><?php echo $title; ?></h3>
                                    </div>
                                </div>
                              </div>
                            </a>
                            </div>
                            <?php
                    }
                }
                else
                {
                    echo "<div class='error'>Category not found.</div>";
                }
            
            ?>
                            <!-- Sub-container-one End -->
                              
                            <!-- Sub-container-two -->
                              <div id="Paris" class="tabcontent">
                                <h2>Entrees</h2>
                                <div class="nested-container">
                                    <div class="sub-nested-five">
                                        <div class="img-container-seven">
                                            <img src="images/index-bg-images/wallpaperflare.com_wallpaper(1).jpg" alt="" class=" card-img">
                                        </div>
                                        <div class="card-desc">
                                            <h3>Margherita</h3>
                                            <p>shirmp. squid, pineapple</p>
                                            <p>price :<span>$15.00</span></p>
                                            <div class="card-desc-btn-container">
                                                <button class="card-btn"><span><i class="fa fa-shopping-cart card-btn-icon"></i></span>Order</button>
                                            </div>
                                        </div> 
                                    </div>
                                  </div>
                              </div>
                            <!-- Sub-container-two -->

                            <!-- Sub-container-three -->
                              <div id="Tokyo" class="tabcontent">
                                <h2 class="card-heading">Super</h2>
                                <div class="nested-container">
                                    <div class="sub-nested-five">
                                        <div class="img-container-seven">
                                            <img src="images/index-bg-images/wallpaperflare.com_wallpaper(1).jpg" alt="" class=" card-img">
                                        </div>
                                        <div class="card-desc">
                                            <h3>Margherita</h3>
                                            <p>shirmp. squid, pineapple</p>
                                            <p>price :<span>$15.00</span></p>
                                            <div class="card-desc-btn-container">
                                                <button class="card-btn"><span><i class="fa fa-shopping-cart card-btn-icon"></i></span>Order</button>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            <!-- Sub-container-three End-->

                         </div>
                </div>
            </div>
        </div>

    </div>
    <!-- body-content End-->



    <?php include('partials-front/footer.php'); ?>