<?php
  session_start();
  $conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

  $email = $_POST['email'];
  $password = $_POST['password'];

  $search = $conn->prepare('SELECT * FROM user WHERE email = ? AND senha = ?');
  $search->execute([$email, $password]);
  $user= $search->fetch(PDO:: FETCH_ASSOC);

  if($user){
    $_SESSION['user_id']=$user['id'];
    $_SESSION['nome']=$user['nome'];
    $_SESSION['tipo_id'] = $user['tipo_id'];
    
    if($_SESSION['tipo_id'] == 1){
      header('Location: ../../Web/Admin/index.php');
    }else{
      header('Location: ../../Web/User/index.php');
    }

    exit;

  }else{
    echo 'Acesso Negado!';
    exit;
  }
?>