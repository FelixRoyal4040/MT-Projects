<?php
  session_start();

  if(!isset($_SESSION['user_id'])){
   header('Location: ../../Login-Registration/index.php'); 
  }else{
    echo "<h1>Seja Bem-Vindo</h1>";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="header">
    <a href="" class="logo">FALLINGSKY.</a>

    <div class="social-media">
      <a href="#"><i class='bx bxl-twitter'></i></a>
      <a href="#"><i class='bx bxl-facebook'></i></a>
      <a href="#"><i class='bx bxl-telegram'></i></a>
      <a href="#"><i class='bx bxl-instagram-alt'></i></a>
    </div>

    <nav class="navbar">
      <a href="#">Home</a>
      <a href="#">Store</a>
      <a href="#">Services</a>
      <a href="#">About</a>
      <a href="#">Contacts</a>
    </nav>
  </header>

  <section class="banner">
    <div class="slider">
      <div class="slide">
        <img src="pics/Fallingsky.png" alt="">
        <div class="left-info">
          <div class="penetrate-blur">
            <h1>Dash</h1>
          </div>
          <div class="content">
            <h3>01. Administrator Dashboard</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum aliquid, eum alias tempora, corporis quae repellat possimus asperiores perspiciatis minus mollitia, rerum animi veritatis consequuntur itaque nemo distinctio! Fugit, alias.</p>
            <a href="" class="btn">More Details</a>
          </div>
        </div>
        <div class="right-info">
          <h1>board</h1>
          <h3>Administrator</h3>
        </div>
      </div>
    </div>
  </section>

</body>
</html>