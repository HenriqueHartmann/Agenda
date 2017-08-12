<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
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
   		top: 55%;
   		left: 35%;
   		margin-top: -100px;
   		margin-left: -250px;
   		position: absolute;
      }
      #texto h1 {
      	text-align: center;
      }
    </style>
  
  <script type="text/javascript">
    function confirm(){
    var email = document.getElementById('textinput').value;
    var senha = document.getElementById('passwordinput').value;

    if (email == '') {
      alert('informe um email válido');
      return false;
    }
    if (senha == '') {
      alert('informe uma senha válido');
      return false;
    }
    }
  </script>  
  </head>
<body>
<div id="topo">
</div>
<form class="form-horizontal" method="post" action="verifica_login.php">
<fieldset>

<!-- Form Name -->
<legend> Login</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="email" placeholder="Digite seu E-mail" class="form-control input-md">
  <br /> 
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
  <div class="col-md-4">
    <input id="passwordinput" name="senha" type="password" placeholder="Digite sua Senha" class="form-control input-md">
    <br />
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" type="submit" class="btn btn-success" onclick="return confirm();">Continuar</button>
    <a href="cadastro.php" class="btn btn-danger">Criar Conta </a>
  </div>
</div>

</fieldset>
</form>
<div class="col-md-4" id="texto">
	<h1> Para Acessar o Nosso Site Faça Login ou Crie uma Conta.</h1>
</div>
</body>
</html>
