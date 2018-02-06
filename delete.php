<?php
    require_once "pdo.php";
    session_start();

    $filename = $_POST["ruta_zip"];
    $name = basename($filename,".zip"); 
    $target = 'oa/' . $name . '/';

    if(is_dir($target)){
        $files = glob( $target . '*', GLOB_MARK );
            
        foreach( $files as $file )
        {
            unlink( $file );
        }
          
        rmdir( $target );
    }

    $dirZip = 'zip/' . $filename;
    unlink($dirZip);

    $sql = "DELETE FROM objetoaprendizaje WHERE idOA = :idOA";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':idOA' => $_POST["id"]));

    $sql = "DELETE FROM comentario WHERE idOA = :idOA";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':idOA' => $_POST["id"]));
    $_SESSION["oa"] = "Objeto de Aprendizaje eliminado del sistema correctamente.";
?>