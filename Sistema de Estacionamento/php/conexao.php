<?php
$host = "localhost"; // ou o nome do servidor do seu banco de dados
$user = "root"; // usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "sistema_estacionamento"; // nome do banco de dados

// Criar a conexão
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
