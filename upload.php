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
if(move_uploaded_file($fileTmpLoc, "zip/$fileName")){
    echo "$fileName upload is complete";
    $conn = new mysqli('localhost', 'root', '', 'sistemaoa');
    $nombre = $_POST["nombreOA"];
    $autor = $_POST["autorOA"];
    $descripcion = $_POST["descripcion"];
    $p_clave = $_POST["palabraClaveOA"];
    $institucion = $_POST["institucionOA"];
    $fecha = $_POST["fechaCreacionOA"];
    $sql = "INSERT INTO objetoaprendizaje (ruta, nombre, autor, descripcion, fecha, p_clave, institucion, tamano, tipo, fecha_ing, ruta_zip)
    VALUES ('', '" . $nombre . "', '" . $autor . "', '" . $descripcion . "', '" . $fecha . "', '" . $p_clave . "', '" . $institucion . "', '" . $fileSize  . " Bytes', 'Zip', '" . date('Y-m-d') . "', '" . $fileName . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "move_uploaded_file function failed";
}
?>