<?php
include_once 'connection/conn.php';

try {
    $conn->beginTransaction();

    $nome  = $_POST['nome'];
    $email = $_POST['email1'];
    $senha = $_POST['password1'];

    
    if (strpos($email, '.com.fs') !== false) {
        $type = 1; 
    } else {
        $type = 2;
    }

    $insert = $conn->prepare('INSERT INTO user (nome, email, senha, tipo_id) VALUES (?, ?, ?, ?)');

    $insert->execute([$nome, $email, $senha, $type]);

    $conn->commit();

    header('Location: ../login.php');
    exit;

} catch (PDOException $e) {
    $conn->rollBack();
    echo 'Erro ao cadastrar: ' . $e->getMessage();
}
