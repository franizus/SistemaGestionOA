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
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <div class="container">
            <div class="jumbotron" style="width:570px">
                <h2 class="display-10">Importar y Catalogar</h2>

                <hr style="border-color:beige;">

                <form role="form">
                    <div class="form-group">
                        <input type="text" style="width:500px" class="form-control" id="nombreOA" placeholder="Nombre del OA" required>
                    </div>

                    <div class="form-group">
                        <textarea rows="3" style="width:500px" class="form-control" id="descripcion" placeholder="Descripcion" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="text" style="width:500px" class="form-control" id="autorOA" placeholder="Autor" required>
                    </div>

                    <div class="form-group">
                        <input type="text" style="width:500px" class="form-control" id="institucionOA" placeholder="Institución" required>
                    </div>

                    <div class="form-group">
                        <input type="date" style="width:500px" class="form-control" id="fechaCreacionOA" placeholder="Fecha de creacion OA" required>
                    </div>

                    <div class="form-group">
                        <input type="text" style="width:500px" class="form-control" id="palabraClaveOA" placeholder="Palabra clave OA" required>
                    </div>

                    <hr style="border-color:beige;">

                    <div class="form-group">
                        <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                        <input type="file" name="file1" id="file1">
                    </div>

                    <hr style="border-color:beige;">

                    <button type="button" class="btn btn-success" onclick="uploadFile()">Subir</button>
                    <button type="button" class="btn btn-danger" onclick="javascript:location.href='index.html'">Cancelar</button>
                    <br></br>
                    <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                    <p id="loaded_n_total"></p>
                </form>

            </div>

        </div>

        <?php
            require "footer.php";
        ?>
        
        <script src="vendor/jszip/jszip.js"></script>
        <script src="vendor/jszip/jszip-utils.js"></script>
        <script>
            /* Script written by Miguel Nunez @ minuvasoft10.com */
            function _(el) {
                return document.getElementById(el);
            }

            function uploadFile() {

                if (document.getElementById('nombreOA').value == '' || document.getElementById('descripcion').value ==
                    '' || document.getElementById('autorOA').value == '' ||
                    document.getElementById('institucionOA').value == '' || document.getElementById('palabraClaveOA').value ==
                    '' || document.getElementById('fechaCreacionOA').value == '') {

                    alert("Error uno o mas campos vacios");

                } else {

                    var file = _("file1").files[0];
                    //alert(file.name+" | "+file.size+" | "+file.type);
                    var formdata = new FormData();
                    formdata.append("file1", file);
                    formdata.append("nombreOA", _("nombreOA").value);
                    formdata.append("descripcion", _("descripcion").value);
                    formdata.append("autorOA", _("autorOA").value);
                    formdata.append("institucionOA", _("institucionOA").value);
                    formdata.append("palabraClaveOA", _("palabraClaveOA").value);
                    formdata.append("fechaCreacionOA", _("fechaCreacionOA").value);
                    var ajax = new XMLHttpRequest();
                    ajax.upload.addEventListener("progress", progressHandler, false);
                    ajax.addEventListener("load", completeHandler, false);
                    ajax.addEventListener("error", errorHandler, false);
                    ajax.addEventListener("abort", abortHandler, false);
                    ajax.open("POST", "upload.php");
                    ajax.send(formdata);
                    alert("Objeto de Aprendizaje guardado con exito!");
                    javascript: location.href = 'index.html';
                }


            }

            function progressHandler(event) {
                _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
                var percent = (event.loaded / event.total) * 100;
                _("progressBar").value = Math.round(percent);
                _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
            }

            function completeHandler(event) {
                _("status").innerHTML = event.target.responseText;
                _("progressBar").value = 0;
            }

            function errorHandler(event) {
                _("status").innerHTML = "Upload Failed";
            }

            function abortHandler(event) {
                _("status").innerHTML = "Upload Aborted";
            }
        </script>
        <script>
            document.getElementById('file1').addEventListener('change', unzipFile);

            function unzipFile(event) {
                var eTarget = event.target;
                var file = eTarget.files[0];

                JSZip.loadAsync(file) // 1) read the Blob
                    .then(function (zip) {
                        Object.keys(zip.files).forEach(function (filename) {
                            if (filename == "contentv3.xml") {
                                zip.files[filename].async('string').then(function (fileData) {
                                    console.log(fileData) // These are your file contents      
                                    parser = new DOMParser();
                                    xmlDoc = parser.parseFromString(fileData, "text/xml");
                                    dublincore = xmlDoc.children[0].children[0];
                                    for (i = 0; i < dublincore.children.length; i++) {
                                        if (dublincore.children[i].className ==
                                            "exe.engine.package.DublinCore") {
                                            dublincore = dublincore.children[i].children[0];
                                            break;
                                        }
                                    }
                                    debugger;
                                    autor = dublincore.children[5].attributes.value.nodeValue;
                                    fecha = dublincore.children[7].attributes.value.nodeValue;
                                    descripcion = dublincore.children[9].attributes.value.nodeValue;
                                    institucion = dublincore.children[17].attributes.value.nodeValue;
                                    palabrasclave = dublincore.children[25].attributes.value.nodeValue;
                                    titulo = dublincore.children[27].attributes.value.nodeValue;
                                    document.getElementById("nombreOA").value = titulo;
                                    document.getElementById("descripcion").value = descripcion;
                                    document.getElementById("autorOA").value = autor;
                                    document.getElementById("fechaCreacionOA").value = fecha;
                                    document.getElementById("palabraClaveOA").value = palabrasclave;
                                    document.getElementById("institucionOA").value = institucion;
                                })
                            }
                        })
                    });
            }
        </script>
    </div>
</body>

</html>