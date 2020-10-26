<?php

include("abrir_conexion.php");

    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $cargo = $_POST["cargo"];
    $dependencia = $_POST["dependencia"];
    $telefono = $_POST["tel"];
    $correo = $_POST["email"];
    $pass = $_POST["pass"];

    $query = "INSERT INTO persona (cedula,nombre,cargo,dependencia,telefono,correo,pass,privilegio) VALUES($cedula,'$nombre','$cargo','$dependencia',$telefono,'$correo','$pass','solicitante')";
    mysqli_query($conexion,$query);

    echo "<script>";
    echo "window.location = '../index.php';";
    echo "</script>";

include ("cerrar_conexion.php");
?>