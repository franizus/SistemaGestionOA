<?php
    $id = $_POST["id"];
    $nombre = $_POST["nombreOA"];
    $autor = $_POST["autorOA"];
    $descripcion = $_POST["descripcion"];
    $p_clave = $_POST["palabraClaveOA"];
    $institucion = $_POST["institucionOA"];
    $fecha = $_POST["fechaCreacionOA"];
    $conn = new mysqli('localhost', 'root', '', 'sistemaoa');
    $sql = "UPDATE objetoaprendizaje SET nombre='" . $nombre . "', autor='" . $autor . 
    "', descripcion='" . $descripcion . "', p_clave='" . $p_clave . "', institucion='" . $institucion . 
    "', fecha='" . $fecha . "' WHERE id = " . $id;
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>