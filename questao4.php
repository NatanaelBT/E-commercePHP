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
    <form action="cadastro.php" method="POST">
        
        Nome: <input type="text" name="nome"><br>
        email: <input type="text" name="email"><br>
        Login: <input type="text" name="login"><br>
        Senha: <input type="text" name="senha"><br>
        <input type="submit" value="Cadastrar">

    </form>
    <?php
require('footer.php');
?>

</body>
</html>