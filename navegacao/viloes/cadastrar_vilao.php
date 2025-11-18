<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR VILÃO</title>
    <link rel="stylesheet" href="../../css/tela.css">
</head>
<body>
<h1>CADASTRANDO...</h1>
<form action="cadastrar_vilao.php" method="post">
    <label>Nome:</label><br>
    <input type="text" name="vilao_name" required><br>
    <label>Descricao:</label><br>
    <input type="text" name="vilao_descricao" required><br><br>
    <label>Periculosidade:</label><br>
    <select name="vilao_periculosidade" id="periculosidade" required>
    <option value="PERIGOSO">PERIGOSO</option>
    <option value="URGENTE">URGENTE</option>
    <option value="EXTREMO">EXTREMO</option>
    </select><br><br>
    <button type="submit">Salvar</button> | <a href="viloes.php"><button type="button">Voltar</button></a><br><br>
</form>
<?php
    include '../../infra/db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $vilao_name = $_POST['vilao_name'];
    $vilao_descricao = $_POST['vilao_descricao'];
    $vilao_periculosidade = $_POST['vilao_periculosidade'];

    $create = "INSERT INTO viloes_tbl(nome, descricao, periculosidade) VALUES('$vilao_name','$vilao_descricao','$vilao_periculosidade')";

    if(!$conexao->query($create)){
        die('Erro: '. $conexao->erro);
    };

    header("Location: viloes.php");
    exit;
    $conexao->close();
    }
?>
</body>
</html>