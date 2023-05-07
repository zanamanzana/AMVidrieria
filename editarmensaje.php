<?php 
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include ("conexion.php");
    $con = conectar();
    $codigo = $_GET['codigo'];

    $sentencia = "UPDATE FROM medidas where id_medidas = $codigo;";
    $resultado = $con->query($sentencia);

    if ($resultado === TRUE) {
        header('Location: paginadmin.php?mensaje=modificado');
    } else {
        header('Location: paginadmin.php?mensaje=error');
    }
    
?>