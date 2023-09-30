<?php
$servername = "mysql"; 
$username = "test";
$password = "jenifer123";
$database = "bancoteste"; 

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("Falha na conexão: " . $conn->connect_error);
}
echo "Conexão bem-sucedida ao MySQL.";
$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);

echo "<br><br>";
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
    	echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
	}
} else {
	echo "Nenhum resultado encontrado.";
}

$conn->close();
?>
