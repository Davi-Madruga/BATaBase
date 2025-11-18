<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITENS</title>
    <link rel="stylesheet" href="../../css/tabelas.css">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
<h1 class="titulo">ITENS</h1> 
<a href="../../index.php"><button class="BtoFechar">X</button></a>
<a href="../tela.php" ><button class="btnesquerda button">MENU</button></a>
<a href="cadastrar_item.php"><button class="btndireita button">CRIAR</button></a>
<!--READ-->
<?php
    include '../../infra/db.php';
    $select = "SELECT * FROM itens_tbl";
    $result = $conexao->query($select);
    
    if($result->num_rows > 0){
           echo "<div class='table_container'><table>
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
                    <a href='atualizar_item.php?id=".$linha['id']."'><button class='button'>Atualizar</button></a> |  
                    <a href='deletar_item.php?id=".$linha['id']."' onclick=\"return confirm('Tem certeza que deseja deletar ".$linha['nome']."?');\"><button class='button'>Excluir</button></a>
                    </td>"; 
                    echo"</tr>";    
                }
                echo "</tbody>
            </table></div>";
    }else{
        echo"<div class='table_container'><p>NENHUM ITEM CADASTRADO\n</p></div>";
    }
    $conexao->close();

?>
</body>
</html>

