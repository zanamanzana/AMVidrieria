<?php 
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include ("conexion.php");
    $con = conectar();
    $codigo = $_GET['codigo'];

    $sentencia = "DELETE FROM medidas where id_medidas = $codigo;";
    $resultado = $con->query($sentencia);

    if ($resultado === TRUE) {
        header('Location: listadodemedidas.php?mensaje=eliminado');
    } else {
        header('Location: listadodemedidas.php?mensaje=error');
    }
    
?>