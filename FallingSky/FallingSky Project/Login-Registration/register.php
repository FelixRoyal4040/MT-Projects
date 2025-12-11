<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/register.css">
  <style>
    .input-box input{
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <h2 class="logo">FALLINGSKY</h2>
  </header>

  <div class="wrapper">
    <a href="../index.php"><span class="icon-close"><ion-icon name="close-outline"></ion-icon>
    </span></a>
    <div class="form-box register">
      <h2 style="color: rgb(83, 164, 195);">Registration</h2>
      <form method="post" action="php/post.php">
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
          <a href="login.php" class="login-link">Login</a>
        </p>
        </div>
      </form>
    </div>
  </div>

  <script src="js/login.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>