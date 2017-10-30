<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php
 
 session_start();
 
 if(isset($_SESSION["email"]) || isset($_SESSION["idade"])){
     
     header('location: conta_cliente.php');
 }


 ?>



<html>
    <head>
        <title>Cliente ou administrador?</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/logo_site.png" type="image/x-icon"/>
        <link href="bootstrap/css/estilo_tipo_usuario.css" rel="stylesheet" type="text/css"/>
       
        
  
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   
    
    
    </head>
    <body>
        
        <br><br>
        <br><br>
        <br><br>
        <br>
            
   <div class="login-box">
    
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-check"></span> Selecione seu tipo de usuário</h3>
                          
                </div>
                <center>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                          
                            <a href='login_cliente.php' class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Cliente</a>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <a href="login_admin.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Admin</a>
                        </div>
                    </div>
                    <a href="index.php" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar à página inicial</a>
                </div>
                    </center>
            </div>
        </div>
    </div>

       </div>
        

        
        
        
        
    </body>
</html>
