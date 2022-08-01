<?php include('../config/constants.php'); 

$report ="";
?>

<html>
    <head>
        <title>Login - Cavana Order System</title>
        <link rel="stylesheet" href="../css/styles2.css">
    </head>

    <body>
        
    <div class="page-conatiner">
        <div class="content">
            <div class="nested grid-span">
                <div class="form">
                    <div class="logo-container">
                    <label for="logo" class="logo">Cavana</label>
                </div>

                <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

                <div class="header-container">
                    <h1>Login</h1>
                    <p>Thank you for being a part of Cavana !</p>
                </div>

            <!-- Login Form Starts HEre -->
            <form action="" method="POST" class="text-center">
                <?php echo   $report;?>
            <section class="label-container">
            <label for="username" class="username">Username</label><br>
            </section>
            <input type="text" name="username" class="username-input" placeholder="Enter Username"><br><br>

            <section class="label-container">
            <label for="username" class="username">Password</label><br>
            </section>
            <input type="password" name="password"  class="username-input" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="login">
            <br><br>
            </form>
            
            <div class="last-text">
                        <p>&copy; 2022 Cavana All rights reserved</p>
                    </div>
                </div>
            </div>
            <div class="nested hidden grid-span-two">
                <div class="image-container">
                <img src="wallpaperflare.com_wallpaper(2).jpg" alt="" class="image">
            </div>
            </div>
        </div>
    </div>
    <!-- body-content End-->

        </div>

    </body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div style='color: forestgreen;'>Log in Successful</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            $report = "<div style='text-align: center; color: forestgreen;'>Log in Successful...pls wait</div>";
            header("refresh: 1.5, url=index.php");
            //REdirect to HOme Page/Dashboard
            // header('location:'.SITEURL.'admin/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center' style='color: red ;'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location: login.php');
        }


    }

?>