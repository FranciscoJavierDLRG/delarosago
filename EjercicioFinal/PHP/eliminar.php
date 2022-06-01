<?php

$paridCte=$_POST['par1'];
$hostname='localhost';
$database='web18100165';
$username='root';
$password='';

try{
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
} catch(PDOException $e){
    echo "Error de conexión";
    echo $e->getMessage();
    exit();
}
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
try{
    $consultarSql = "delete from solicitud where id_usuario=".$paridCte;
    $consulta = $con -> prepare($consultarSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $consulta->closeCursor();
    
}   catch(PDOException $e) {
    echo "Error al eliminar";
    echo $e->getMessage();
}
echo json_encode($resultado);
?>