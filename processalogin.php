<?php

session_start();

require('db.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$salt = 'ashd9asd#%wqe!eq'.$login;
$senha_hash = sha1($salt.$senha);

$ps = $pdo->prepare(
    'SELECT * FROM usuario WHERE login = ? AND senha = ?'
);
$ps->execute([$login, $senha_hash]);

if ($linha = $ps->fetch()) {
    $_SESSION['login'] = $linha['login'];
    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['email'] = $linha['email'];
    echo '<a href="only.php">Ir para pagina</a><br>';
    echo '<a href="alterar.html">Redefinir Senha</a>';
}
else {
    echo 'Erro na autenticação';
    exit;
}