<?php
$conn = new PDO('mysql:host=localhost;dbname=teste3', 'root', '');

$morada = 'Luanda';

$mapa = [
    'Luanda'  => 1,
    'Kilamba' => 2,
    'Palanca' => 3
];

if (!array_key_exists($morada, $mapa)) {
    echo "Morada inválida";
    exit;
}

$clube_id = $mapa[$morada];

$vagas = $conn->prepare('SELECT vagas FROM clubes WHERE id = ?');
$vagas->execute([$clube_id]);
$dados=$vagas->fetch(PDO:: FETCH_ASSOC);

if($dados['vagas'] > 0){
$insert = $conn->prepare('INSERT INTO morada(nome, clubes_id) VALUES (?, ?)');
$insert->execute([$morada, $clube_id]);

$update = $conn->prepare("UPDATE clubes SET vagas = vagas - 1 WHERE id = ?");
$update->execute([$clube_id]);

echo "Morada inserida e vaga atualizada com sucesso!";
}else{
  echo "Este clube não tem mais vagas";
}


$buscar_outra_equipa = $conn->prepare(
  'SELECT id,vagas FROM clubes WHERE vagas > 0');
$buscar_outra_equipa->execute();
$alternativas = $buscar_outra_equipa->fetchAll(PDO:: FETCH_ASSOC);

echo json_encode($alternativas);

if(count($alternativas) === 0){
  echo 'Nenhum clube tem vagas disponíveis.';
  exit;
}

  $outro_clube_id = $alternativas[0]['id'];

  $insert = $conn->prepare('INSERT INTO morada(nome, clubes_id) VALUES (?, ?)');
  $insert->execute([$morada, $outro_clube_id]);

  $update = $conn->prepare("UPDATE clubes SET vagas = vagas - 1 WHERE id = ?");
  $update->execute([$outro_clube_id]);

  echo "O clube do munícipio está cheio! Atleta alocado ao clube alternativo.";

echo '<br><br>';

$consult=$conn->prepare('
  SELECT * FROM morada
');
$consult->execute();
$res=$consult->fetchAll(PDO:: FETCH_ASSOC);

$consult2=$conn->prepare('
  SELECT * FROM clubes
');
$consult2->execute();
$res2=$consult2->fetchAll(PDO:: FETCH_ASSOC);

echo json_encode($res);
echo '<br><br>';
echo json_encode($res2);
?>
