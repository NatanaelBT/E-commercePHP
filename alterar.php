
<?php
require('cabecalho.php');
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