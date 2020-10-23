<?php require('cabecalho.php'); ?>
    <form action="processalogin.php" method="POST">
        
        
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Entrar">

    </form>

    <a href="fazercadastro.php" class="botaoregistro">NÃO TEM CADASTRO? CLIQUE AQUI</a><br>
    <a href="alterar.php" class="botaoregistro">ESQUECEU A SENHA?</a>
<?php require('footer.php'); ?>