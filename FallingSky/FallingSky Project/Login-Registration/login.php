<?php
  session_start();
  
  header("Cache-control: no-store");
  header("Pragma: no-cache");
  header("Expires: 0");

  if (isset($_SESSION['user_id'])) {

    if ($_SESSION['tipo_id'] == 1) {
      header('Location: ../Web/Admin/index.php');
      exit;

    } else if ($_SESSION['tipo_id'] == 2) {
      header('Location: ../Web/User/index.php');
      exit;

    } else if ($_SESSION['tipo_id'] == 3 && $_SESSION['status'] == 'Aprovado') {
      header('Location: ../Web/Pro/index.php');
      exit;
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Panel</title>
  <link rel="stylesheet" href="css/login.css">
  <style>
    .input-box input{
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <h2 class="logo">FALLINGSKY-TI</h2>
  </header>

  <div class="wrapper">
    <a href="../index.html"><span class="icon-close"><ion-icon name="close-outline"></ion-icon>
    </span></a>
    <div class="form-box login">
      <h2 style="color: rgb(83, 164, 195);">Login</h2>
      <form id="loginForm">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" placeholder="Email" name="email" required>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" placeholder="Password" name="password" required>
        </div>
        <div class="remember-forgot"> 
          <label><input type="checkbox">Lembra-me</label>
          <a href="#">Esqueceu a password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="login-register">
        <p>
          Não tem uma conta? 
          <a href="register.php" class="register-link">Cadastro</a>
        </p>
        </div>
      </form>
    </div>
  </div>

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script>
    const login = document.getElementById('loginForm');
    
    login.addEventListener('submit', function(event) {
      event.preventDefault();
      
      fetch('php/auth.php', {
        method: 'POST',
        body: new FormData(login)
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          window.location.href = data.redirect;
        }else{
          alert(data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error)
        alert('Ocorreu um erro ao processar o login, tente novamente.');
      });
    });

    
  </script>
</body>
</html>