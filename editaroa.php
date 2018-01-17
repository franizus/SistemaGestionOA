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
            <div class="jumbotron" style="width:570px">
                <h2 class="display-10">Editar OA</h2>

                <hr style="border-color:beige;">

                <form role="form">
                    <?php
                    $myPDO = new PDO('mysql:host=localhost;dbname=sistemaoa;charset=utf8', 'root', '');
                    $query = "SELECT nombre, descripcion, autor, institucion, DATE_FORMAT(fecha,'%Y-%m-%d') as fecha_f, p_clave FROM objetoaprendizaje WHERE id = " . $_GET["id"];
                    $result = $myPDO->query($query);
                    foreach ($result as $row) {
                        echo '<div class="form-group">';
                        echo '<input  type="text" style="width:500px" class="form-control" id="nombreOA" placeholder="Nombre del OA" required value="' . $row["nombre"] . '">';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<textarea rows="3" style="width:500px" class="form-control" id="descripcion" placeholder="Descripcion" required>' . $row["descripcion"] . '</textarea>';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<input type="text"  style="width:500px" class="form-control" id="autorOA" placeholder="Autor" required value="' . $row["autor"] . '">';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<input type="text" style="width:500px" class="form-control" id="institucionOA" placeholder="Institución" required value="' . $row["institucion"] . '">';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<input type="date" style="width:500px" class="form-control" id="fechaCreacionOA" placeholder="Fecha de creacion OA" required value="' . $row["fecha_f"] . '">';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<input type="text" style="width:500px" class="form-control" id="palabraClaveOA" placeholder="Palabra clave OA" required value="' . $row["p_clave"] . '">';
                        echo '</div>';
                    }
                    echo '<button type="button" class="btn btn-success" onclick="updateOA(' . "'" . $_GET["id"] . "'" . ')">Guardar</button>';
                    echo '<button type="button" class="btn btn-danger" onclick="javascript:location.href=' . "'buscar.php'" . '">Cancelar</button>';
                ?>
                </form>

            </div>

        </div>

        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © 2017</small>
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
            function _(el) {
                return document.getElementById(el);
            }

            function updateOA(id) {
                var formdata = new FormData();
                formdata.append("id", id);
                formdata.append("nombreOA", _("nombreOA").value);
                formdata.append("descripcion", _("descripcion").value);
                formdata.append("autorOA", _("autorOA").value);
                formdata.append("institucionOA", _("institucionOA").value);
                formdata.append("palabraClaveOA", _("palabraClaveOA").value);
                formdata.append("fechaCreacionOA", _("fechaCreacionOA").value);
                var ajax = new XMLHttpRequest();
                ajax.open("POST", "update.php");
                ajax.send(formdata);
                alert("Objeto de Aprendizaje modificado con exito!");
                javascript: location.href = 'buscar.php';
            }
        </script>
    </div>
</body>

</html>