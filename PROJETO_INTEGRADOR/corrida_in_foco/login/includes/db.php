<?php
// Conectar ao banco de dados MySQL usando mysqli
require_once 'config.php';

function getDB() {
    $dbConnection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if ($dbConnection->connect_error) {
        die("Conexão falhou: " . $dbConnection->connect_error);
    }

    return $dbConnection;
}
?>