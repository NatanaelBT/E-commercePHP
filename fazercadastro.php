<?php require('cabecalho.php'); ?>
    <form action="cadastro.php" method="POST">
        
        Nome: <input type="text" name="nome" required><br>
        email: <input type="email" name="email" required><br>
        Login: <input type="text" name="login" required><br>
        Senha: <input type="password" name="senha" required><br>
        Telefone: <input type="text" name="telefone" required><br>
        <input type="submit" value="Cadastrar">

    </form>
<?php require('footer.php'); ?>
