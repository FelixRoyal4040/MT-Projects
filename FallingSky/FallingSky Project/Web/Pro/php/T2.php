<?php
  $conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

  $user = $conn->prepare("SELECT nome FROM user WHERE tipo_id = ? ORDER BY id DESC LIMIT 3");
  $user->execute([2]);

  $normal = $user->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($normal);
?>