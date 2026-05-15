<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$usuario = "root";
$senha = "bananas";
$banco = "pi";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

/*
    Recebe os dados do formulário
*/
$nome = $_POST["name"] . " " . $_POST["surname"];
$cep = $_POST["cep"];
$email = $_POST["email"];
$senha_hash = hash('sha256', $_POST["password"]);

/*
    Prepared statement
    Evita SQL injection
*/
$sql = "INSERT INTO usuarios (nome, email, cep, senha_hash)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss", $nome, $email, $cep, $senha_hash);

$stmt->execute();

echo "Usuário cadastrado!";

$stmt->close();
$conn->close();

?>
