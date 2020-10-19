<?php   

require('db.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

if (
    valido_login($login) &&
    valido_senha($senha) &&
    valido_nome($nome) && 
    valido_email($email)
) {
    $ps = $pdo->prepare(
        'SELECT * FROM usuario WHERE login = ?'
    );
    $ps->execute([$login]);

    if ($ps->fetch()) {
        echo 'Erro. Usuário já existe';
    }else {
        cadastrar($nome, $email, $login, $senha);
    }
}else {
    echo 'Erro! Dados inválidos!';
}

function cadastrar($nome, $email, $login, $senha)
{
    global $pdo;

    $salt = 'ashd9asd#%wqe!eq'.$login;
    $senha_hash = sha1($salt.$senha);

    $ps = $pdo->prepare("
            INSERT INTO usuario (nome, email, login, senha)
            VALUES (?, ?, ?, ?)
            ");
    $ps->execute([$nome, $email, $login, $senha_hash]);

    if ($ps -> rowCount() == 1) {
        echo 'Cadastrado com sucesso!';
    } else {
        echo 'Erro ao Cadastrar';
    }
}

function valido_login($a){
    return true;
}
function valido_senha($a){
    return true;
}
function valido_nome($a){
    return true;
}
function valido_email($a){
    return true;
}





