<?php

    $host = 'localhost';
    $user = 'root';
    $pass = "";
    $db = "batabase_db";

    $conexao_temp = new mysqli($host, $user, $pass);

    $sql = "CREATE DATABASE IF NOT EXISTS $db";

    if(!$conexao_temp->query($sql)){
        die("Erro: ". $conexao_temp->error);
    }
    
    $conexao = new mysqli($host, $user, $pass, $db);

    $sql = "CREATE TABLE IF NOT EXISTS itens_tbl(
        id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(30) NOT NULL,
        descricao VARCHAR(100) NOT NULL
    )";

    if(!$conexao->query($sql)){
        die("Erro: ". $conexao->error);
        echo '<p>Falhou conexão</p>';
    }

    $sql = "CREATE TABLE IF NOT EXISTS viloes_tbl(
        id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(30) NOT NULL,
        descricao VARCHAR(100) NOT NULL,
        periculosidade VARCHAR(100) NOT NULL
    )";

    if(!$conexao->query($sql)){
        die("Erro: ". $conexao->error);
        echo '<p>Falhou conexão</p>';
    }
?>