<?php
	$conn = new PDO('mysql:host=localhost; dbname=teste_2', 'root', '');

	$nome  = $_POST['nome'];
	$email = $_POST['email1'];
	$senha = $_POST['password1'];

	if (strpos($email, '.com.fs') !== false) {
		$type = 1;
		$status = 'Aprovado';
	}else {
		$type = 2;
		$status = 'Aprovado';
	}

	$insert = $conn->prepare(
		'INSERT INTO user(nome, email, senha, tipo_id, status) VALUES (?, ?, ?, ?, ?)'
	);
	$insert->execute([$nome, $email, $senha, $type, $status]);
	
	header('Location: ../login.php');
?>
