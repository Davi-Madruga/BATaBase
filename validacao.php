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
    
    $logins = [
        ['login' => "flash",'senha' => "123"], 
        ['login' => "batman",'senha' => "123"],
        ['login' => "superman",'senha' => "123"]
    ];

    foreach($logins as $login){
        if($login['login']==$nome && $login['senha']==$senha){
            header("Location: perfis/{$login['login']}.php");
            exit;
        }
    }
    header("Location: formulario.php?erro=1");
    exit;
    ?>
</body>
</html>