            <div id="addUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUsuarioModalLabel">Cadastrar Usuário</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="insert_form" action="cadastrar_usuario.php" method="POST">
                                        <div class="form-group">
                                            <label class="sr-only">E-mail</label>
                                            <input name="email" type="email" class="form-control required email" id="email" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">Senha</label>
                                            <input name="senha" type="password" id="senha" class="form-control required" placeholder="Senha">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">Confirmar Senha</label>
                                            <input name="csenha" type="password" class="form-control" placeholder="Confirmar Senha">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">Nome</label>
                                            <input name="nome" type="text" class="form-control required" id="nome" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">Sobrenome</label>
                                            <input name="sobrenome" type="text" class="form-control required" id="sobrenome" placeholder="Sobrenome">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <input type="submit" value="Cadastrar" class="btn btn-outline-success" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
        
            <script src="js/master.js" type="text/javascript"></script>
            <!-- Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
            <script type="text/javascript" src="js/bootstrap.min.js"></script> 
            <!-- JQuery Validate JS -->
            <script src="js/jquery-validate/jquery.min.js" type="text/javascript"></script>
            <script src="js/jquery-validate/jquery.validate.js" type="text/javascript"></script>
            <!-- Page Script -->
            <script>
                //JQuery Validate
                $('#fomulariologin').validate();
                $('#insert_form').validate();
                //Menu Toggle Script
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>
        </body>
    </html>