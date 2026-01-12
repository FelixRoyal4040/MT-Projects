<?php
  session_start();
  
  header("Cache-control: no-store");
  header("Pragma: no-cache");
  header("Expires: 0");

  if(isset($_SESSION['user_id'])){
    if($_SESSION['tipo_id'] == 1){
      header('Location: ../Web/Admin/index.php');
      exit;
    }else{
      header('Location: ../Web/User/index.php');
      exit;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.css">
  <style>
    .input-box input{
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <h2 class="logo">FALLINGSKY.</h2>
  </header>

  <div class="wrapper">
    <a href="../index.php"><span class="icon-close"><ion-icon name="close-outline"></ion-icon>
    </span></a>
    <div class="form-box login">
      <h2 style="color: rgb(83, 164, 195);">Login</h2>
      <form method="POST" action="php/auth.php">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" placeholder="Email" name="email" required>
          <!--<label for="">Email</label>-->
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" placeholder="Password" name="password" required>
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
          <a href="register.php" class="register-link">Register</a>
        </p>
        </div>
      </form>
    </div>
  </div>

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>