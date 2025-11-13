<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="titulo">Central de Jeofton</h1>
    <div class="Formulario">
        <form action="validacao.php" method="post">
            <label for="login">Login:</label><br>
            <input type="text" name="login" id="login"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha"><br><br>

            <button type="submit">Enviar</button>
            <?php
            if (isset($_GET['erro'])) {
                echo "<p class='aviso'>Usuário ou senha incorretos.</p>";
            }
            ?>
        </form> 
    </div>
</body>
</html>
