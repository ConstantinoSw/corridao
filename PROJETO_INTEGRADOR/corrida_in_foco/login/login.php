<?php
session_start(); // Inicia a sessão

if (isset($_POST['login'])) {
    require_once 'includes/db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = getDB();

    // Consulta SQL para verificar usuário e senha
    $query = "SELECT * FROM calistenia.tb WHERE nome = ? AND senha = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error_message = "Usuário ou senha inválidos.";
    }

    $stmt->close();
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./estilo.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="login">Entrar</button>
    </form>
    <?php if (isset($error_message)) { echo '<p>' . $error_message . '</p>'; } ?>
</body>
</html>