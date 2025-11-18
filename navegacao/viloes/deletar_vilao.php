<?php
    include '../../infra/db.php';
    $id = $_GET['id'] ?? null;

    if($id){        
        $delete = "DELETE FROM viloes_tbl WHERE id=$id";
               
        if(mysqli_query($conexao, $delete)){
            header('Location: viloes.php');
        }else{
            echo "<p>Erro ao excluir registro: ".mysqli_error($conexao).".</p>";
        }
    }else{
        echo "<p>ID da Revista não fornecido.</p>";
        exit();
    }
    mysqli_close($conexao);
?>