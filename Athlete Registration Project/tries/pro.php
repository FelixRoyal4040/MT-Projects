<?php
  $conn= new PDO("mysql:localhost=host;dbname=teste", "root", "");

  $nome = $_POST['name'];
  $data = $_POST['date'];
  $morada = $_POST['morada'];

  $insert = $conn->prepare("INSERT INTO users(nome, morada, data_nasc) VALUES (?, ?, ?)");

  $insert->execute([$nome ,$morada, $data]);
?>