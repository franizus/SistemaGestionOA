<?php
  session_start();

  if ( isset($_POST["inputUser"]) && isset($_POST["inputPW"]) ) {
    unset($_SESSION["user"]);  // Logout current user
    if ( $_POST['inputPW'] == 'umsi' ) {
      $_SESSION["user"] = $_POST["inputUser"];
      $_SESSION["success"] = "Logged in.";
      header( 'Location: index.php' ) ;
      return;
    } else {
      $_SESSION["error"] = "Contraseña Incorrecta.";
      header( 'Location: login.php' ) ;
      return;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    require "head.php";
  ?>
</head>

<body class="bg-dark">
  <div class="container">
    <?php
      if ( isset($_SESSION["error"]) ) {
        echo('<div class="alert alert-danger alert-dismissable">');
        echo('<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>');
        echo('<strong>Error! </strong>' . $_SESSION["error"]);
        echo('</div>');
        unset($_SESSION["error"]);
      }
    ?>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Ingreso al Sistema</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="inputUser">Usuario</label>
            <input class="form-control" id="inputUser" name="inputUser" type="text" placeholder="Ingresar Usuario">
          </div>
          <div class="form-group">
            <label for="inputPW">Contraseña</label>
            <input class="form-control" id="inputPW" name="inputPW" type="password" placeholder="Ingresar Contraseña">
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Log In">
          <a class="btn btn-danger btn-block" href="index.php">Cancelar</a>
        </form>
        <div class="text-center">
          <a class="btn btn-link" data-toggle="modal" data-target="#exampleModal" href="">Registrarse</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Seleccione el tipo de usuario que desea registrar.</div>
            <div class="modal-footer">
              <a class="btn btn-primary" href="registerP.php">Profesor</a>
              <a class="btn btn-success" href="registerE.php">Estudiante</a>
            </div>
        </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
