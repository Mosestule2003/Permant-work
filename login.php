<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <?php
    include_once "db.php";
    
    $report =""; 

    if(isset($_POST['submit'])){
        $username = $db->real_escape_string($_POST['username']); 
        $username = strtolower($username); 
        $password = md5($db->real_escape_string($_POST['password']));
        $stmt=$db->prepare("SELECT * FROM cavana_users WHERE (username=? OR email =?) AND password= ? LIMIT 1");
        $stmt->bind_param("sss", $username, $username, $password);
        $stmt->execute();
        $find_user = $stmt->get_result();
        if($find_user->num_rows > 0){
            $row = $find_user->fetch_assoc();
            $foundusername = $row['username'];
            $foundemail = $row['email'];
            $foundid = $row['id'];
            $_SESSION['user_id'] = $foundid;
            $_SESSION['user_email'] =$foundemail;
            $_SESSION['user_username'] =$foundusername;
            $report = "<div style='text-align: center; color: green;'>logged in successfully...please wait</div>";
            header("refresh: 2, url=index.php");
        } else{
            $report="<div style='text-align: center; color: red;'>Invalid User Information</div>";
        }
    }
?>
</head>
<body>
    
     <!-- body-content -->
     <div class="page-conatiner">
        <div class="content">
            <div class="nested grid-span">
                <div class="form">
                    <div class="logo-container">
                    <label for="logo" class="logo">Cavana</label>
                </div>

                <div class="header-container">
                    <h1>Login</h1>
                    <p>Wine and dine at the best in Chicago !</p>
                </div>

                <div class="btn-container">
                    <button class="header-btn"><i class="fa fa-google fa-lg"></i>
                    Sign in with Google
                </button>
                  </div>

                    <div class="horizontal-line">
                        <p><span class="line-one"></span>or Sign in with Username<span class="line-two"></span></p>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php echo $report; ?>
                        <section class="label-container">
                        <label for="username" class="username">Username<span class="sign">*</span></label><br>
                        </section>
                        <input type="text" required placeholder="Alex2003" name="username" class="username-input">
                        <section class="label-container">
                        <label for="password" class="password">Password<span class="sign">*</span></label><br>
                        </section>
                        <input type="password" required placeholder="Password" name="password" class="password-input">
                        <div class="verification-container">
                            <p><span><input type="checkbox" class="check"></span><span class="text">Remember me</span></p>
                            <p><a href="#">Forgot pasword?</a></p>
                        </div>
                        
                        <button type="submit" name="submit" class="login">login</button>

                        <div class="lower-text">
                            <p>Not registered yet?<span><a href="signup.php">Create an Account</a></span></p>
                        </div>
                    </form>
                    <div class="last-text">
                        <p>&copy; 2022 Cavana All rights reserved</p>
                    </div>
                </div>
            </div>
            <div class="nested hidden grid-span-two">
                <div class="image-container">
                <img src="images/login and sign-up design and images/wallpaperflare.com_wallpaper(3).jpg" alt="" class="image">
            </div>
            </div>
        </div>
    </div>
    <!-- body-content End-->
</body>
</html>