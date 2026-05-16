<?php
session_start();

// Remove todas as variáveis de sessão
$_SESSION = [];

// Destrói a sessão
session_destroy();

// Redireciona para a tela inicial sem login
header("Location: index.php");
exit;