<?php
  include_once './connection/conn.php';
  
  $count = $conn->prepare("SELECT COUNT(*) AS total FROM user WHERE tipo_id = ?");
  $count->execute([2]);
  $show_count = $count->fetch(PDO:: FETCH_ASSOC);

  echo $show_count['total'];
?>