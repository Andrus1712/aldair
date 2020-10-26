<?php 
include("abrir_conexion.php");

$usu = $_POST['cedula'];
$pass = $_POST['contraseña'];
$num=0;
$consulta;

  $resultado = mysqli_query($conexion, "SELECT * FROM persona where cedula=".$usu." and pass='".$pass."'");
  $consulta = mysqli_fetch_array($resultado);
  $num = mysqli_num_rows($resultado);
    if($num>0)
    {
        if($consulta['privilegio']=="solicitante"){
            session_start();         
            $_SESSION['cedula']=$consulta['cedula'];
            $_SESSION['nombre']=$consulta['nombre'];
            header('Location: ../principal.php');
        }
        if($consulta['privilegio']=="administrador"){
            session_start();
            $_SESSION['cedula']=$consulta['cedula'];
            $_SESSION['nombre']=$consulta['nombre'];
            $_SESSION['cargo']=$consulta['cargo'];
            $_SESSION['dependencia']=$consulta['dependencia'];
            header('Location: ../PanelControl.php');
        }
    }else{
        echo 'Usuario No existe!';
        header('Location: ../index.php');
    }
  
include("cerrar_conexion.php");

?>