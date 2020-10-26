<?php
    include("abrir_conexion.php");

    $cedula = $_POST["cedula"];
    $tipo = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];

    $query = "INSERT INTO solicitud (cedula_persona,tipo,descripcion,fechasolicitud,estado) VALUES($cedula,'$tipo','$descripcion','$fecha','espera')";
    mysqli_query($conexion,$query);

    echo "<script>";
    echo "window.location = '../principal.php';";
    echo "</script>";

    include("cerrar_conexion.php");
?>