<?php
session_start();
include_once 'connection/conn.php';

header('Content-Type: application/json');

$stmt = $conn->prepare("
  SELECT
    p.id, 
    p.nome,
    p.preco,
    p.status,
    ct.nome AS categoria,
    u.nome AS profissional
  FROM products p
  JOIN categories ct ON ct.id = p.categoria_id
  JOIN pro pr ON pr.id = p.pro_id
  JOIN user u ON u.id = pr.user_id
  ORDER BY p.id ASC;
");

$stmt->execute();

$product = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($product);
