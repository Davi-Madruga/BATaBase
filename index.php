<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Titulo</h1>
    <?php
    $nome = $_POST('nome');
    $senha = $_POST('senha');
    echo"<p>Texto teste para testar o teste</p>";
    if($nome == 'flash' && $senha == 123 ){
       echo"<p>Bem vindo Flash!</p>"; 
    }
    ?>
</body>
</html>