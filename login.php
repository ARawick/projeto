<?php session_start(); 

?>
<html>

  <body>
       <?php 
       
       
       $email_digitado = $_POST["e"];
       $senha_digitada = $_POST["s"];
       
       if($email_digitado == $_SESSION["e"] && $senha_digitada == $_SESSION["s"]){
       
        header('location: logado.php');
           echo "SEJA BEM VINDO! Clique para acessar sua conta"; 
           
           
       }else{
            echo "Email ou senha Incorreta!!! Tente Novamente:";          
          }
        
       
          
        ?> 
    
  </body>
   <a href="LoginProjeto.php"> Clique aqui</a>
</html>
        
      
    