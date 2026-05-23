<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('config.php');
session_start();

if (!isset($_SESSION['email'])) {
    echo 'erro';
    exit;
}

$url = $_POST['url'] ?? '';

if (empty($url)) {
    echo 'erro';
    exit;
}

// busca ID do usuário
$stmt = $conexao->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$id_usuario = $user['id'];

// verifica se já existe imagem
$stmt = $conexao->prepare("SELECT id_img FROM imagens WHERE id_usuario = ?");
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // UPDATE
    $stmt = $conexao->prepare("UPDATE imagens SET url = ? WHERE id_usuario = ?");
    $stmt->bind_param("si", $url, $id_usuario);
} else {
    // INSERT
    $stmt = $conexao->prepare("INSERT INTO imagens (id_usuario, url, tipo) VALUES (?, ?, 'perfil')");
    $stmt->bind_param("is", $id_usuario, $url);
}

if ($stmt->execute()) {
    echo 'ok';
} else {
    echo 'erro: ' . $stmt->error;
}