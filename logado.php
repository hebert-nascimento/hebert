<?php
// session_start();
include 'header.php';
include_once 'autenticacao.php';
include_once 'Conexao.php';
$query = "SELECT * FROM formulario WHERE tipo =3 AND id = '".$_SESSION["id"]."'";
$result = mysqli_query($conn, $query);
?>
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
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
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
        <div class="container-fluid">
            <h1 class="mt-4">Painel de Atividades</h1>
            <!--  
                         <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#addUsuarioModal">Mensagens<img src="img/mensagem.png" alt=""height="50px"/></button>
                         
                         <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#addUsuarioModal">Tarefas<img src="img/menu.png" alt=""height="55px"/></button>
                         
                         <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#addUsuarioModal">currículo<img src="img/curriculo.png" alt=""height="55px"/></button>
                         
         <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#addUsuarioModal">Dicas<img src="img/dicas.png" alt=""height="55px"/></button>-->
             <!-- #########  --> 

        </div>
        <br>
        <!-- TAG PARA TABELA DE DADOS DO USUARIO-->
        <div class="container"> 
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Dados</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Endereço</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contato</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Email</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                 while ($row_formulario = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row_formulario['email']; ?></td>
                                    <td><?php echo $row_formulario['nome']; ?></td>
                                    <td><?php echo $row_formulario['sobrenome']; ?></td>
                                    <td><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addUsuarioModal">Editar</button></td>
                                </tr>   
                                <?php
                            }
                            ?>				
                        </tbody>
                    </table>
                </div>
                    <!-- TAG ONDE SERÃO EXIBIDOS OS DADOS -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
            </div>
        </div>
            <!-- MENU LATERAL -->
        <button class="btn menulateral" id="menu-toggle"><strong> <> </strong></button>
    </div>
</div>
<!-- Modal -->
<div id="addUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUsuarioModalLabel">Alterar Dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="alterar-dados.php" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="NVemail" type="email" class="form-control" id="NVemail" placeholder="Seu@email.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input name="NVnome" type="text" class="form-control" id="NVnome" placeholder="Nome completo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sobrenome</label>
                        <div class="col-sm-10">
                            <input name="NVsobrenome" type="text" class="form-control" id="NVsobrenome" placeholder="Sobrenome completo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="submit" name="CadUser" id="CadUser" value="OK" class="btn btn-outline-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
