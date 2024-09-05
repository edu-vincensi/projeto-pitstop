<?php
include 'conexao.php';

$sql = "SELECT * FROM veiculos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Proprietário</th>
                    <th>Data de Entrada</th>
                    <th>Data de Saída</th>
                    <th>Tempo de Permanência</th>
                </tr>
            </thead>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['placa'] . "</td>
                <td>" . $row['modelo'] . "</td>
                <td>" . $row['cor'] . "</td>
                <td>" . $row['proprietario'] . "</td>
                <td>" . $row['data_entrada'] . "</td>
                <td>" . $row['data_saida'] . "</td>
                <td>" . $row['tempo_permanencia'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum veículo cadastrado.";
}

$conn->close();
?>
