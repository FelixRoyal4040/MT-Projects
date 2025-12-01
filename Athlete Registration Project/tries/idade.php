<?php
    $conn = new PDO("mysql:host=localhost;dbname=teste_idade", "root", "");
    

    $data_nasc = '2008-12-12';
    $birth = new DateTime($data_nasc);
    $today = new DateTime();
    $age = $today->diff($birth)->y;

    $nivel_equipa = '';

    if ($age >= 12 && $age <= 15) {
        $nivel_equipa = 'Cadete';
    } elseif ($age >= 16 && $age <= 18) {
        $nivel_equipa = 'Junior';
    } elseif ($age >= 19 && $age <= 35) {
        $nivel_equipa = 'Senior';
    } else {
        echo 'Recusado';
        return 0;
    }

    echo $age . '<br>';
    echo $nivel_equipa;

    $insert = $conn->prepare("INSERT INTO nivel_equipa(categoria) VALUES (?)");
    $insert->execute([$nivel_equipa]);
?>

