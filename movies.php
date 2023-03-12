<?php
session_start();
if(isset($_SESSION['user_name'])){
  ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Website</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style.css" />
    <!-- Box Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    /> -->
  </head>
  <body>
    <!-- Navigation Bar -->
    <header>
      <a href="home.php" class="logo"> <i class="bx bxs-movie"></i>Night Owl </a>
      <div class="bx bx-menu" id="menu-icon"></div>

      <!-- Menu -->
      <div class="navbar">
        <a href="home.php" id="a_tabs__button"><button class="tabs__button home-active">Home</button></a> 
        <a href="genre.php"><button class="tabs__button">Movies</button></a> 
        <a href="comingsoon.php"><button class="tabs__button">Coming</button></a> 
        <a href="series.php"><button class="tabs__button">Series</button></a> 
        <a href="category.php"><button class="tabs__button">Category</button></a> 
      </div>
      <div>
      <span><?php echo $_SESSION['user_name']; ?></span>
      <a href="logout.php" class="btr">Logout</a>
      </div>
    </header>
    
    <!-- <div class="main-home">
    <p class="logo-home"> <i class="bx bxs-movie"></i>Night Owl </p>
    <a href="home.php" class="btr-home" id="btn">Go To Home Page</a>
    <h4>Just a better place for watching online movies for free!</h4>
    </div> -->

  </body>
</html>

<?php

}
else{
  header("Location: register.php");
  exit();
}
?>
