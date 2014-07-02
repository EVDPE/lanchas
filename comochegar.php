<!Doctype html>
<html>
<head><title>Lanchatronik</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/api_comochegar_styles.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZOeRC0m0MuQtqt-GFoRlLAjy3gp9Iegk&sensor=true"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/api_comochegar_3.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="interface">
<?php require 'include/header.php'?>
 <br>
  <br>
  <div class="comoChegarContainer">
      <form class="form-inline form-comochegar">
    <fieldset>
    <input type="text" name="origen" id="origen" class="form-control fancyInput" placeholder="Rua, Cidade, Estado,..."><br>
    <div id="rutaOps">

       <select id="modo_viaje" class="opciones_ruta form-control">
          <option value="DRIVING" selected="selected">Carro</option>
          <option value="WALKING">Caminhando</option>
       </select>  
    </div>
    <!--<input type="button" id="buscar" value="Buscar"><br>-->
    
    <br>
    </fieldset>
  </form>  

        <div id="results" class="column first">
            <div id="map_canvas"></div>
            <!--<div id="directions_panel"></div>-->
        </div>        
    </div>
  
</div>    
</body>
</html>