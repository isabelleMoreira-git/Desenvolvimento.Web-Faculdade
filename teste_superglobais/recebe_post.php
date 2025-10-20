<?php
$nome = $_POST['nome'] ?? 'Desconhecido';
$idade = $_POST['idade'] ?? 'não informada';
echo "Você enviou o nome $nome e idade $idade via POST.";
?>