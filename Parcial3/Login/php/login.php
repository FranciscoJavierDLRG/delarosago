<?php

$vLogin   = $_GET['parUsuario'];
$vPassword= $_GET['parPass'];

session_start();
$_SESSION['login']=$vLogin;

?>
