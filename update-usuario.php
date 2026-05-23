<?php
include_once('config.php');
session_start();

if (!isset($_SESSION['email'])) {
    echo "Usuário não autenticado";
    exit;
}

if (!isset($_POST['name'], $_POST['cep'], $_POST['email'])) {
    echo "Dados incompletos";
    exit;
}

$nome = trim($_POST['name']);
$cep = trim($_POST['cep']);
$email = trim($_POST['email']);

// 🔴 VALIDAÇÃO BACKEND (ESSENCIAL)
if ($nome == "" || $cep == "" || $email == "") {
    echo "Preencha todos os campos";
    exit;
}

// valida email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail inválido";
    exit;
}

// update
$stmt = $conexao->prepare("
    UPDATE usuarios 
    SET nome = ?, cep = ?, email = ?
    WHERE email = ?
");

if (!$stmt) {
    echo "Erro no prepare";
    exit;
}

$stmt->bind_param("ssss", $nome, $cep, $email, $_SESSION['email']);

if ($stmt->execute()) {

    // atualiza sessão se email mudou
    $_SESSION['email'] = $email;

    echo "ok";
} else {
    echo "Erro ao atualizar";
}