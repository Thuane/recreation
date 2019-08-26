<?php

session_start();

$host = 'localhost';
$db   = 'recreation';
$user = 'root';
$pass = '';
$charset = 'utf8';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
     $conexao = new PDO($dsn, $user, $pass, $options);

     $sql=("SELECT * FROM usuarios WHERE email=:email AND senha=:senha");

    $resultado=$conexao->prepare($sql);
    
    $email = $_POST["email"];
    $senha=base64_encode($_POST["senha"]);
    

    $resultado->bindValue(":email" , $email);
    $resultado->bindValue(":senha" , $senha);
    $resultado->execute();
    
    $numeroRegistro =$resultado->rowCount();
    
    if($numeroRegistro !=0){
        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
        header("Location:../../imagens/upload/denuncias.php");
        
    }else{   //bloqueia o login sem dados
        header("Location:../../Login/php/phplogin.php"); 
    }
    
} catch (Exception $e) {
  die("Erro" . $e->getMessage());
    
}

 ?>

 