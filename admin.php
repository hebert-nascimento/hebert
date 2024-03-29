<?php include_once('header.php'); ?>

<?php
    // select para tabela de dados abaixo
    // session_start();
    include_once 'conexao.php';
    $query = "SELECT * FROM test";
    $result = mysqli_query($conn, $query);
?>
	<title>Admin</title>
<body>
	<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><strong>Menu</strong></div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Add</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Pesquisas</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Lista</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Anexos</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Curiosidades</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom cornavbar">
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                <ul class="navbar-nav mt-2 mt-lg-0">
		                    <li class="nav-item active">
		                        <a class="nav-link style-link-nav" href="#">Home <span class="sr-only">(current)</span></a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link style-link-nav" href="servicos.html">Serviços</a>
		                    </li>
	                    <li class="nav-item dropdown">
		                    <li class="nav-item">
		                        <a class="nav-link style-link-nav" href="#">Contato</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link disabled style-link-nav" href="#" tabindex="-1" aria-disabled="true">sobre</a>
		                    </li>
	                    </li>
	                </ul>
                <form class="form-inline my-2 my-lg-0"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <input class="form-control mr-sm-2" href="#" style="width: 300px;" type="search" placeholder="Pesquisar.." aria-label="Search" />
                </form>
            </div>
            <div class="col-md-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php echo $_SESSION["email"];?>
                     </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Status</a>
                        <a class="dropdown-item" href="#">Mensagens</a>
                        <a class="dropdown-item" href="Alterar-senha.php">Alterar senha</a>
                        <a class="dropdown-item" href="#">Configuraçôes</a>
                        <a class="dropdown-item" href="sair.php">Sair</a>
                    </div>
                </div>  
            </div> 
        </nav>
         <!-- MENU LATERAL -->
        <button class="btn menulateral" id="menu-toggle"><strong> <> </strong></button>
            <!-- <div class="container-fluid">
                <h1 class="mt-4">Painel de Atividades</h1>
               <div class="resultado"></div>
            </div> -->
        <br>

        <div class="container">
            <div class="col-md-4">
                <form class="form-group">
                    <input type="text" name="pesquisa" id="pesquisa" class="form-control" placeholder="Buscar...">
                    <!-- <button value="OK" type="button" class="btn btn-primary">OK</button> -->
                    <hr>
                </form>
            </div>
          <h5 style="color: black;">Resultado:</h5>
        <div class="resultado col-ms-12">
        
        <!-- SELECIONA DADOS DO BANCO -->
<?php 
    $sql = "SELECT * FROM test";
    $query = mysqli_query($conn, $sql);
    $qtd = mysqli_num_rows($query);
 ?>
 <?php
      if($qtd>0){
?>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" class="alert-info">ID</th>
              <th scope="col" class="alert-info">EMAIL</th>
               <th scope="col" class="alert-info">NOME</th>
              <th scope="col" class="alert-info">SOBRENOME</th>
              <th scope="col" class="alert-info">DATA</th> 
              <th class="alert-info">opções</th> 
            </tr>
        </thead>
<?php
                 while ($linha = mysqli_fetch_assoc($query)){ 
?>
          <tbody>
            <tr>   
                <td><?php echo $linha['id'];?></td>
                <td><?php echo $linha['email'];?></td>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['sobrenome'];?></td>
                <td><?php echo $linha['data'];?></td>
                <td>
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                    Editar
                    </button>
                </td>
            </tr>
          </tbody>
<?php
                }
?>
        </table>
<?php
      } else{ 
?>
        <h4>Não foram encontrados registros.</h4>
<?php
            }
?>
        </div>
    </div>

<?php include_once('footer.php'); ?>