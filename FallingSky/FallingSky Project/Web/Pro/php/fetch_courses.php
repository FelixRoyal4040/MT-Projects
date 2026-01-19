<?php
session_start();
include_once 'connection/conn.php';

header('Content-Type: application/json');

$stmtPro = $conn->prepare("SELECT id FROM pro WHERE user_id = ?");
$stmtPro->execute([$_SESSION['user_id']]);
$pro_id = $stmtPro->fetchColumn();

$stmt = $conn->prepare("
  SELECT
    c.id, 
    c.nome,
    c.preco,
    c.status,
    ct.nome AS categoria
  FROM courses c
  JOIN course_categories ct ON ct.id = c.categoria_id
  WHERE c.pro_id = ?
");
$stmt->execute([$pro_id]);

$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($courses);
