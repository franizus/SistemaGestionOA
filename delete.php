<?php
    $id = $_POST["id"];
    $conn = new mysqli('localhost', 'root', '', 'sistemaoa');
    $sql = "DELETE FROM objetoaprendizaje WHERE id = " . $id;
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>