


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="css/styles.css">
  <style>
    .btn-logout{
      height: 50px;
      width: 120px;
      font-size: 18px;
      font-weight: 500;
      background-color: transparent;
      border: 2px solid #fff;
      color: #fff;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color .5s ease;
    }

    .btn-logout:hover{
      background-color: #fff;
      color: #999999ff;
    }
  </style>
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
      <a href="#">List</a>
      <a href="#">Settings</a>
      <a href="#">About</a>
      <a href="logout.php"><button class="btn-logout">Log Out</button></a>
    </nav>
  </header>

  <section class="banner">
    <div class="slider">
      <div class="slide">
        <img src="pics/Fallingsky.png" alt="">
        <div class="left-info">
          <div class="penetrate-blur">
            <h1>Bem-</h1>
          </div>
          <div class="content">
            <h3>01. Administrator Dashboard</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum aliquid, eum alias tempora, corporis quae repellat possimus asperiores perspiciatis minus mollitia, rerum animi veritatis consequuntur itaque nemo distinctio! Fugit, alias.</p>
            <a href="" class="btn">More Details</a>
          </div>
        </div>
        <div class="right-info">
          <h1>Vindo</h1>
          <h3><?php 
            echo $_SESSION['nome'];
          ?></h3>
        </div>
      </div>
    </div>
  </section>

</body>
</html>