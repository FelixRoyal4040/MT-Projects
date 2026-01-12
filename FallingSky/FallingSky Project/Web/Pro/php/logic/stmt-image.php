<?php
  if (!isset($_FILES['image']) || $_FILES['image']['error'] !== 0) {
    throw new Exception('Erro no upload da imagem.');
  }

  $image = $_FILES['image'];
  $ext  = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
  $allowed = ['jpg', 'jpeg', 'png', 'webp'];

  if (!in_array($ext, $allowed)) {
    throw new Exception('Formato de imagem não permitido.');
  }

  if ($image['size'] > 2 * 1024 * 1024) {
    throw new Exception('A imagem deve ter no máximo 2MB.');
  }

  $newName = uniqid('product_', true) . '.' . $ext;
  $uploadDir = '../uploads/products/';
  $uploadPath = $uploadDir . $newName;

  if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
  }

  if (!move_uploaded_file($image['tmp_name'], $uploadPath)) {
    throw new Exception('Falha ao salvar a imagem.');
  }

?>