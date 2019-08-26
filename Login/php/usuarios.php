
 <?php


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

     $sql=("SELECT * FROM usuarios WHERE nome=:nome OR email=:email OR senha=:senha");

    $resultado=$conexao->prepare($sql);
    
    
    $nome= $_POST["nome"];
    $email= $_POST["email"];
    $senha=base64_encode($_POST["senha"]);
    
    
    $resultado->bindValue (":nome",$nome);
    $resultado->bindValue (":email",$email);
    $resultado->bindValue (":senha",$senha);
    $resultado->execute();

    $numeroRegistro=$resultado->rowCount();
    
      if($numeroRegistro != 0){
        
        header("Location:../../Login/cadastro.html");
      } else{ 
       $stmt = $conexao->prepare("insert into usuarios(nome,email,senha) values (?,?,?)");
       
       $stmt->bindValue(1,"$nome");
       $stmt->bindValue(2,"$email");
       $stmt->bindValue(3,"$senha");
       $stmt->execute();
       
        header("Location:../../Login/php/phplogin.php");

       }

} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}  
   ?>        
 
