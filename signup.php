<?php
 session_start();
        include "db.php";

    $report ="";
    if (isset($_POST['submit'])) {
        // $db->real_escape_string();
        $fullname = $db->real_escape_string($_POST['fullname']);
        $email = $db->real_escape_string($_POST['email']);
        $email = strtolower($email);
        $username = $db->real_escape_string($_POST['username']);
        $username = strtolower($username);
        $password = md5($db->real_escape_string($_POST['password']));
        $cpassword = md5($db->real_escape_string($_POST['confirmPassword']));
        if($password == $cpassword){ 
            $check4user_match = "SELECT * FROM cavana_users WHERE username ='$username'";
            $check4email_match = "SELECT * FROM cavana_users WHERE email = '$email'";
            $check_user_query = $db->query($check4user_match);
            $check_email_query = $db->query($check4email_match);
            if($check_user_query->num_rows > 0){
                $report = "<div style='text-align: center; color: red;'>Username already exists</div>";
            } 
            else if($check_email_query->num_rows > 0){
                $report = "<div style='text-align: center; color: red;'>Email already exists</div>";
            }     
            else{
                $prepare_query = "INSERT INTO cavana_users (fullname, email, username, password) VALUES (?, ?, ?, ?)"; 
                
                $stmt = $db->prepare($prepare_query);
                $stmt->bind_param("ssss", $fullname, $email, $username, $password);
                $saveData = $stmt->execute();
                if($saveData) {
                    $report = "<div style='text-align: center; color: forestgreen;'>Account Created Successfully</div>";
                    $lastid = $db->insert_id;
                    $_SESSION['user_id'] = $lastid;
                    $_SESSION['user_email'] = $email;
                    $_SESSION['user_username'] = $username;
                    
                    header("refresh: 1, url=index.php");
                }
                else $report = "<div style='text-align: center; color: red;'>unable to create account</div>";
            }
        }
        else $report = "<div style='text-align: center; color: red;'>Password does not match</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
                    <h1>Sign Up</h1>
                    <p>Wine and dine at the best in Chicago !</p>
                </div>

                <div class="btn-container">
                    <button class="header-btn"><i class="fa fa-google fa-lg"></i>
                    Sign in with Google
                </button>
                  </div>

                  <div class="horizontal-line">
                    <p><span class="line-one"></span>or Sign up with Username<span class="line-two"></span></p>
                </div>

                <form action="" method="POST" enctype="multipart/form-data">
                    <?php echo $report; ?> 
                    <section class="label-container">
                    <label for="fullname" class="username">Name<span class="sign">*</span></label><br>
                    </section>
                    <input type="text" class="username-input" placeholder="Name" name="fullname" required><br>
                    <section class="label-container">
                    <label for="email" class="email">Email<span class="sign">*</span></label><br>
                    </section>
                    <input type="text" class="username-input" placeholder="mail@gmail.com" name="email" required><br>
                    <section class="label-container">
                    <label for="username" class="username">Username<span class="sign">*</span></label><br>
                    </section>
                    <input type="text" class="username-input" placeholder="Alex2003" name="username" required><br>
                    <section class="label-container">
                    <label for="password" class="password">Password<span class="sign">*</span></label><br>
                    </section>
                    <input type="password" required placeholder="Password" name="password" class="password-input"><br>
                    <section class="label-container">
                    <label for="password" class="password">Confirm password<span class="sign">*</span></label><br>
                    </section>
                    <input type="password" required placeholder="Confirm Password" name="confirmPassword" class="password-input">
                    <div class="verification-container-two">
                        <p><span><input type="checkbox" class="check"></span><span class="text">I agree to the </span></p>
                        <p><a href="#">Terms & Conditions</a></p>
                    </div>

                        <button type="submit" name="submit" class="login">Sign Up</button>

                    <div class="lower-text">
                        <p>Already have an Account?<span><a href="login.php">Sign in</a></span></p>
                    </div>
                </form>
                <div class="last-text">
                    <p>&copy; 2022 Cavana All rights reserved</p>
                </div>
            </div>
        </div>
        <div class="nested hidden grid-span-two">
            <div class="image-container">
            <img src="images/login and sign-up design and images/pexels-rene-asmussen-1581384.jpg" alt="" class="image">
        </div>
        </div>
    </div>
</div>
<!-- body-content End-->
</body>
</html>