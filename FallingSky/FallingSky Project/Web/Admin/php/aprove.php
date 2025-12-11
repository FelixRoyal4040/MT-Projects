<?php
  $conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

  $aprove = $conn->prepare("
    UPDATE user SET status = ?
  ");
  $aprove->execute(['Aprovado']);

  echo json_encode($aprove);
?>