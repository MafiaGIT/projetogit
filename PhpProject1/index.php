
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="imagens/logo_site.png" >
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
<a href="bootstrap/css/bootstrap-theme.css.map"></a>
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/estilo_index.css" rel="stylesheet" type="text/css"/>
  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="bootstrap/css/estilo.css" rel="stylesheet" type="text/css"/>
<title>QueryPetty</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/estilo_index.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/estilo_comentarios.css" rel="stylesheet" type="text/css"/>


<script src="bootstrap/js/script_autores.js" type="text/javascript"></script>
<script src="bootstrap/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<style>
    .texto-info{
        font-size: 17px;
    }
    
    img{
        border-radius: 1.5px;
    }
    
    .nome-critico{
        text-align: justify;
    }
</style>
        
    
    <title>QueryPet: o site para o seu pet</title>

    
    
    
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
      </ul>
        
           
        
 <?php
 session_start();
 if(!isset($_SESSION["email"]) && !isset($_SESSION["idade"])){
   
     echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="tipo_usuario.php"> <button class="glyphicon glyphicon-log-in icone"></button> Entrar</a></li>
          
      </ul>';
  
 }
 
 
 else{
    echo '<ul class="nav navbar-nav navbar-right">
          <li><a href="conta_cliente.php"> <button class="glyphicon glyphicon-user icone"></button>Voltar à conta</a></li>
      </ul>';
 }
 ?>
        
        
       
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    
    
  <div id="carousel-example-generic" class="carousel slide rolagem-imagens" data-ride="carousel">
  <!-- Indicators -->
  
  
  <style>
      .rolagem-imagens{
          height: 355px;
      }
  </style>
  
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <center><img src="imagens/01.jpg" alt=""/></center>
      <div class="carousel-caption">
          
      </div>
    </div>
      
    <div class="item">
        <center><img src="imagens/02.jpg" alt=""/></center>
      <div class="carousel-caption">
          
      </div>
      </div>
      
      <div class="item">
          <center><img src="imagens/03.jpg" alt=""/></center>
      <div class="carousel-caption">
      </div>
    </div>
      
      
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    
    
    
    
    
    
    
    

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-check-circle"></i>O que temos a oferecer</h3>
                   <p class="texto-info">Oferecemos acesso aos serviços <br> veterinários e Pet Shop.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-pencil"></i>Marque sua consulta</h3>
<p  class="texto-info">Agende a consulta de seu pet de modo <br> fácil e rápido.</p>                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-folder-open"></i>Cadastre-se</h3>
          <p class="texto-info">Faça já o seu cadastro. <br> É gratuito!</p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2>QueryPet: sistema de agendamento de consultas veterinárias e serviços de Pet Shop</h2>
                    <p class="texto-info">Não saía mais de casa para realizar o seu agendamento. Agora faça no seu local de conforto.</p>
                    <hr>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Serviços de Pet Shop e clínica veterinária</h2>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-home-portfolio" src="imagens/07.png">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-home-portfolio" src="imagens/08.jpg">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-home-portfolio" src="imagens/13.jpg">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-home-portfolio" src="imagens/14.jpg">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-home-portfolio" src="imagens/15.jpg">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-home-portfolio" src="imagens/16.jpg">
                    </a>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>QueryPet: pensando no seu pet</h2>
                    <ul>
                       
                        <li class="texto-info">Sistema prático e fácil de usar, gerenciar e realizar as suas respectivas funções;</li>
                        <li class="texto-info">Como o nosso sistema se responsabiliza por criar, gerenciar e armazenar o seu cadastro, não será necessário que você faça o agendamento da consulta de seu pet presencialmente;</li>
                        <li class="texto-info">Faça o agendamento para quando quiser, no dia e horário que você estiver vago;</li>
                        <li class="texto-info">Insira todas as informações de seu amiguinho como nome, espécie, raça, gênero, idade, etc.</li>
                        
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="imagens/17.jpg">
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="imagens/18.jpg">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Tudo para o seu animal de estimação</h2>
                    <ul>
                        <li class="texto-info">Praticidade e facilidade;</li>
                        <li class="texto-info">Não saía do seu local de lazer;</li>
                        <li class="texto-info">Agende uma consulta;</li>
                        <li class="texto-info">Cadastre também o seu animal de estimção.</li>
                        
                    </ul>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="container">

        <div class="row well">
            <div class="col-lg-8 col-md-8">
                <h4 class="titulo-final">Prático, funcional, interface visual agradável e fácil de usar</h4>
                
                <style>
                    
                    .titulo-final{
                        font-size: 22px;
                    }
                    
                </style>
                
                <p class="texto-info">Use, teste e faça bom proveito de nosso sitema.</p>
            </div>
            
             <?php
 
 if(!isset($_SESSION["email"]) && !isset($_SESSION["idade"])){
   
     echo '<div class="col-lg-4 col-md-4">
                <a class="btn btn-lg btn-primary pull-right" href="cadastro_cliente.php">Faça o seu cadastro!</a>
            </div>';
  
 }
 
 
 else{
    echo '';
 }
 ?>
         

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            
            
                <style>
        .exibe{
            color: #000000;
        }
    </style>
    
        
        </footer>

    </div>
    <!-- /.container -->

    
    
 <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
 <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
