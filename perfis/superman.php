<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superman</title>
    <link rel="stylesheet" href="perfis.css">
</head>
<body>
    <a href="../formulario.html"><button>Deslogar</button></a>
    <?php
        session_start();
        if(isset($_POST['resetar'])){
            $_SESSION['itens'] = array();
        }
        if(!isset($_SESSION['itens'])){
            $_SESSION['itens'] = array();
        }
        if(isset($_POST['item']) && $_POST['item'] != ''){
            $_SESSION['itens'][] = [
                'autor' => $_POST['autor'],
                'texto' => $_POST['item']
            ];
            header("Location: superman.php"); 
            exit;
        }
    ?>
    <div class="janela_conversa">
        <form method="post">
            <button type="submit" name="resetar">X</button>
        </form>
        <div class="mensagens">
            <?php
            foreach($_SESSION['itens'] as $i){
            if($i['autor'] == 'Flash')echo "<p class='flashmensagem'>{$i['texto']}</p>";
            else if($i['autor'] == 'Batman')echo "<p class='batmensagem'>{$i['texto']}</p>";
            else if($i['autor'] == 'Superman')echo "<p class='supermensagem'>{$i['texto']}</p>";
            }
            
            ?>
        </div>
        <form method="post">
            <input type="hidden" name="autor" value="Superman">
            <input name="item" type="text">
            <button type="submit">^</button>
        </form>
    </div>

</body>
</html>