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

  $product = $_POST['product_name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $category = $_POST['category'];
  $about = $_POST['about'] ?? null;

  $stmtPro = $conn->prepare("SELECT id FROM pro WHERE user_id = ?");
  $stmtPro->execute([$_SESSION['user_id']]);
  $pro_id = $stmtPro->fetchColumn();

  if (!$pro_id) {
    throw new Exception('Profissional não encontrado.');
  }

  include 'logic/stmt-image.php';
  include 'logic/numeric.php';

  $stmt = $conn->prepare("INSERT INTO products (nome, categoria_id, preco, quantidade, foto, descricao, pro_id) VALUES (?, ?, ?, ?, ?, ?, ?)
  ");

  $stmt->execute([
    $product,
    $category,
    $price,
    $quantity,
    $newName,
    $about,
    $pro_id
  ]);

  $conn->commit();

  echo json_encode([
    'status' => 'success',
    'message' => 'Produto cadastrado com sucesso!'
  ]);

} catch (Exception $e) {
  if (isset($newName) && file_exists($uploadPath)) {
    unlink($uploadPath);
  }

  $conn->rollBack();

  echo json_encode([
    'status' => 'error',
    'message' => $e->getMessage()
  ]);
}
