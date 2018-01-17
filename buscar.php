<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
    }

    #myInput {
      background-image: url('css/searchicon.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }

    #myTable {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
      font-size: 18px;
    }

    #myTable th,
    #myTable td {
      text-align: left;
      padding: 12px;
    }

    #myTable tr {
      border-bottom: 1px solid #ddd;
    }

    #myTable tr.header,
    #myTable tr:hover {
      background-color: #f1f1f1;
    }

    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      padding-left: 250px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }
    /* Modal Content */

    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .arrow {
      box-sizing: border-box;
      height: 1vw;
      width: 1vw;
      border-style: solid;
      border-color: black;
      border-width: 0px 1px 1px 0px;
      transform: rotate(45deg);
      transition: border-width 150ms ease-in-out;
    }

    .arrow:hover {
      border-bottom-width: 4px;
      border-right-width: 4px;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Sistema de Gestión de Objetos de Aprendizaje</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crear">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa fa-file-text-o"></i>
            <span class="nav-link-text">Crear Objetos de Aprendizaje</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa fa-github"></i>
            <span class="nav-link-text">Repositorio de Objetos de Aprendizaje</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="importar.html">Importar y catalogar Objetos de Aprendizaje</a>
            </li>
            <li>
              <a href="buscar.php">Buscar Objetos de Aprendizaje</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa fa-spinner"></i>
            <span class="nav-link-text">...</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sign-in"></i>
            <span class="nav-link-text">Login</span>
          </a>

          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login</a>
            </li>
            <li>
              <a href="register.html">Registro</a>
            </li>
            <li>
              <a href="forgot-password.html">Olvido su Contraseña</a>
            </li>
          </ul>

        </li>
      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>

    </div>

  </nav>
  <div class="content-wrapper">
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <div class="container">
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar OA..." title="Ingrese un OA">

      <table id="myTable">
        <tr class="header">
          <th style="width:30%;">Nombre</th>
          <th style="width:25%;">Autor</th>
          <th style="width:15%;">Año</th>
          <th style="width:25%;">Palabras Clave</th>
          <th style="width:5%;"></th>
        </tr>
        <?php
          $myPDO = new PDO('mysql:host=localhost;dbname=sistemaoa;charset=utf8', 'root', '');
          $result = $myPDO->query("SELECT * FROM objetoaprendizaje");
          foreach ($result as $row) {
            $id = $row['id'];
            echo '<tr>';
            if ($row['ruta'] != '')
            {
              echo '<td>';
              echo '<a href=' . $row['ruta'] . ' target="_blank">' . $row['nombre'] . '</a>';
              echo '</td>';
            }
            else
            {
              echo '<td>' . $row['nombre'] . '</td>';
            }
            echo '<td>' . $row['autor'] . '</td>';
            echo '<td>' . date("d-m-Y",strtotime($row['fecha'])) . '</td>';
            echo '<td>' . $row['p_clave'] . '</td>';
            echo '<td> <div onclick="openModal(' . "'myModal" . $id . "'" . ')" class="arrow"></div> </td>';
            echo '</tr>';
            echo '<div id="myModal' . $id . '" class="modal">';
            echo '<div class="modal-content">';
            echo '<p> Nombre: ' . $row['nombre'] . '</p>';
            echo '<p> Descripcion: ' . $row['descripcion'] . '</p>';
            echo '<p> Autor: ' . $row['autor'] . '</p>'; 
            echo '<p> Institucion: ' . $row['institucion'] . '</p>';
            echo '<p> Fecha de Creacion: ' . $row['fecha'] . '</p>';
            echo '<p> Palabras Clave: ' . $row['p_clave'] . '</p>';
            echo '<p> Tamaño: ' . $row['tamano'] . '</p>';
            echo '<p> Tipo: ' . $row['tipo'] . '</p>';
            echo '<p> Fecha Ingreso: ' . $row['fecha_ing'] . '</p>';
            if ($row['ruta'] != '')
            {
              echo '<button type="button" class="btn btn-success" disabled>Descomprimir</button>';
            }
            else
            {
              echo '<button type="button" class="btn btn-success" onclick="unzip(' . "'" . $row['ruta_zip'] . "', '" . $id . "'" . ')">Descomprimir</button>';
            }
            echo '<button type="button" class="btn btn-danger" onclick="delete(' . "'" . $id . "'" . ')">Borrar</button>';
            echo '</div>';
            echo '</div>';
          }
        ?>
      </table>
    </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>

    <script>
      function myFunction() {
        var input, filter, table, tr, tn, ta, tan, tc, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          tn = tr[i].getElementsByTagName("td")[0];
          ta = tr[i].getElementsByTagName("td")[1];
          tan = tr[i].getElementsByTagName("td")[2];
          tc = tr[i].getElementsByTagName("td")[3];
          if (tn || ta || tan || tc) {
            if (tn.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else if (ta.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else if (tan.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else if (tc.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }

      function openModal(modale) {
        var modal = document.getElementById(modale);
        modal.style.display = "block";

        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      }

      function unzip(zip_path, id) {
        debugger;
        var formdata = new FormData();
        formdata.append("zip_path", zip_path);
        formdata.append("id", id);
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "unzip.php");
        ajax.send(formdata);
        alert("Objeto de Aprendizaje descomprimido con exito!");
        javascript:location.href='buscar.php';
      }
    </script>

  </div>
</body>

</html>