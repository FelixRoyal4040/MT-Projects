<?php
  include_once 'connection/conn.php';

  try{
    $conn->beginTransaction();

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $area  = $_POST['area'];
    $about = $_POST['about'];

    $type = 3;

    $map = [
      'TI' => 1
    ];

    $area_id = $map[$area];

    $insert = $conn->prepare( 'INSERT INTO user (nome, email, senha, tipo_id) VALUES (?, ?, ?, ?)');
    $insert->execute([$nome, $email, $senha, $type]);


    $user_id = $conn->lastInsertId();

    $insert2 = $conn->prepare('INSERT INTO pro (descricao, user_id, area_id) VALUES (?, ?, ?)');
    $insert2->execute([$about, $user_id, $area_id]);

    $conn->commit();

    header('Location: ../login.php');
    exit;

  } catch (PDOException $e) {
    $conn->rollBack();
    echo 'Erro ao cadastrar: ' . $e->getMessage();
  }
?>
