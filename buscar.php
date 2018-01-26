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
  <?php
    require "navbar.php";
  ?>

  <div class="content-wrapper">       <!-- contenedor que tiene que ser dinamico y no repetirse en las paginas desde liunea 141 hasta 244-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <div class="container">      <!-- este contanier es del cuadro de busqueda y de la tabla-->
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
            $id = $row['id'];
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
            echo '<div id="myModal' . $id . '" class="modal">';
            echo '<div class="modal-content">';
            echo '<p> <b>Nombre:</b> ' . $row['nombre'] . '</p>';
            echo '<p> <b>Descripcion:</b> ' . $row['descripcion'] . '</p>';
            echo '<p> <b>Autor:</b> ' . $row['autor'] . '</p>'; 
            echo '<p> <b>Institucion:</b> ' . $row['institucion'] . '</p>';
            echo '<p> <b>Fecha de Creacion:</b> ' . $row['fecha'] . '</p>';
            echo '<p> <b>Palabras Clave:</b> ' . $row['p_clave'] . '</p>';
            echo '<p> <b>Tamaño:</b> ' . $row['tamano'] . '</p>';
            echo '<p> <b>Tipo:</b> ' . $row['tipo'] . '</p>';
            echo '<p> <b>Fecha Ingreso:</b> ' . $row['fecha_ing'] . '</p>';
            if ($row['ruta'] != '')
            {
              echo '<button type="button" class="btn btn-success" disabled>Descomprimir</button>';
            }
            else
            {
              echo '<button type="button" class="btn btn-success" onclick="unzip(' . "'" . $row['ruta_zip'] . "', '" . $id . "'" . ')">Descomprimir</button>';
            }
            echo '<button type="button" class="btn btn-success" onclick="javascript:location.href=' . "'editaroa.php?id=" . $id . "'" . '">Editar</button>';
            echo '<button type="button" class="btn btn-danger" onclick="deleteOA(' . "'" . $id . "'" . ')">Borrar</button>';
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
        var formdata = new FormData();
        formdata.append("id", id);
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "delete.php");
        ajax.send(formdata);
        alert("Objeto de Aprendizaje borrado con exito!");
        javascript:location.href='buscar.php';
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
