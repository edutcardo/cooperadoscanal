<?php
    // Conexão com o banco de dados
    $host = 'localhost';
    $dbname = 'carros';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erro de conexão: ' . $e->getMessage();
    }

    // Verificando se o formulário de busca foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['modelo'])) {
        $modelo = $_POST['modelo'];

        // Consulta SQL para buscar a placa pelo modelo
        $stmt = $pdo->prepare("SELECT placa FROM controle WHERE modelo = :modelo");
        $stmt->bindParam(':modelo', $modelo);
        $stmt->execute();

        // Verificando se foi encontrado algum resultado
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            $placa = $resultado['placa'];
        } else {
            $placa = 'Modelo não encontrado';
        }
    }
?>
