<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
    $nome = $_POST['login'];
    $senha = $_POST['senha'];

    if($nome == 'flash' && $senha == 123 ){ 
        header("Location: perfis/flash.html");
        exit;
    } 
    else if($nome == 'batman' && $senha == 'batbat' ){
        header("Location: perfis/batman.html");
        exit;
    } 
    else if($nome == 'superman' && $senha == 'super' ){
        header("Location: perfis/superman.html");
        exit;
    } 
    else{
        echo"<p>Login ou Senha incorreto</p>";
    }
    ?>
</body>
</html>