<?php 

	include("conexao.php");
	if(isset($_POST['enviar']))
	{
		$assunto=$_POST['assunto'];
		$descricao=$_POST['descricao'];

		$arquivo=$_FILES['arquivo']['name'];
		$tmp_dir=$_FILES['arquivo']['tmp_name'];
		$imageSize=$_FILES['arquivo']['size'];


		

		$upload_dir='arquivos/';
		$imgExt=pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
		$validar_extensao=array('jpeg', 'jpg', 'png');
		$arquivo=rand(1000, 1000000).".".$imgExt;
		move_uploaded_file($tmp_dir, $upload_dir.$arquivo);
		$stmt=$db_conn->prepare('INSERT INTO denuncia(assunto, descricao,arquivo) VALUES (:assunto, :descricao, :arquivo)');

		

		

		$stmt->bindParam(':assunto', $assunto);
		$stmt->bindParam(':descricao', $descricao);
		$stmt->bindParam(':arquivo', $arquivo);
		if($stmt->execute())
		{
			?>
			<script>
				alert("denuncia realizada com sucesso");
				window.location.href=("../upload/denuncias.php");
			</script>
		<?php
		}else 

		{
			?>
			<script>
				alert("Error");
				window.location.href=("../upload/denuncias.php");
			</script>
		<?php
		}

	}
?>



