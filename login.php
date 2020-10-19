<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
require('css.php');
?>
    <title>Questao 1</title>
</head>
<body>
<?php
require('head.php');
?>
    <form action="processalogin.php" method="POST">
        
        
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Entrar">

    </form>

    <a href="questao4.php" class="amenu">NÃO TEM CADASTRO? CLIQUE AQUI</a><br>
    <a href="alterar.php" class="amenu">ESQUECEU A SENHA?</a>
    <?php
require('footer.php');
?>
</body>
</html>