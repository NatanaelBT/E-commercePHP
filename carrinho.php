<?php 
require('autentica.php');
require('db.php');


$lanche = $_POST["lanche"];
$bebida = $_POST["bebida"];

$ps = $pdo->prepare(
    'SELECT nomeProduto,precoProduto FROM tb_produtos WHERE idproduto = ?'
    
);
$ps->execute([$lanche]);


if ($linha = $ps->fetch()) {
    $lancheNome = $linha['nomeProduto'];
    $lanchePreco = $linha['precoProduto'];
}

$ps = $pdo->prepare(
    'SELECT nomeProduto,precoProduto FROM tb_produtos WHERE idproduto = ?'
    
);
$ps->execute([$bebida]);


if ($linha = $ps->fetch()) {
    $bebidaNome = $linha['nomeProduto'];
    $bebidaPreco = $linha['precoProduto'];
}

$precoFinal = $lanchePreco+$bebidaPreco;

cadastrarCarrinho($lancheNome, $bebidaNome, $precoFinal);

function cadastrarCarrinho($lancheNome, $bebidaNome, $precoFinal){
    
    global $pdo;

$ps = $pdo->prepare("
            INSERT INTO tb_carrinho (login, lanche, bebida, valorTotal)
            VALUES (?, ?, ?, ?)
            ");
    $ps->execute([$_SESSION['login'], $lancheNome, $bebidaNome, $precoFinal]);

    if ($ps -> rowCount() == 1) {

        echo "Seu pedido é $lancheNome com $bebidaNome<br>";
       
       echo "O total é R$$precoFinal";
        
    } else {
        
        echo '<script> alert("Erro ao Cadastrar!")</script>';
       

    }
}




    


?> 

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
<a href="limparcarrinho.php" class="amenu">Limpar Carrinho</a>
    
 
</body>
</html>