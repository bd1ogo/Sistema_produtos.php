<?php
require 'conexao.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $data_validade = $_POST['data_validade'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (codigo, produto, data_validade, preco) VALUES (:codigo, :produto, :data_validade, :preco)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':codigo' => $codigo,
            ':produto' => $produto,
            ':data_validade' => $data_validade,
            ':preco' => $preco
        ]);
        $mensagem = "Produto cadastrado com sucesso!";
    } catch (PDOException $e) {
        $mensagem = "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Cadastro de Produto</h1>
    <?php if ($mensagem): ?>
        <div class="alert alert-info"><?= $mensagem ?></div>
    <?php endif; ?>
    <form method="post" class="mt-4">
        <div class="mb-3">
            <label>Código:</label>
            <input type="text" name="codigo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Produto:</label>
            <input type="text" name="produto" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Data de Validade:</label>
            <input type="text" name="data_validade" class="form-control">
        </div>
        <div class="mb-3">
            <label>Preço:</label>
            <input type="number" step="0.01" name="preco" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>
