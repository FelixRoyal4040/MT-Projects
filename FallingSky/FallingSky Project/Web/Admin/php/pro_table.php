<?php
  include_once './connection/conn.php';
  
  $user = $conn->prepare("
    SELECT u.id, u.nome, u.email, p.status, a.nome AS area 
    FROM user u 
    LEFT JOIN pro p ON p.user_id = u.id
    LEFT JOIN area a ON p.area_id = a.id
    WHERE tipo_id = ?;
  ");
  $user->execute([3]);

  $pro = $user->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($pro);
?>