<?php

$host = "localhost";
$usuario = "root";
$senha = "bananas";
$banco = "pi";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";

$resultado = $conn->query($sql);

while ($linha = $resultado->fetch_assoc()) {
    echo $linha["id"] . " - " . $linha["nome"] . "<br>";
}

$conn->close();

?>
