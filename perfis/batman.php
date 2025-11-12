<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batman</title>
    <link rel="stylesheet" href="perfis.css">
    <style>
    .janela_conversa .batmensagem{
        display: block;
        width: fit-content;
        padding: 6px 10px;
        margin: 4px 0;
        border-radius: 8px;
        margin-left: auto;
        max-width: 160px;
        border: 1px solid black;
        word-wrap: break-word; 
        overflow-wrap: break-word; 
    }       
    body{
        background-image: url('../img/batpc.png');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed; 
        min-height: 100vh;
        margin: 0;
    }
.tela {
    position: absolute;
    width: 318px;
    height: 258px;

    aspect-ratio: 1.4; /* mantém proporção aproximada da tela */
    cursor: pointer;
    border: 4px solid rgba(255,255,255,0); /* invisível, mas ajuda a ver */
    transition: 0.2s;
    top: 14%;
    left: 38%;
}

.tela:hover {
    border-color: #00d9ff;
    border: 3px 3px 3px 3px;
    border-style: solid;

}


    </style>
</head>
<body>
    <a href="tela2.html">
    <div class="tela"></div>
</a>
    <a href="../formulario.php"><button>Deslogar</button></a>
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
            header("Location: batman.php"); 
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
            <input type="hidden" name="autor" value="Batman">
            <input name="item"  type="text">
            <button type="submit">^</button>
        </form>
    </div>

</body>
</html>