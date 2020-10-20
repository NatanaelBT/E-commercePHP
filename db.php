<?php

try{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=db_ecommerce;charset=utf8;port=3306',
        'root',''
    );
}
catch(PDOException $e){
    echo 'Erro:', $e->getMessage();
}
