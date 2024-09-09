
<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $username;

            header("location: ../html/index.html");
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Nenhum usuário encontrado.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
   

    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
                    <h2>Login</h2>
                <form action="login.php" method="post">
                    Nome de usuário: <input type="text" name="username" required><br>
                    Senha: <input type="password" name="password" required><br>
                    <button type="submit">Login</button>
                
                           </form>
                <a href="./register.php"><button>regsitrar</button></a>
    </div>
</body>
</html>

