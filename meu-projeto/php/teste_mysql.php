<?php
$servername = "mysql"; // Este é o nome do serviço MySQL no Docker Compose
$username = "test";
$password = "jenifer123";
$database = "bancoteste"; // Nome do seu banco de dados

// Cria uma conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
	die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida ao MySQL.";

// Query SQL para selecionar todos os registros da tabela "usuarios"
$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);

echo "<br><br>";

// Verifica se a consulta retornou resultados
if ($result->num_rows > 0) {
	// Loop através dos resultados e exibe-os
	while ($row = $result->fetch_assoc()) {
    	echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
	}
} else {
	echo "Nenhum resultado encontrado.";
}

// Fecha a conexão
$conn->close();
echo "CONEXÃO FINALIZADA!";
?>
