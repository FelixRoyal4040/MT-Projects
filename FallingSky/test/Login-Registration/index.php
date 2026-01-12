<?php
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FallingSky</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .wrapper{
      margin-top: 70px;
    }

    .input-box input{
      font-size: 18px;
      color: rgb(83, 164, 195);
    }
    .input-box input::placeholder{
      font-size: 18px;
      color: rgb(83,164,195);
    }
  </style>
</head>
<body>
  <header>
    <h2 class="logo">FALLINGSKY</h2>
    <nav class="navegation">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
      <button class="btn-login" onclick="
        buttonPopup();
      ">Login</button>
    </nav>
  </header>

  <div class="wrapper">
    <span class="icon-close" onclick="
      buttonClosePopup();
    "><ion-icon name="close-outline"></ion-icon>
    </span>

    <div class="form-box login">
      <h2 style="color: rgb(83, 164, 195);">Login</h2>
      <form method="POST" action="auth.php">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" placeholder="Email" name="email">
          <!--<label for="">Email</label>-->
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" placeholder="Password" name="password">
          <!--<label for="">Password</label>-->
        </div>
        <div class="remember-forgot"> 
          <label><input type="checkbox">Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="login-register">
        <p>
          Don't have an account? 
          <a href="#" class="register-link" onclick="
            registerLink();
          ">Register</a>
        </p>
        </div>
      </form>
    </div>
    
    <div class="form-box register">
      <h2 style="color: rgb(83, 164, 195);">Registration</h2>
      <form method="post" action="post.php">
        <div class="input-box">
          <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
          <input type="text" name="nome" placeholder="Username" required>
          <!--<label for="">Username</label>-->
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" name="email1" placeholder="Email" required>
          <!--<label for="">Email</label>-->
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" name="password1" placeholder="Password" required>
          <!--<label for="">Password</label-->
        </div>
        <div class="remember-forgot"> 
          <label><input type="checkbox" required>I agree to the terms & conditions</label>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="login-register">
        <p>
          Already have an account? 
          <a href="#" class="login-link" onclick="
            loginLink();
          ">Login</a>
        </p>
        </div>
      </form>
    </div>
  </div>


  <script src="js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>