<?php
  include_once './connection/conn.php';
  
  $user = $conn->prepare('SELECT nome, email FROM user WHERE tipo_id = ?');
  $user->execute([2]);
  $users = $user->fetchAll(PDO:: FETCH_ASSOC);

  echo json_encode($users);
?>