<?php
$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
$name = basename($fileName,".zip");
if(move_uploaded_file($fileTmpLoc, "oa/$fileName")){
    echo "$fileName upload is complete";
    $zip = new ZipArchive;
    if ($zip->open("oa/$fileName") === TRUE) {
        $zip->extractTo("oa/$name");
        $zip->close();
        echo 'ok';
        unlink("oa/$fileName");

        $conn = new mysqli('localhost', 'root', '', 'sistemaoa');
        $ruta = "oa/$name/index.html";
        $nombre = $_POST["nombreOA"];
        $autor = $_POST["autorOA"];
        $descripcion = $_POST["descripcion"];
        $p_clave = $_POST["palabraClaveOA"];
        $institucion = $_POST["institucionOA"];
        $fecha = $_POST["fechaCreacionOA"];
        $sql = "INSERT INTO objetoaprendizaje (ruta, nombre, autor, descripcion, fecha, p_clave, institucion)
        VALUES ('" . $ruta . "', '" . $nombre . "', '" . $autor . "', '" . $descripcion . "', '" . $fecha . "', '" . $p_clave . "', '" . $institucion . "')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo 'failed';
    }
} else {
    echo "move_uploaded_file function failed";
}
?>