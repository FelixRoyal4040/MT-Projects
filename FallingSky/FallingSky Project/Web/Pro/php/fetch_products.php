<?php
session_start();
include_once 'connection/conn.php';

header('Content-Type: application/json');

$stmtPro = $conn->prepare("SELECT id FROM pro WHERE user_id = ?");
$stmtPro->execute([$_SESSION['user_id']]);
$pro_id = $stmtPro->fetchColumn();

$stmt = $conn->prepare("
  SELECT
    p.id, 
    p.nome,
    p.preco,
    p.quantidade,
    p.foto,
    p.status,
    c.nome AS categoria
  FROM products p
  JOIN categories c ON c.id = p.categoria_id
  WHERE p.pro_id = ?
");
$stmt->execute([$pro_id]);

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($products);
