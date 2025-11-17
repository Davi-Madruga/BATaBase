<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR ITEM</title>
    <link rel="stylesheet" href="../../css/tela.css">
</head>
<body>
<h1>CADASTRANDO...</h1>
<form action="cadastrar_item.php" method="post">
    <label>Nome:</label><br>
    <input type="text" name="item_name"><br>
    <label>Descricao:</label><br>
    <input type="text" name="item_descricao"><br><br>
    <button type="submit">Salvar</button> | <a href="itens.php"><button type="button">Voltar</button></a><br><br>
</form>
<?php
    include '../../infra/db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $item_name = $_POST['item_name'];
    $item_descricao = $_POST['item_descricao'];

    if($item_name == '' || $item_descricao == ''){
        die('Erro: Preencha todos os campos');
    };

    $create = "INSERT INTO itens_tbl(id, nome, descricao) VALUES('$item_name','$item_descricao')";

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