<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITENS</title>
    <link rel="stylesheet" href="../css/tela.css">
</head>
<body>
<h1>ITENS | <a href="tela.php"><button>Menu</button></a></h1> 
<a href="cadastrar_item.php"><button>Criar</button></a>
<!--READ-->
<?php
    include '../infra/db.php';
    $select = "SELECT * FROM itens_tbl";

    $result = $conexao->query($select);
    if($result->num_rows > 0){
           echo "<table class='table' border='1'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>";
                while($linha = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>".$linha['descricao']."</td>";
                    echo "<td><a href='atualizar_item.php?id=".$linha['id']."'><button>Editar</button></a> | <a type='button' id='excluir' href='delete.php?id=".$linha['id']."'>Excluir</a> </td>";
                    echo"</tr>";    
                }
                echo "</tbody>
            </table>";
    }else{
        echo"Nenhum item cadastrado\n";
    }
    $conexao->close();

?>
</body>
</html>

