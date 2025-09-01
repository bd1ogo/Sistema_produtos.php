<?php
require 'conexao.php';

$sql = "SELECT * FROM produtos";
$stmt = $pdo->query($sql);
$produtos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Produtos Cadastrados</h1>
    <a href="index.php" class="btn btn-secondary mb-3">Voltar</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Produto</th>
                <th>Data de Validade</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto): ?>
                <tr>
                    <td><?= htmlspecialchars($produto['codigo']) ?></td>
                    <td><?= htmlspecialchars($produto['produto']) ?></td>
                    <td><?= htmlspecialchars($produto['data_validade']) ?></td>
                    <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
