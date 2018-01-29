<?php
    require_once "pdo.php";
    session_start();

    $filepath = 'zip/' . $_POST["zip_path"];
    $name = basename($filepath,".zip");
    $zip = new ZipArchive;
    if ($zip->open($filepath) === TRUE) {
        $zip->extractTo("oa/$name");
        $zip->close();
        $sql = "UPDATE objetoaprendizaje SET 
                ruta = :ruta
                WHERE idOA = :idOA";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':ruta' => "oa/$name/index.html",
            ':idOA' => $_POST["id"]));
        $_SESSION["oa"] = "Objeto de Aprendizaje descomprimido correctamente.";
    }
?>