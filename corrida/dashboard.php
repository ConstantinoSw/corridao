<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
5. Script PHP para Logout (logout.php)
php
Copiar código
<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html");
exit();
?>