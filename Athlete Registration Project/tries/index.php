<?php
  include("./database/conn.php");
  $list=$conn->prepare("SELECT * FROM clubes");
  $list->execute();
  $res=$list->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($res)
?>