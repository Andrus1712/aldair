<?php

include("abrir_conexion.php");

    $id = $_POST["id_solicitud"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $nombre = $_POST["nombre"];
    $tipo = $_POST["tipo"];
    $motivo = $_POST["motivo"];
    $fechapro = $_POST["fechapro"];

    $query = "INSERT INTO tramite (id_solicitud,fecha_recepcion,hora_recepcion,nombre_recepcionista,tipo_recepcion,motivo,fecha_prorroga) VALUES($id,'$fecha','$hora','$nombre','$tipo','$motivo','$fechapro')";
    mysqli_query($conexion,$query);
    $query2 = "UPDATE solicitud SET estado='atendida' WHERE id='$id'";
    mysqli_query($conexion,$query2);

    echo "<script>";
    echo "window.location = '../PanelControl.php';";
    echo "</script>";

include ("cerrar_conexion.php");
?>