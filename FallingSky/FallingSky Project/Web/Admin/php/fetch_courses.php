<?php
session_start();
include_once 'connection/conn.php';

header('Content-Type: application/json');

$stmt = $conn->prepare("
  SELECT
    c.id, 
    c.nome,
    c.preco,
    c.status,
    ct.nome AS categoria,
    u.nome AS profissional
  FROM courses c
  JOIN course_categories ct ON ct.id = c.categoria_id
  JOIN pro p ON p.id = c.pro_id
  JOIN user u ON u.id = p.user_id
  ORDER BY c.id DESC;
");

$stmt->execute();

$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($courses);
