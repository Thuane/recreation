<?php 


session_start(); //iniciamos a sessão que foi aberta
unset($_SESSION['email']);
unset($_SESSION['senha']); //limpamos as variaveis globais das sessões
session_destroy(); //destruimos a sessão ;)

/*aqui você pode redirecionar para uma determinada página*/
echo "<script>alert('Você saiu!'); document.location.href='../../index.html';</script>";
 

 ?>