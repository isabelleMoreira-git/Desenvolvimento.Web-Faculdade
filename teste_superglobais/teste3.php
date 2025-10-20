<?php
$nome = $_GET['nome'] ?? 'Visitante';
$idade = $_GET['idade'] ?? 'não informada';
echo "Olá, $nome! Sua idade é $idade anos.";
?>