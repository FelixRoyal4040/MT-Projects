<?php
  $conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');
  
  $count = $conn->prepare("SELECT COUNT(*) AS total FROM user WHERE tipo_id = ? AND status = ?");
  $count->execute([2, 'Aprovado']);
  $show_count = $count->fetch(PDO:: FETCH_ASSOC);

  echo $show_count['total'];
?>