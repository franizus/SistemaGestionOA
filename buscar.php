<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require "head.php";
  ?>

<style>
    * {
        box-sizing: border-box;
    }

    #myInput {
        background-image: url('images/searchicon.png');
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

    .modalmy {
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

    .modalmy-content {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
            flex-direction: column;
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        border-radius: 0.3rem;
        background-clip: padding-box;
        outline: 0;
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

    .top5 {
      margin-top:15px;
    }

    .bottom5 {
      margin-bottom:20px;
    }

    .bottom10 {
      margin-bottom:10px;
    }

    .padding5 {
      padding-right: 45px;
    }

    .padding15 {
      padding-left: 0px;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
    require "navbar.php";
  ?>

  <div class="content-wrapper bg-light">
  <?php
      if ( isset($_SESSION["oa"]) ) {
        echo('<div class="alert alert-success alert-dismissable">');
        echo('<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>');
        echo($_SESSION["oa"]);
        echo('</div>');
        unset($_SESSION["oa"]);
      }
    ?>
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
          require_once "pdo.php";
          $result = $pdo->query("SELECT * FROM objetoaprendizaje");
          foreach ($result as $row) {
            $id = $row['idOA'];
            $userID = false;
            if (($_SESSION["userID"] == $row['idProfesor'] && $_SESSION["userType"] != "est") || $_SESSION["userType"] == "admin") {
              $userID = true;
            }

            echo '<tr>';
            if ($row['ruta'] != '')
            {
              echo '<td>';
              echo '<a href="' . $row['ruta'] . '" target="_blank">' . $row['nombre'] . '</a>';
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
            echo '<div id="myModal' . $id . '" class="modalmy">';
            echo '<div class="modalmy-content">';
            echo '<div class="modal-header">';
            echo '<h4 class="modal-title">' . $row['nombre'] . '</h4>';
            echo '<button type="button" class="close" onclick="getElementById(' . "'myModal" . $id . "'" . ').style.display =' . "'none'" . ';">&times;</button>';
            echo '</div>';
            echo '<div class="container">';
            echo '<hr><div class="row bottom10">';
            echo '<div class="col-3">';
            echo '<b>Informacion:</b>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row top5">';
            echo '<div class="col-3 text-right padding5">';
            echo '<b>Descripcion:</b>';
            echo '</div>';
            echo '<div class="col text-justify padding15">';
            echo $row['descripcion'];
            echo '</div>';
            echo '</div>';
            echo '<div class="row top5">';
            echo '<div class="col-3 text-right padding5">';
            echo '<b>Autor:</b>';
            echo '</div>';
            echo '<div class="col text-justify padding15">';
            echo $row['autor'];
            echo '</div>';
            echo '</div>';
            echo '<div class="row top5">';
            echo '<div class="col-3 text-right padding5">';
            echo '<b>Institucion:</b>';
            echo '</div>';
            echo '<div class="col text-justify padding15">';
            echo $row['institucion'];
            echo '</div>';
            echo '</div>';
            echo '<div class="row top5">';
            echo '<div class="col-3 text-right padding5">';
            echo '<b>Fecha de Creacion:</b>';
            echo '</div>';
            echo '<div class="col text-justify padding15">';
            echo $row['fecha'];
            echo '</div>';
            echo '</div>';
            echo '<div class="row top5">';
            echo '<div class="col-3 text-right padding5">';
            echo '<b>Palabras Clave:</b>';
            echo '</div>';
            echo '<div class="col text-justify padding15">';
            echo $row['p_clave'];
            echo '</div>';
            echo '</div>';
            echo '<div class="row top5">';
            echo '<div class="col-3 text-right padding5">';
            echo '<b>Tamaño:</b>';
            echo '</div>';
            echo '<div class="col text-justify padding15">';
            echo $row['tamano'];
            echo '</div>';
            echo '</div>';
            echo '<div class="row top5">';
            echo '<div class="col-3 text-right padding5">';
            echo '<b>Tipo:</b>';
            echo '</div>';
            echo '<div class="col text-justify padding15">';
            echo $row['tipo'];
            echo '</div>';
            echo '</div>';
            echo '<div class="row top5 bottom5">';
            echo '<div class="col-3 text-right padding5">';
            echo '<b>Fecha Ingreso:</b>';
            echo '</div>';
            echo '<div class="col text-justify padding15">';
            echo $row['fecha_ing'];
            echo '</div>';
            echo '</div>';

            echo '<hr><div class="row bottom10">';
            echo '<div class="col-3">';
            echo '<b>Comentarios:</b>';
            echo '</div>';
            echo '</div>';
            echo '<div class="comments">';
            echo '<ul class="list-group">';
            $sql = "SELECT detalleComent, nombresProf, apellidosProf 
                    FROM comentario c 
                    JOIN profesor p 
                    ON p.idProfesor = c.idProfesor 
                    WHERE idOA = :idOA";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':idOA' => $id));
            foreach ($stmt as $comment) {
              echo '<li class="list-group-item">';
              echo '<strong>' . $comment['nombresProf'] . ' ' . $comment['apellidosProf'] . '</strong>&emsp;&emsp;&emsp;&emsp;';
              echo $comment['detalleComent'];
              echo '</li>';
            }
            echo '</ul>';
            echo '</div>';

            if ($_SESSION["userType"] == "prof") {
              echo '<form class="top5">';
              echo '<div class="form-group">';
              echo '<textarea name="comment" placeholder="Ingrese un comentario." class="form-control"></textarea>';
              echo '</div>';
              echo '<div class="form-group">';
              echo '<div class="form-row">';
              echo '<div class="col-6 offset-6">';
              echo '<input type="hidden" name="idProfDel" value="' . $id . '">';
              echo '<input class="btn btn-info btn-block" type="submit" value="Agregar Comentario">';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</form><hr>';
            } else {
              echo '<hr>';
            }

            echo '<div class="form-group">';
            echo '<div class="form-row">';
            if (!$userID) {
              echo '<div class="col-3 offset-6">';
            } else {
              echo '<div class="col-3">';
            }
            if ($row['ruta'] == '')
            {
              echo '<button type="button" class="btn btn-primary btn-block" onclick="unzip(' . "'" . $row['ruta_zip'] . "', '" . $id . "'" . ')">Descomprimir</button>';
            } else {
              echo '<button type="button" class="btn btn-primary btn-block disabled">Descomprimir</button>';

            }
            echo '</div>';
            echo '<div class="col-3">';
            echo '<a class="btn btn-primary btn-block" href="zip/' . $row['ruta_zip'] . '" download>Descargar</a>';
            echo '</div>';
            if ($userID) {
              echo '<div class="col-3">';
              echo '<button type="button" class="btn btn-primary btn-block" onclick="javascript:location.href=' . "'editaroa.php?id=" . $id . "'" . '">Editar</button>';
              echo '</div>';
              echo '<div class="col-3">';
              echo '<button type="button" class="btn btn-danger btn-block" onclick="deleteOA(' . "'" . $id . "'" . ')">Borrar</button>';
              echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

          }
        ?>
      </table>
    </div>

    <?php
      require "footer.php";
    ?>


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

      function deleteOA(id) {
        var r = confirm("Seguro desea eliminar el OA?");
        if (r == true) {
          var formdata = new FormData();
          formdata.append("id", id);
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "delete.php");
          ajax.send(formdata);
          javascript:location.href='buscar.php';
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
