<?php
session_start();

// conectando ao banco de dados
$db = mysqli_connect('localhost', 'root', '', 'formulario');

if (!$db) {
    echo "Erro: Falha ao conectar-se com o banco de dados MySQL.";
    exit;
}
?>