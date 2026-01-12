<?php
session_start();
include_once 'connection/conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

$search = $conn->prepare('
  SELECT 
    u.id, u.nome, u.tipo_id, p.status
  FROM user AS u
  LEFT JOIN pro AS p ON p.user_id = u.id
  WHERE u.email = ? AND u.senha = ?
');

$search->execute([$email, $password]);
$user = $search->fetch(PDO::FETCH_ASSOC);

if (!$user) {
  echo json_encode([
    'success'=>false, 
    'message' => 'Credenciais inválidas'
  ]);
  exit;
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['nome'] = $user['nome'];
$_SESSION['tipo_id'] = $user['tipo_id'];
$_SESSION['status'] = $user['status'];

if ($user['tipo_id'] == 1) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['nome'] = $user['nome'];
  $_SESSION['tipo_id'] = 1;

  echo json_encode([
    'success'=>true, 
    'redirect' => '../Web/Admin/index.php'
  ]);

  exit;
}

if ($user['tipo_id'] == 2) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['nome'] = $user['nome'];
  $_SESSION['tipo_id'] = 2;

  echo json_encode([
    'success'=>true, 
    'redirect' => '../Web/User/index.php'
  ]);
  
  exit;
}

if ($user['tipo_id'] == 3) {

  if ($user['status'] === 'Pendente') {
    echo json_encode([
      'success'=>false, 
      'message' => 'Aguarde a resposta do administrador'
    ]);
    exit;
  }

  if ($user['status'] === 'Reprovado') {
    echo json_encode([
      'success'=>false, 
      'message' => 'Recusado pelo administrador'
    ]);
    exit;
  }

  $_SESSION['user_id'] = $user['id'];
  $_SESSION['nome'] = $user['nome'];
  $_SESSION['tipo_id'] = 3;

  echo json_encode([
    'success'=>true, 
    'redirect' => '../Web/Pro/index.php'
  ]);
  exit;
}

