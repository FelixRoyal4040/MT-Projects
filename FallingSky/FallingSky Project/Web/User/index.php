<?php
  session_start();

  header("Cache-control: no-store");
  header("Pragma: no-cache");
  header("Expires: 0");
  
  if(!isset($_SESSION['user_id'])){
    header('Location: ../../Login-Registration/login.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 30px 5%;
      background: transparent;
      display: flex;
      align-items: center;
      z-index: 100;
    }

    .logo {
      font-size: 30px;
      color: #fff;
      text-decoration: none;
      font-weight: 700;
    }

    .social-media {
      margin: 0 auto 0 50px;
    }

    .social-media a {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      width: 40px;
      height: 40px;
      background: transparent;
      border: 2px solid #fff;
      border-radius: 6px;
      text-decoration: none;
      margin-right: 10px;
      transition: 0.5s;
    }

    .social-media a:hover {
      background: #fff;
    }

    .social-media a i {
      font-size: 20px;
      color: #fff;
      transition: 0.5s;
    }

    .social-media a:hover i {
      color: #444;
    }

    .navbar a {
      font-size: 18px;
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      margin-left: 30px;
      text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .banner{
      position: relative;
      width: 100%;
      height: 100vh;
    }

    .slider .slide{
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .slide img{
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      pointer-events: none;
    }


    .slide .left-info{
      position: absolute;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
    }

    .left-info .penetrate-blur{
      position: absolute;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .penetrate-blur h1 {
      font-size: 170px;
      color: #fff;
    }

    .left-info .content{
      position: absolute;
      bottom: 8%;
      left: 10%;
      color: #fff;
    }

    .content h3 {
      font-size: 20px;
    }

    .content p {
      font-size: 16px;
      margin: 10px 0 15px;
    }

    .content .btn{
      display: inline-block;
      padding: 13px 28px;
      background: #fff;
      border: 2px solid #fff;
      border-radius: 6px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      font-size: 16px;
      text-decoration: none;
      color: #444;
      transition: 0.5s;
    }

    .content .btn:hover {
      background: transparent;
      color: #fff;
    }

    .slide .right-info{
      position: absolute;
      top: 0;
      right: 0;
      width: 50%;
      height: 100%;
      display: flex;
      align-items: center;
    }

    .right-info h1{
      font-size: 170px;
      color: #fff;
    }

    .right-info h3{
      position: absolute;
      font-size: 60px;
      color: #fff;
      text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      transform: translateY(150%);
      margin-left: 10px;
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
      <a href="#">Store</a>
      <a href="#">Services</a>
      <a href="#">About</a>
      <a href="logout.php">Log Out</a>
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
            <h3>03. User Dashboard</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum aliquid, eum alias tempora, corporis quae repellat possimus asperiores perspiciatis minus mollitia, rerum animi veritatis consequuntur itaque nemo distinctio! Fugit, alias.</p>
            <a href="" class="btn">More Details</a>
          </div>
        </div>
        <div class="right-info">
          <h1>Vindo</h1>
          <h3><?
            $nome = $_SESSION['nome'];
            echo "Usuário: $nome";
          ?></h3>
        </div>
      </div>
    </div>
  </section>

</body>
</html>