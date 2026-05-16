<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Valida se todos os campos foram preenchidos
if (
    empty($_POST['name']) ||
    empty($_POST['surname']) ||
    empty($_POST['cep']) ||
    empty($_POST['email']) ||
    empty($_POST['password']) ||
    empty($_POST['confirmpassword'])
) {
    header('Location: registro.html?erro=campos');
    exit;
}

// Valida se a senha e a confirmação de senha são iguais
if ($_POST['password'] !== $_POST['confirmpassword']) {
    header('Location: registro.html?erro=senha');
    exit;
}



include_once("config.php");
session_start();

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

/*
    Recebe os dados do formulário
*/
$nome = $_POST["name"] . " " . $_POST["surname"];
$cep = $_POST["cep"];
$email = $_POST["email"];
$senha_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
/*
    Prepared statement
    Evita SQL injection
*/
$sql = "INSERT INTO usuarios (nome, email, cep, senha_hash)
        VALUES (?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);

$stmt->bind_param("ssss", $nome, $email, $cep, $senha_hash);

$stmt->execute();

header("Location: login.html");

$stmt->close();
$conexao->close();

?>
