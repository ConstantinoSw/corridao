<?php
session_start();

// Configurações do banco de dados
$servername = "localhost";
$username = "daniel";
$password = "senha";
$dbname = "corrida";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepara e executa a consulta
    $stmt = $conn->prepare("SELECT id, username FROM tb_login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Login bem-sucedido
        $_SESSION['username'] = $user;
        header("Location: dashboard.php");
    } else {
        // Login falhou
        echo "Usuário ou senha incorretos.";
    }

    $stmt->close();
}

$conn->close();
?>
