<?php
session_start();
include_once 'connection/conn.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
  echo json_encode([
    'status' => 'error',
    'message' => 'Sessão expirada. Faça login novamente.'
  ]);
  exit;
}

try {
  $conn->beginTransaction();

  $course = $_POST['course_name'] ?? null;
  $category = $_POST['course_category'] ?? null;
  $price = $_POST['course_price'] ?? null;
  $about = $_POST['about_course'] ?? null;

  if (!$course || !$category || !$price) {
    throw new Exception('Campos obrigatórios em falta.');
  }

  $stmtPro = $conn->prepare("SELECT id FROM pro WHERE user_id = ?");
  $stmtPro->execute([$_SESSION['user_id']]);
  $pro_id = $stmtPro->fetchColumn();

  if (!$pro_id) {
    throw new Exception('Profissional não encontrado.');
  }

  include 'logic/numeric.php';

  $stmt = $conn->prepare("INSERT INTO courses (nome, categoria_id, preco, descricao, pro_id) VALUES (?, ?, ?, ?, ?)
  ");

  $stmt->execute([
    $course,
    $category,
    $price,
    $about,
    $pro_id
  ]);

  $conn->commit();

  echo json_encode([
    'status' => 'success',
    'message' => 'Curso cadastrado com sucesso!'
  ]);

} catch (Exception $e) {
  
  $conn->rollBack();

  echo json_encode([
    'status' => 'error',
    'message' => $e->getMessage()
  ]);
}
