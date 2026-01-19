<?php
  include_once './connection/conn.php';
  
  $user = $conn->prepare("
    SELECT u.id, u.nome, u.email, p.status 
    FROM user u 
    LEFT JOIN pro p ON p.user_id = u.id 
    WHERE tipo_id = ? AND status = ?
  ");
  $user->execute([3, 'Pendente']);

  $pro = $user->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($pro);