<?php
header('Content-Type: text/html; charset=utf-8');

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "recreation";
$charset = 'utf8';

try {
    $db_conn= new PDO("mysql:host={$servidor};dbname={$dbname}",$usuario,$senha);
    $db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo $e->getMessage();
}





?>