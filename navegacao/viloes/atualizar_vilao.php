<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR VILÃO</title>
    <link rel="stylesheet" href="../../css/tela.css">
</head>
<body>
<h1>ATUALIZANDO...</h1>
<?php
    include '../../infra/db.php';
    $id = $_GET['id'] ?? null;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id_post = $_POST['id'];
        $vilao_name = $_POST['nome'];
        $vilao_descricao = $_POST['descricao'];
        $vilao_periculosidade = $_POST['vilao_periculosidade'];

        $update = "UPDATE viloes_tbl SET nome='$vilao_name', descricao='$vilao_descricao', periculosidade='$vilao_periculosidade' WHERE id=$id_post";
        if(mysqli_query($conexao, $update)){
            header("Location: viloes.php");
            exit();
        }else{
            echo"<p>Erro ao atualizar registro: ".mysqli_error($conexao).".</p>";
        }
    }

    if($id){
        $select = "SELECT * FROM viloes_tbl WHERE id='$id'";
        $result = $conexao->query($select);

        if($result->num_rows == 1){
            $vilao = mysqli_fetch_assoc($result);
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
    <input type="hidden" name='id' value="<?php echo $vilao["id"]?>"><br>
    <label for="nome">Nome: </label><br>
    <input type="text" name='nome' id='nome' value="<?php echo $vilao["nome"]?>" required><br>
    <label for="descricao">Descrição: </label><br>
    <input type="text" name='descricao' id='descricao' value="<?php echo $vilao["descricao"]?>" required><br><br>  
    <label>Periculosidade:</label><br>
<select name="vilao_periculosidade" id="periculosidade" required>
    <option value="PERIGOSO" <?php echo ($vilao["periculosidade"] == "PERIGOSO") ? "selected" : ""; ?>>PERIGOSO</option>

    <option value="URGENTE" <?php echo ($vilao["periculosidade"] == "URGENTE") ? "selected" : ""; ?>>URGENTE</option>

    <option value="EXTREMO" <?php echo ($vilao["periculosidade"] == "EXTREMO") ? "selected" : ""; ?>>EXTREMO</option>
</select>
  
    <button type="submit">Atualizar</button> | <a href="vilao.php"><button type="button">Voltar</button></a>
</form>
</body>
</html>