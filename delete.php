<?php
    require_once "pdo.php";

    function deleteOA($filename, $idOA) {
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
        $stmt->execute(array(':idOA' => $idOA));
    
        $sql = "DELETE FROM comentario WHERE idOA = :idOA";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':idOA' => $idOA));
    }