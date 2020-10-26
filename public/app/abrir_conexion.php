<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'solicitudesbd';


$conexion = new mysqli($server, $username, $password, $database);

if($conexion->connect_errno){
	echo "ERROR AL CONECTAR";
	exit();
}

?>