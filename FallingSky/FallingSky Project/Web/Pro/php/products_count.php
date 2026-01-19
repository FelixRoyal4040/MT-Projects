<?php
  session_start();
  include_once 'connection/conn.php';

  header('Content-Type: application/json');

  $stmtPro = $conn->prepare("SELECT id FROM pro WHERE user_id = ?");
  $stmtPro->execute([$_SESSION['user_id']]);
  $pro_id = $stmtPro->fetchColumn();

  $count = $conn->prepare('SELECT COUNT(*) AS total FROM products WHERE pro_id=?');
  $count->execute([$pro_id]);
  $show_count=$count->fetch(PDO:: FETCH_ASSOC);

  echo $show_count["total"];  
?>