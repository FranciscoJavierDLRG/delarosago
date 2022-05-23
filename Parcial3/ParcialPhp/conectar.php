<?php

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
?>