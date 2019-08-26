
<!DOCTYPE html>

<html>
<head>
<meta charset=utf8>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Inclua o acima em sua tag head ---------->

	<title>Login Page</title>
  
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<link rel='icon' href='../../menuFoto/log.jpeg' type='image/x-icon' sizes="200x200"/>

	<!--estilos personalizados-->
	<link rel="stylesheet" type="text/css" href="../../Login/css/login.css">
</head>
<body>
<div class="container">
	
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">
				<form method="post" action="../../Login/php/validar.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="email" class="form-control" placeholder="Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="senha" class="form-control" placeholder="Senha">
					</div>
                                    
					
					<div class="form-group">
                                            <input type="submit" value="Login" class="btn float-right login_btn">
                                        </form>
			         </div>
				
				
			</div>
			<div class="card-footer">
				<div  class="d-flex justify-content-center links">
					
                Não tem uma conta?<a id="palavras" href="../cadastro.html">Inscrever-se</a>
				</div>
				<div class="d-flex justify-content-center">
					<a id="palavras" href="../recuperarsenha.html">Esqueceu sua senha?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
<script> 
 
</script>
</body>
</html>