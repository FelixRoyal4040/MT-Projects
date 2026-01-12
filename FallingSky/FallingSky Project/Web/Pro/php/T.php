<?php
  $conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

  $user = $conn->prepare("
    SELECT u.id, u.nome, u.email, p.status 
    FROM user u 
    LEFT JOIN pro p ON p.user_id = u.id 
    WHERE tipo_id = ? AND status = ? ORDER BY id DESC LIMIT 3
  ");
  $user->execute([3, 'Pendente']);

  $pro = $user->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($pro);