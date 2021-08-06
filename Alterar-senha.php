<!DOCTYPE html>
<?php 
      include 'Conexao.php';
	  // include 'header.php';
	  
?>
<html lang="pt-br">
<head><title>Alterar Senha</title>

	<meta charset="utf-8" />	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	   <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="custom.css" />
	   
</head>
<body>

<div class="well">
		  <P><h2>Tela De Alteração De Senha</h2></p>
</div>
		
<div class="container">
    <div class="row">
	    <form action="Atualizar.php" method="POST">
			Alterar Senha:
			<input type="password" name="NVsenha" id="NVsenha" class="form-control" required></input><br><br>
			<input type="submit" name="botao" value="Alterar" class="btn btn-primary"></input>
		</form>
    </div>
</div>


</body>
</html>
<?php //include 'footer.php';?>