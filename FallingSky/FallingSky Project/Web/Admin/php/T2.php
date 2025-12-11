<?php
  $conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

  $user = $conn->prepare("SELECT nome FROM user WHERE tipo_id = ?");
  $user->execute([2]);

  $normal = $user->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($normal);
?>