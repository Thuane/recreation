<!DOCTYPE html>
<?php

//bloqueando a volta para pagina de denuncias//

session_start();
if(!isset($_SESSION['email']) AND !isset($_SESSION['senha'])){
  header("Location:../../index.html");
}
?>
<html lang="pt-br">
  <head>
      <title> ReCreation - Denúncias</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <link rel="stylesheet" href="style/css/style.css">
    
    <link rel='icon' href='../../menuFoto/log.jpeg' type='image/x-icon' sizes="200x200"/>

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

   <link rel='icon' href='menuFoto/favicon.png' type='image/x-icon' sizes="200x200"/>
   
  </head>
  
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark" style= "background: linear-gradient(to right, green, black); font-size: 130%">

                <div class="container">
            
<!---------------------------------------------------- menu (botão menu) ---------------------------------------------------------->
            
              <div class="logo mb-0"><img src="../../menuFoto/logo.png">
              </div>
            
                
<!---------------------------------------------------------- botao com opcoes abaixo ------------------------------------------>
            

            <ul class="navbar-nav ml-auto">
              
              
              <li class="nav-item dropdown">
                  <li class="nav-item">
                     <a class="nav-link" href="../../Login/php/logout.php">Sair</a>
                  </li>
              </li>
                  
            </ul>
            
            
          </div>
            
        </div>
          
        </nav>

<!---------------------------------------------------- Título Principal ---------------------------------------------------->

    <div class="container">

      <div class="row">
  
        <div class="col-12 text-center my-5">
  
          <h1 class="display-4 text-left" style="font-family:arial"><b>Denúncias e Reclamações</b></h1>
          
      </div>
        
    </div>
    
  </div>

<!---------------------------------------------------------Noticia---------------------------------------------------------------->

<div class="container">

    <div class="row">

            <div class=" col-md-12 text-center my-1">
             
            <div class="post-content">
                <img src="../../imagens/upload/denuncia.jpg">    
            </div>
            

        <p class= "col-md-12 my-5" style="text-align:justify;font-size: 120%">
        Viu algo de errado em uma das praças, museus e locais públicos do Recife e quer fazer uma denúncia ou reclamação? Mais abaixo você encontra como entrar em contato com nossa página, de forma rápida, simples e anônima.. </p>

        </div>        
    
    </div>

</div>
      
<!-----------------------------------------------(Formulário Responsivo)----------------------------------------------------------->
      
      <div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading">Faça sua <strong> Denúncia </strong> <span></span></h4>
                <div class="form">
               	<form action="phpdenun.php" method="POST" enctype="multipart/form-data">
                    <br> <input type="text" placeholder="Assunto: " value=""  required="" name="assunto" class="txt">
                    
                    <br><br> <textarea rows="4" cols="40" placeholder="Denúncia:"  required="" name="descricao" type="text" class="txt_3"></textarea>
                	 <br><strong> Mostre o problema: </strong><input type="file" name="arquivo" multiple class="rad">
                     <input type="submit" value="Enviar" name="enviar" class="txt2">
                </form>
            </div>
            </div>
        </div>
	</div>
</div>
<br><br>




<!------------------------------------------------------Footer------------------------------------------------------------->
<footer class="rod">
<p class="copyright text-center " color="success"> Copyright &copy; RECreation 2019 - Todos os direitos reservados.</p>
</footer>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="node_modules/jquery/dist/jquery.js"></script>
      <script src="node_modules/popper.js/dist/umd/popper.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>
 