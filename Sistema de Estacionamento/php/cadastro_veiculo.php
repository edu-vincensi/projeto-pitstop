<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $proprietario = $_POST['proprietario'];
    $data_entrada = $_POST['data_entrada'];

    $sql = "INSERT INTO veiculos (placa, modelo, cor, proprietario, data_entrada) VALUES ('$placa', '$modelo', '$cor', '$proprietario', '$data_entrada')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Veículo cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
