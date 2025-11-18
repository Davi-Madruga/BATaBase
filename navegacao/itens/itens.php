<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITENS</title>
    <link rel="stylesheet" href="../../css/tela.css">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
</head>
<body>
<h1>ITENS | <a href="../tela.php"><button>Menu</button></a></h1> 
<a href="cadastrar_item.php"><button>Criar</button></a>
<!--READ-->
<?php
    include '../../infra/db.php';
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
                    echo "<td>
                    <a href='atualizar_item.php?id=".$linha['id']."'><button>Atualizar</button></a> |  
                    <a href='deletar_item.php?id=".$linha['id']."' onclick=\"return confirm('Tem certeza que deseja deletar ".$linha['nome']."?');\"><button>Excluir</button></a>
                    </td>"; 
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

