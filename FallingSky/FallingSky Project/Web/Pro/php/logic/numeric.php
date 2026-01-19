<?php
  if (!is_numeric($price) || $price <= 0) {
    throw new Exception('Preço inválido.');
  }

  if (isset($quantity) && $quantity < 0) {
    throw new Exception('Quantidade inválida.');
  }
?>