<?php
  $conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

  $refuse = $conn->prepare("
    UPDATE user SET status = ?
  ");
  $refuse->execute(['Recusado']);

  echo json_encode($refuse);
?>