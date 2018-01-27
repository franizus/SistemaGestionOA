<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require "head.php";
  ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
    require "navbar.php";
  ?>
  <div class="content-wrapper">
    <?php 
      if ( isset($_SESSION["success"]) ) {
          echo('<div class="alert alert-success alert-dismissable">');
          echo('<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>');
          echo('<strong>Ingreso Correcto!</strong> Ahora puede usar el sistema.');
          echo('</div>');
          unset($_SESSION["success"]);
      }
    ?>
    <div class="jumbotron">
      <img src="imagenes/logoEPN.png" style="float:right; width:300px;height:300px; margin:1em">
      <h1 class="display-2">SISTEMA DE GESTIÓN DE OBJETOS DE APRENDIZAJE</h1>
      <p class="lead">Herramienta diseñada para crear y gestionar objetos de aprendizaje de manera interactiva.</p>
      <hr class="my-3">
      <p class="display-5">Elaborado por:</p>
      <ul type = disk >
      <li>Francisco Izurieta
      <li>Dario Herrera
      <li>Alexis Guerrero
      </ul>
    </div>
    
    <?php
      require "footer.php";
    ?>

  </div>
</body>

</html>
