<?php
$usuario = 'root'; // Usuário do banco
$senha = ''; // Senha do banco
$database = 'carros'; // Nome do banco
$host = 'localhost'; // Host do banco

// Cria a conexão
$conn = new mysqli($host, $usuario, $senha, $database);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>
