<!DOCTYPE html>
<html>
<head>
<title>Lanchatronik</title>    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body style="padding-top: 70px;" class="body-contato">
<div id="interface">
<?php require 'include/header.php'?>

<div class="contatoPrincipal">
    <form class="form-horizontal" method="post" id="fcontato" action="sendmail.php">
<fieldset>

<!-- Form Name -->
<legend id="legend-contato">Contato</legend>
<?php
    if ($_REQUEST['mensaje']!=""){
        if($_REQUEST['mensaje']==true)
            echo "<p class='alert alert-success'> O email foi enviado</p>";
        elseif($_REQUEST['mensaje']==false){
            echo "<p class='alert alert-danger'> O email não foi enviado </p>";
            }
    }
?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label label-contato" for="cnome">Nome completo</label>  
  <div class="col-md-4">
  <input id="cnome" name="tnome" type="text" placeholder="Digite seu nome completo" class="form-control input-md" required="" maxlength="30">
  <span class="help-block">Por favor, insira seu nome completo</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label label-contato" for="cemail">Email</label>  
  <div class="col-md-4">
  <input id="cemail" name="temail" type="email" placeholder="email@exemplo.com" class="form-control input-md" required="">
  <span class="help-block">Por favor, insira seu email</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label label-contato" for="cassunto">Assunto</label>  
  <div class="col-md-4">
  <input id="cassunto" name="tassunto" type="text" placeholder="Assunto do contato" class="form-control input-md" required="">
  <span class="help-block">Insira o assunto pelo qual você deseja contatarnos</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label label-contato" for="ccomentario">Comentario</label>
  <div class="col-md-4">                     
      <textarea class="form-control" id="ccomentario" name="tcomentario" placeholder="Comentario...." required></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label label-contato" for="enviar"></label>
  <div class="col-md-4">
    <button id="cenviar" name="tenviar" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>

</div>

</div>
</body>

</html