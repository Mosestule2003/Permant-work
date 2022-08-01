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
    <link rel="stylesheet" href="./css/styles9.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<?php 
        if(isset($_GET['food_id']))
        {
            $food_id = $_GET['food_id'];

            $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                $row = mysqli_fetch_assoc($res);

                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['image_name'];
            }
            else
            {
                header('location:'.SITEURL);
            }
        }
        else
        {
            header('location:'.SITEURL);
        }
    ?>
    
    <!-- body-content -->
    <div class="page-conatiner">
        <div class="content">
            <div class="nested grid-span">
                <div class="form">
                    <div class="logo-container">
                    <?php 
                        
                        if($image_name=="")
                        {
                            echo "<div class='error'>Image not Available.</div>";
                        }
                        else
                        {
                            ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="image">
                            <?php
                        }
                    
                    ?>
                </div>

                <div class="header-container">
                    <h1>Selected Food</h1>
                    <p>Food Title:<span><?php echo $title; ?></span></p>
                    <p>Price:<span>$<?php echo $price; ?></span></p>
                </div>

                    <div class="horizontal-line">
                        <p>Delivery Details</p>
                    </div>

                    <form action="#">
                        <section class="label-container">
                        <label for="fullname" class="username">Quantity<span class="sign">*</span></label><br>
                        </section>
                        <input type="number" class="username-input" placeholder="Qty" name="fullname" required><br>
                        <section class="label-container">
                        <label for="email" class="email">Fullname<span class="sign">*</span></label><br>
                        </section>
                        <input type="text" class="username-input" placeholder="fullname" name="fullname" required><br>
                        <section class="label-container">
                        <label for="email" class="email">Mobile Number<span class="sign">*</span></label><br>
                        </section>
                        <input type="text" class="username-input" placeholder="+123-0000-0000" name="contact" required><br>
                        <section class="label-container">
                        <label for="username" class="username">Email<span class="sign">*</span></label><br>
                        </section>
                        <input type="email" class="username-input" placeholder="Alex2003@gmail.com" name="email" required><br>
                        <section class="label-container">
                        <label for="password" class="password">Address<span class="sign">*</span></label><br>
                        </section>
                        <textarea name="address" id="" cols="30" rows="2" class="password-input-two" placeholder="Address"></textarea>

                        <div class="main-btn">
                        </div>
                        <input type="submit" name="submit" value="Confirm Order" class="login">

                    </form>
                    <div class="last-text">
                        <p>&copy; 2022 Cavana All rights reserved</p>
                    </div>
                </div>
            </div>
            <div class="nested hidden grid-span-two">
                <div class="image-container">
                <?php 
                        
                        if($image_name=="")
                        {
                            echo "<div class='error'>Image not Available.</div>";
                        }
                        else
                        {
                            ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="image">
                            <?php
                        }
                    
                    ?>
            </div>
            </div>
        </div>
    </div>
    <!-- body-content End-->
    <?php 

                if(isset($_POST['submit']))
                {

                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty; 
                    $order_date = date("Y-m-d h:i:sa"); 

                    $status = "Ordered";  
                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];


                    
                    $sql2 = "INSERT INTO tbl_order SET 
                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address'
                    ";

                   
                    $res2 = mysqli_query($conn, $sql2);

                    if($res2==true)
                    {
                        $_SESSION['order'] = "<div class='success text-center'>Food Ordered Successfully.</div>";
                        header('location:'.SITEURL);
                    }
                    else
                    {
                        
                        $_SESSION['order'] = "<div class='error text-center'>Failed to Order Food.</div>";
                        header('location:'.SITEURL);
                    }

                }
            
            ?>
</body>
</html>