
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
require('css.php');
?>
    <title>Redefinir Senha</title>
</head>
<body>
<?php
require('head.php');
?>
    <form action="alterarsenha.php" method="POST">
        
        Senha Atual: <input type="text" name="senha"><br>
        Nova Senha: <input type="text" name="newSenha"><br>
        Nova Senha: <input type="text" name="newSenha2"><br>
        
        <input type="submit" value="Redefinir Senha">

    </form>
    <?php
require('footer.php');
?>

</body>
</html>