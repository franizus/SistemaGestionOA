<?php
    require_once "pdo.php";
    session_start();

    $sql = "DELETE FROM objetoaprendizaje WHERE idOA = :idOA";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':idOA' => $_POST["id"]));
    $_SESSION["oa"] = "Objeto de Aprendizaje eliminado del sistema correctamente.";
?>