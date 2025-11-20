<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR ITEM</title>
    <link rel="stylesheet" href="../../css/formulario.css">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<h1 class="titulo">CADASTRANDO...</h1>
<a href="../../index.php"><button class="BtoFechar">X</button></a>
<div class="Formulario">
<form action="cadastrar_item.php" method="post">
    <label>Nome:</label><br>
    <input type="text" name="item_name" required><br>
    <label>Descricao:</label><br>
    <input type="text" name="item_descricao" required><br><br>
    <button type="submit" class="button">Salvar</button> | <a href="itens.php"><button type="button" class="button">Voltar</button></a><br><br>
</form>
</div>
<?php
    include '../../infra/db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $item_name = $_POST['item_name'];
    $item_descricao = $_POST['item_descricao'];

    $create = "INSERT INTO itens_tbl(nome, descricao) VALUES('$item_name','$item_descricao')";

    if(!$conexao->query($create)){
        die('Erro: '. $conexao->erro);
    };

    header("Location: itens.php");
    exit;
    $conexao->close();
    }
?>
</body>
</html>