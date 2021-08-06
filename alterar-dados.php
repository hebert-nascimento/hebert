<?php
    session_start();
	// include_once 'autenticacao.php';
    include_once 'Conexao.php';
    // $id = $_POST['id'];
    // $email = $_POST['email'];
	$NVemail = filter_input(INPUT_POST,'NVemail',FILTER_SANITIZE_STRING);
	
	// $nome = $_POST['nome'];
	$NVnome = filter_input(INPUT_POST,'NVnome',FILTER_SANITIZE_STRING);
	
	
	// $sobrenome = $_POST['sobrenome'];
	$NVsobrenome = filter_input(INPUT_POST,'NVsobrenome',FILTER_SANITIZE_STRING);
	
	$alt = "UPDATE formulario SET email = '".$NVemail."', nome = '".$NVnome."' , sobrenome = '".$NVsobrenome."' WHERE id = ".$_SESSION["id"];
    
	  // $result = mysqli_query($conn, $alt);
	  // $row_formulario = mysqli_fetch_assoc($result);
	
	 if(mysqli_query($conn, $alt)){
				// echo "<p class='text-center text-sucess'>Senha alterada com Sucesso!</p>"; 

				$query = "SELECT * FROM formulario WHERE id = ".$_SESSION["id"];
				$result = mysqli_query($conn, $query);
				if ($arrayUsuario = mysqli_fetch_array($result)) {
					unset($_SESSION["email"]);
					$_SESSION["email"] = $arrayUsuario["email"];
					header("Location: Logado.php");
				}
				
			} 
			mysqli_close($conn);
			
?>