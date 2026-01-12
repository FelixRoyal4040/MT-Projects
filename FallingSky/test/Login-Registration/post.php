<?php
$conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

$nome  = $_POST['nome'];
$email = $_POST['email1'];
$senha = $_POST['password1'];

if (strpos($email, '.com.fs') !== false) {
    $type = 1;
} else {
    $type = 2;
}

$insert = $conn->prepare(
    'INSERT INTO user(nome, email, senha, tipo_id) VALUES (?, ?, ?, ?)'
);
$insert->execute([$nome, $email, $senha, $type]);

?>
