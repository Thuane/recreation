<?php

try{
$conexao = new PDO('mysql:host=localhost;dbname=recreation', "root", "",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$stmt = $conexao->prepare("UPDATE usuarios SET senha=? WHERE email =?");
$email=$_POST["email"];
$senha=base64_encode($_POST["senha"]);

$stmt->bindParam(1,$senha);
$stmt->bindParam(2,$email);
$stmt->execute();
if($stmt->rowCount() > 0){
 ?>
			<script>
				alert("Alterado com sucesso!");
				window.location.href=("../../Login/php/phplogin.php");
			</script>
		<?php
}else{
 ?>
			<script>
				alert("Senha não foi alterada!");
				window.location.href=("../../Login/recuperarsenha.html");
			</script>
		<?php
}
}catch(PDOException $e){
echo $e->getMessage();
}
?>