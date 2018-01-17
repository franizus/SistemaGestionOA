<?php
    $filepath = 'zip/' . $_POST["zip_path"];
    $id = $_POST["id"];
    $name = basename($filepath,".zip");
    $zip = new ZipArchive;
    if ($zip->open($filepath) === TRUE) {
        $zip->extractTo("oa/$name");
        $zip->close();
        $conn = new mysqli('localhost', 'root', '', 'sistemaoa');
        $sql = "UPDATE objetoaprendizaje SET ruta = '" . "oa/$name/index.html" . "' WHERE id = " . $id;
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>