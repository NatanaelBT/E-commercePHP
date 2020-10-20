<?php require('autentica.php');





require('db.php');

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$login = $_SESSION['login'];
$senha = $_POST['senha'];
$newSenha = $_POST['newSenha'];
$newSenha2 = $_POST['newSenha2'];

$salt = 'ashd9asd#%wqe!eq'.$login;
$senha_hash = sha1($salt.$senha);

$ps = $pdo->prepare(
    'SELECT * FROM tb_cliente WHERE login = ? AND senha = ?'
);
$ps->execute([$login, $senha_hash]);

if (($linha = $ps->fetch()) && ($newSenha == $newSenha2)) {
    
    $senha_hash1 = sha1($salt.$newSenha);

    $ps = $pdo->prepare("
        UPDATE tb_cliente
        SET senha = ?
        WHERE login = ?
    
            ");
    $ps->execute([$senha_hash1, $login]);
    
    echo 'Senha Alterada';

}
else {
    echo 'Erro. Senha atual errada ou senhas não combinam';
    exit;
}













?> 