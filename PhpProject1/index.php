<html>
     <head>
       <meta charset="UTF-8">
      <title>Projeto</title>
      <title>Formulário de contato</title>
        <link href="folha.css" rel="stylesheet" type="text/css"/>
   </head>
    <body>
        <h1>Cadastro</h1>
     <div class="container">
     <div class="row">
        
       <form class="form-horizontal" id="frmcontatoazul">
        <fieldset>
       
        <!-- Form Name -->
       <legend>Contato</legend>
       <table>
       <!-- Text input-->
       <tr>
           <td>
       <div class="form-group">
         <label class="col-md-4 control-label" for="txtinputnome">Nome</label>  
         <div class="col-md-8">
         <input id="txtinputnome" name="txtinputnome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
          <span class="help-block"></span>  
          </div>
        </div>
           </td>
       <!-- Text input-->
       <td>  
       <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Email</label>  
         <div class="col-md-8">
          <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
         <span class="help-block"></span>  
          </div>
        </div>
       </td>
       <td>  
       <!-- Text input-->
       <div class="form-group">
         <label class="col-md-4 control-label" for="txtinputassunto">Assunto</label>  
          <div class="col-md-8">
          <input id="txtinputassunto" name="txtinputassunto" placeholder="Informe do que se trata" class="form-control input-md" required="required" type="text" />
          <span class="help-block"></span>  
          </div>
       </div>
       </td> 
       <td>
       <!-- Textarea -->
        <div class="form-group">
         <label class="col-md-4 control-label" for="txtinputarea">Mensagem</label>
          <div class="col-md-8">                     
            <textarea class="form-control" id="txtinputarea" rows="6" name="txtinputarea" placeholder="Escreva sua opinião, crítica ou sugestão para o site"></textarea>
          </div>
        </div>
        </div>
        </div>   
    </tr>
       </table>  
       <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="btnenviar"></label>
          <div class="col-md-8">
           <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
         </div>
        </div>
       <!--tabela--> 
       </fieldset>
        </form> 
     </body>
 </html>