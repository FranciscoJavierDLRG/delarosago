<?php
include "conectar.php";

try{
    $query=$con->prepare("select * from usuario");
    $query->execute();

    while ($row = $query->fetch()){
        echo $row['id_usuario'].'-'.
            $row['nombre'].'-'.
            $row['apellido'].'-'.
            $row['correo'].'<br>';
    }
    $query->closeCursor();
    
}   catch(PDOException $e) {
    echo "Error de consulta";
    echo $e->getMessage();
}
?>