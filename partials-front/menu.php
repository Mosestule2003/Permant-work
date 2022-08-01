<?php 
    include('./config/constants.php'); 
?>
<!-- navigation -->

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
     <li class="nav-item"><a href="categories.php" class="nav-link">CATEGORIES</a></li>
     <li class="nav-item"><a href="food.php" class="nav-link">FOOD</a></li>
     <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT</a></li>
     <button class="nav-btn-hidden"><a href="logout.php">Log out</a></button>
 </ul>
</div>
<!-- navigation End-->