<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
<a href="logout.php">Sair</a>
