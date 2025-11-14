<?php
session_start();
$nome = $_POST['login'];
$senha = $_POST['senha'];

if($nome == "batman" && $senha == "123"){
    header("Location: batman.php");
    exit;
}

header("Location: formulario.php?erro=1");
exit;
?>
