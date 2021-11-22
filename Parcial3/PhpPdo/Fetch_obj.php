<?php
include "conectar.php";

try {
    $consultaSql = "select id_usuario, contraseña from usuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_OBJ);

    // Siguiente registro como objeto anónimo (las columnas seran las propiedades)
    print "<h2><pre>fetch(PDO::FETCH_OBJ)</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>id_usuario  = </b> ".$resultado->id_usuario."<br>");
    printf("<b>contraseña  = </b> ".$resultado->contraseña."<br>");

    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>
