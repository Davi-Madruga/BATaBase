<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR ITEM</title>
    <link rel="stylesheet" href="../../css/tela.css">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
</head>
<body>
<h1>ATUALIZANDO...</h1>
<?php
    include '../../infra/db.php';
    $id = $_GET['id'] ?? null;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id_post = $_POST['id'];
        $item_name = $_POST['nome'];
        $item_descricao = $_POST['descricao'];

        $update = "UPDATE itens_tbl SET nome='$item_name', descricao='$item_descricao' WHERE id=$id_post";
        if(mysqli_query($conexao, $update)){
            header("Location: itens.php");
            exit();
        }else{
            echo"<p>Erro ao atualizar registro: ".mysqli_error($conexao).".</p>";
        }
    }

    if($id){
        $select = "SELECT * FROM itens_tbl WHERE id='$id'";
        $result = $conexao->query($select);

        if($result->num_rows == 1){
            $item = mysqli_fetch_assoc($result);
        } else {
            echo"<p>Registro não encontrado\n</p>";
            exit();
        }
    } else{
        echo"<p>ID da revista não encontrado.\n</p>";
        exit();
    }
    mysqli_close($conexao);
?>
<form method="post">
    <input type="hidden" name='id' value="<?php echo $item["id"]?>"><br>
    <label for="nome">Nome: </label><br>
    <input type="text" name='nome' id='nome' value="<?php echo $item["nome"]?>" required><br>
    <label for="descricao">Descrição: </label><br>
    <input type="text" name='descricao' id='descricao' value="<?php echo $item["descricao"]?>" required><br><br>  
    <button type="submit">Atualizar</button> | <a href="itens.php"><button type="button">Voltar</button></a>
</form>
</body>
</html>