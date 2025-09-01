<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Sistema de Produtos</h1>
    <div class="d-flex flex-column gap-3">
        <a href="cadastro.php" class="btn btn-primary btn-lg">Cadastrar Produto</a>
        <a href="consulta.php" class="btn btn-success btn-lg">Consultar Produtos</a>
    </div>
</body>
</html>
