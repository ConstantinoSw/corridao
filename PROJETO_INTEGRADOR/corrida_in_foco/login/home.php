<?php
session_start(); // Inicia a sessão

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <a href="logout.php">Sair</a>
</body>
</html>