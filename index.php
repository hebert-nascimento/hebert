<?php include('header.php'); ?>

<title>Tela De Login</title>

<nav class="navbar navbar-light bg-primary" style="color: white;">
      <a class="navbar-brand">Brand Link</a>
      <form class="form-inline">
            <button type="button" class="btn btn-primary modaladmin glyphicon-user" data-toggle="modal" data-target="#exampleModal">
               <span class="glyphicon glyphicon-user">  Admin</span>
            </button>
      </form>
</nav>



<div class="container">
    <div align="center" style="margin-top: 100px;">
        <div class="col-md-4">
            <form method="post" name="fomulariologin" id="fomulariologin"  action="verificar_login.php">
                <input type="text" id="email" name="email" class="form-control required email" placeholder="E-mail" />
                <br />
                <input type="password" id="senha" name="senha" class="form-control required" placeholder="Senha" />
                <br />
                <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
                <!--<input type="submit" name="botao" onclick="return validar()" value="Entrar" class="btn-primary bt"/></input>-->	
            </form>
            <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#addUsuarioModal">
                Cadastrar
            </button>            
            <?php
                if (isset($_GET["msg"]) && $_GET["msg"] != "") {
            ?>
                <br>
                <div class="alert alert-<?php echo $_GET["class"]; ?>">
                    <?php echo $_GET["msg"]; ?>
                </div>
            <?php
                    }
            ?>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>