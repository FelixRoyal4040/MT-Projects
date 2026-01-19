<?php
  include_once './connection/conn.php';

  $aprove = $conn->prepare("
    UPDATE pro SET status = ?
  ");
  $aprove->execute(['Aprovado']);

  echo json_encode($aprove);
?>