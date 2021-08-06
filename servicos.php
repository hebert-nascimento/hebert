<?php include_once('header.php'); ?>

	<title>Serviços</title>
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
	                        <a class="nav-link style-link-nav" href="#">Serviços</a>
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
  <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <h2>Heading</h2>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
              <h2>Heading</h2>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
         </div>
          
        </div>
      </div>
  </div>
    <br>
<?php include_once('footer.php'); ?>