<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cavana</title>
<link rel="stylesheet" href="../css/admin.css">
<link rel="stylesheet" href="../css/styles4.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
</head>
<body>
<!-- navigation -->
<div class="pre-header"><span>Free 30 minutes delivery</span><i class="fa fa-truck fa-bounce pre-icon"></i> <a href="login.php">Learn More</a></div>
<header>
 <div class="navigation-bar">
     <div class="navigation-bar-top">
         <label for="logo" class="logo">Cavana</label>
     </div>
     <div class="nav-btn-container">
     <button class="nav-btn"><a href="logout.php">Log out</a></button>
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
     <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
     <li class="nav-item"><a href="manage-admin.php" class="nav-link">ADMIN</a></li>
     <li class="nav-item"><a href="manage-category.php" class="nav-link">CATEGORIES</a></li>
     <li class="nav-item"><a href="manage-food.php" class="nav-link">FOOD</a></li>
     <li class="nav-item"><a href="manage-order.php" class="nav-link">ORDER</a></li>
     <button class="nav-btn-hidden"><a href="logout.php">Log out</a></button>
 </ul>
</div>
<!-- navigation End-->