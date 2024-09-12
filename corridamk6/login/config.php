<?php
$host = "localhost";
$dbUsername = "root";  // Nome de usuário do MySQL
$dbPassword = "";  // Senha do MySQL (deixe em branco se não houver)
$dbName = "login_system";  // Nome do banco de dados

// Criar conexão
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>