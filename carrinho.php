<?php
    session_start();
    $name=$_POST["nome"];
    $senha=$_POST["senha"];
    include("conecta.php");

    $comando = $pdo->prepare("SELECT * FROM cadastro WHERE usuario='$name' and senha1='$senha'");
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrinho.css">
    <link rel="shortcut icon" href="imagens/icone-da-pagina.png" type="image/x-icon">
    <title>Smiling</title>
   

</head>
<body>
    
    <header>
    </nav>
   <center>
       <a href="index.html"><img src="imagens/smlAGRvaiP.png" width="200px"></a>
   </center> 
</header>

<div class="tudo">    

    
    <div class="img"> </div>
    
    
    <div class="np"> </div> 

    <div class="nada"> </div>
</div>

</body>
</html> 

este arquivo é php
fazer um select na tabela carrinho

codigo login