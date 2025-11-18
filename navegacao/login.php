<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="../index.php"><button class="BtoFechar">X</button></a>
    <h1 class="titulo">BEM V INDO</h1>
    <div class="Formulario">
        <form action="validacao.php" method="post">
            <label for="login">Login:</label><br>
            <input type="text" name="login" id="login"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha"><br><br>

            <button type="submit" class="enviar">Enviar</button>
            <?php
            if (isset($_GET['erro'])) {
                echo "<p class='aviso'>Usuário ou senha incorretos.</p>";
            }
            ?>
        </form> 
    </div>
</body>
</html>
