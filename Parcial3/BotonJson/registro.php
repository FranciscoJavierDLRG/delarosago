<?php
$registro['idCliente']='123';
$registro['nomCliente']='Francisco';
$registro['hora']='12:00:00';
$registro['dirCliente']='Virreyes 6736';
$registro['telCliente']='8671612074';
$registro['ciudad']='N Laredo';
$registro['estado']='Tamaulipas';
$registro['pais']='México';

$registroJson = json_encode($registro);
echo $registroJson;
?>