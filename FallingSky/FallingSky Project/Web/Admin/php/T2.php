<?php
  include_once './connection/conn.php';

  $user = $conn->prepare("SELECT nome FROM user WHERE tipo_id = ?");
  $user->execute([2]);

  $normal = $user->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($normal);
?>