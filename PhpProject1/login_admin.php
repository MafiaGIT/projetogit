<!DOCTYPE html>
<!-- Comentários -->

    <?php
 
 session_start();
 
 if(isset($_SESSION["id_usuario"]) && isset($_SESSION["nome"])){
     
     header('location: conta_admin.php');
 }


 ?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>Login do administrador</title>
        <link rel="shortcut icon" href="imagens/logo_site.png" type="image/x-icon"/>
        <link href="bootstrap/css/login.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/estilo_login.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
        
        
        
        
        
        
        
        <nav class="navbar navbar-default menu-fixo ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" id="menu">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" style="margin-left: 10px;" href="index.php" title="Página inicial">PetShop</a><img src="imagens/logo_site_2.png" width="30px" height="30px" style="margin-top: 10px; margin-left: -125px;">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="index.php">Página inicial<span class="sr-only">(current)</span></a></li>
      </ul>
       
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 
   <br><br>
   <br><br>
   <br><br> 
  
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="./imagens/foto_conta.png"
                    alt="">
                <form class="form-signin" method="post" action="sessaoLoginAdmin.php" id="formlogin" name="formlogin">
                    <input type="email"  name='email' class="form-control" placeholder="E-mail" required autofocus>
                <input type="password" name='senha' class="form-control" placeholder="Senha" required autofocus>
                
                <select class="form-control login-admin" name="nivel_usuario">
                    <option name="nivel_usuario">Administrador(a)</option>
                </select>
                <br>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button> <br>
                
                <p class="text-justify a"><a href="contato.php">Esqueceu sua senha? Clique aqui</a></p>
                </form>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>