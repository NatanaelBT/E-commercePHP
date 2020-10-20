<?php   

require('db.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

if (
    valido_login($login) && //Tem que fazer os codigos de validação de dados
    valido_senha($senha) &&
    valido_nome($nome) && 
    valido_email($email) &&
    valido_telefone($telefone)
) {
    $ps = $pdo->prepare(
        'SELECT * FROM tb_cliente WHERE login = ?'
    );
    $ps->execute([$login]);

    if ($ps->fetch()) {
        echo 'Erro. Usuário já existe';
    }else {
        cadastrarCliente($nome, $email, $login, $senha, $telefone);
    }
}else {
    echo 'Erro! Dados inválidos!';
}

// Separar as funções do restando do código

function cadastrarCliente($nome, $email, $login, $senha, $telefone)
{
    global $pdo;

    $salt = 'ashd9asd#%wqe!eq'.$login;
    $senha_hash = sha1($salt.$senha);

    $ps = $pdo->prepare("
            INSERT INTO tb_cliente (nome, email, login, senha, telefone)
            VALUES (?, ?, ?, ?, ?)
            ");
    $ps->execute([$nome, $email, $login, $senha_hash, $telefone]);

    if ($ps -> rowCount() == 1) {
        
        echo '<script> alert("Cadastrado com sucesso!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=login.php">';
    } else {
        echo 'Erro ao Cadastrar';
        echo '<script> alert("Usuario já existe!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=questao4.php">';

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
function valido_telefone($a){
    return true;
}





