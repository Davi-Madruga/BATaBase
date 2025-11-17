<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VILÕES</title>
    <link rel="stylesheet" href="../../css/tela.css">
</head>
<body>
<h1>VILÕES | <a href="../tela.php"><button>Menu</button></a></h1> 
<a href="cadastrar_vilao.php"><button>Cadastrar</button></a>
<!--READ-->
<?php
    include '../../infra/db.php';
    $select = "SELECT * FROM viloes_tbl";
    $result = $conexao->query($select);

    if($result->num_rows > 0){
           echo "<table class='table' border='1'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Periculosidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>";
                while($linha = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>".$linha['descricao']."</td>";
                    echo "<td>".$linha['periculosidade']."</td>";
                    echo "<td>
                    <a href='atualizar_vilao.php?id=".$linha['id']."'><button>Atualizar</button></a> |  
                    <a href='deletar_vilao.php?id=".$linha['id']."' onclick=\"return confirm('Tem certeza que deseja apagar ".$linha['nome']."?');\"><button>Apagar</button></a>
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

