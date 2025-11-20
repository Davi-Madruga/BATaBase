<?php
session_start();
$nome = $_POST['login'];
$senha = $_POST['senha'];

if($nome == "batman" && $senha == "123"){
    header("Location: tela.php");
    exit;
}

header("Location: login.php?erro=1");
exit;
?>
