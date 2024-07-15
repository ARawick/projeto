<?php session_start(); 
?>
]<html>

<body>
  Bem vindo <?php echo $_POST["n"]; ?><br>
  O seu email é: <?php echo $_POST["e"]; ?> </br>
  
  <a href="LoginProjeto.php"> CLIQUE AQUI</a>

  <?php
  
  $nome = $_POST["n"];
  $email = $_POST["e"];
  $senha = $_POST["s"];
  

  $_SESSION["n"] = $nome;
  $_SESSION["e"] = $email;
  $_SESSION["s"] = $senha;

 
 
  ?>
</body>

</html>