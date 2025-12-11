<?php
  $conn= new PDO('mysql:host=localhost;dbname=teste_2', 'root', '');

  $count = $conn->prepare('SELECT COUNT(*) AS total FROM user WHERE tipo_id=?');
  $count->execute([1]);
  $show_count=$count->fetch(PDO:: FETCH_ASSOC);

  echo $show_count["total"];
?>