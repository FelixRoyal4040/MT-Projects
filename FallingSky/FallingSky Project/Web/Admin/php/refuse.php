<?php
  include_once './connection/conn.php';

  $refuse = $conn->prepare("
    UPDATE pro SET status = ?
  ");
  $refuse->execute(['Recusado']);

  echo json_encode($refuse);
?>