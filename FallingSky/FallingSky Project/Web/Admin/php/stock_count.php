<?php
session_start();
include_once 'connection/conn.php';

header('Content-Type: application/json');

// Total geral = todos os products + todos os courses
$count = $conn->prepare('
  SELECT 
    (SELECT COUNT(*) FROM products) +
    (SELECT COUNT(*) FROM courses)
    AS total
');

$count->execute();
$show_count = $count->fetch(PDO::FETCH_ASSOC);

echo $show_count["total"];
