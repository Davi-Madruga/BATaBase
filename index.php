<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Redirecionamento</h1>

    <?php
    $nome = $_POST['login'];
    $senha = $_POST['senha'];

    if($nome == 'flash' && $senha == 123 ){ 
        echo"<p><a href='perfis/flash.html'>Clique aqui!</a></p>"; 
    } 
    else if($nome == 'batman' && $senha == 'batbat' ){
        echo"<p><a href='perfis/batman.html'>Clique aqui!</a></p>"; 
    } 
    else if($nome == 'superman' && $senha == 'super' ){
        echo"<p><a href='perfis/superman.html'>Clique aqui!</a></p>"; 
    } 
    else{
        echo"<p>Login ou Senha incorreto</p>";
    }
    ?>
</body>
</html>