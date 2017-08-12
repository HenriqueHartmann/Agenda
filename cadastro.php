<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>

  <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
    <style type="text/css">
      body {
        overflow-x: hidden;
      }
      #topo {
        background-color: #2dbe60;
        height: 5px;
      }
      #texto {
        width: 1024px;
        height: 200px;
        top: 80%;
        left: 40%;
        margin-top: -100px;
        margin-left: -250px;
        position: absolute;
      }
    </style>
  <!--JAVA SCRIPT-->
  <script type="text/javascript">
    
    function confirm (){

      var nome  = document.getElementById('textinput').value;
      var email = document.getElementById('textinput2').value;
      var pass1 = document.getElementById('passwordinput').value;
      var pass2 = document.getElementById('passwordinput2').value;

      if(nome=='') {
        alert("Informe um nome");
        return false;
      }
      if (email=='') {
        alert("Informe um email");
        return false;
      }
      if (pass1=='') {
        alert("Informe uma senha");
        return false;
      }
      if (pass2=='') {
        alert("Confirme sua senha");
        return false;
      }

      if(pass1!=pass2){
        alert("Senhas não conferem");
        return false;
      }
    }

  </script>
</head>
<body>
<div id="topo">
</div>
<form class="form-horizontal" method="post" action="controlar_cadastro.php?acao=cadastrar" onsubmit="return confirm();">
<fieldset>

<!-- Form Name -->
<legend> Cadastro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" type="text" placeholder="Digite o seu Nome" class="form-control input-md">
  <br />  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-4">
  <input id="textinput2" name="email" type="email" placeholder="Digite o seu E-mail" class="form-control input-md">
  <br /> 
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
  <div class="col-md-4">
    <input id="passwordinput" name="senha" type="password" placeholder="Digite a sua Senha" class="form-control input-md">
    <br />
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confirmar Senha</label>
  <div class="col-md-4">
    <input id="passwordinput2" name="confirmar" type="password" placeholder="Confirme a sua Senha" class="form-control input-md">
    <br />
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" type="submit" class="btn btn-success">Criar Conta</button>
  </div>
</div>

</fieldset>
<div class="col-md-4" id="texto">
  <h1> Cadastre-se e Aproveite o Nosso Conteúdo.</h1>
</div>
</body>
</html>