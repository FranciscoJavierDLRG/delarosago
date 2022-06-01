<?php

$nombre=$_POST['par1'];
$apellido=$_POST['par2'];
$correo=$_POST['par3'];
$nac=$_POST['par4'];
$genero=$_POST['par5'];
$control=$_POST['par6'];
$cInst=$_POST['par7'];
$telefono=$_POST['par8'];
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
    $consultarSql = "update solicitud set nombre='$nombre', apellido='$apellido', correo='$correo', fecha='$nac', genero='$genero', id_usuario='$control', c_institucional='$cInst', num_telefono='$telefono'";
    $consulta = $con -> prepare($consultarSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $consulta->closeCursor();
    
}   catch(PDOException $e) {
    echo "Error de nuevo alumno";
    echo $e->getMessage();
}
echo json_encode($resultado);
mysql_close($con);
?>