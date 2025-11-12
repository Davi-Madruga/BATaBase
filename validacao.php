<?php
session_start();
$nome = $_POST['login'];
$senha = $_POST['senha'];

$logins = [
    ['login' => "flash",'senha' => "123"], 
    ['login' => "batman",'senha' => "123"],
    ['login' => "superman",'senha' => "123"]
];

foreach($logins as $login){
    if($login['login']==$nome && $login['senha']==$senha){
        $_SESSION['usuario'] = $login['login'];
        header("Location: perfis/{$login['login']}.php");
        exit;
    }
}
header("Location: formulario.php?erro=1");
exit;
?>
