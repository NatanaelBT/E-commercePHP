<?php

try{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=lista12;charset=utf8;port=3306',
        'root',''
    );
}
catch(PDOException $e){
    echo 'Erro:', $e->getMessage();
}
