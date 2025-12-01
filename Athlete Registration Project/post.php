<?php
  include('./database/conn.php');

  $name = $_POST['name'];
  $data_nasc = $_POST['date'];
  $location = $_POST['morada'];
  $team_level = '';

  $date_birth = new DateTime($data_nasc);
  $date_now = new DateTime();
  $age = $date_now->diff($date_birth)->y;

   if($age >= 12 && $age <= 15){
      $team_level = 'Cadete';
    }else if($age >= 16 && $age <= 18){
      $team_level = 'Junior';
    }else if($age >= 19 && $age <= 35){
      $team_level = 'Senior';
    }else{
      echo 'Você foi recusado devido a sua idade.';
      exit;
    } 

  $map = [
    'Luanda' => 1,
    'Cazenga' => 2,
    'Cacuaco' => 3,
    'Kilamba' => 4,
    'Benfica' => 5,
    'Maianga' => 6,
    'Camama' => 7,
    'Viana' => 8,
    'Nova Vida' => 9,
    'Mutamba' => 10
  ];
  
  $club_id = $map[$location];

  $vagas = $conn->prepare('SELECT contador_de_vagas FROM clubes WHERE id=?');
  $vagas->execute([$club_id]);
  $data = $vagas->fetch(PDO:: FETCH_ASSOC);

  if($data['contador_de_vagas'] > 0){
    $insert = $conn->prepare("INSERT INTO atletas(nome, morada, data_nasc, nivel_equipa, id_clube) VALUES (?, ?, ?, ?, ?)");
    $insert->execute([$name, $location, $data_nasc, $team_level, $club_id]);

    $update = $conn->prepare('UPDATE clubes SET contador_de_vagas=contador_de_vagas-1 WHERE id=?');
    $update->execute([$club_id]);

    echo "Bem-Vindo ao clube, $name";
    exit;
  }

    $search = $conn->prepare('SELECT id FROM clubes WHERE contador_de_vagas > 0 AND id != ? ORDER BY contador_de_vagas DESC');
    $search->execute();
    $alternatives=$search->fetchAll(PDO:: FETCH_ASSOC);

    if(count($alternatives) ===  0){
      echo 'Não há nenhum time no país.';
      exit;
    }else{
      
      $another_club_id=$alternatives[0]['id'];

      $insert = $conn->prepare("INSERT INTO atletas(nome, morada, data_nasc, nivel_equipa, id_clube) VALUES (?, ?, ?, ?, ?)");
      $insert->execute([$name, $location, $data_nasc, $team_level, $another_club_id]);

      $update=$conn->prepare('UPDATE clubes SET contador_de_vagas=contador_de_vagas-1 WHERE id=?');
      $update->execute([$another_club_id]);

      echo "O clube do seu munícipio está cheio! Serás alocado a um outro clube.";
    }

?>