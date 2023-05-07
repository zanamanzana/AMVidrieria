<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'conexion.php';
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $ancho=$_POST["ancho"];
    $largo=$_POST["largo"];
    $color=$_POST["color"];
    $material=$_POST["material"];
    $ventana=$_POST["ventana"];

    $sentencia = $con->prepare("UPDATE persona SET nombre = ?, apellido = ?, telefono = ?, ancho = ?, largo = ?, color = ?, material = ?, ventana = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $apellido, $telefono, $ancho, $largo, $color, $material, $ventana]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>