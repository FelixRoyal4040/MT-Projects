<?php
$conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

$user = $conn->prepare("
  SELECT id, nome, email, status FROM user WHERE tipo_id = ? AND status = ?
");
$user->execute([3, 'Pendente']);

$pro = $user->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($pro);