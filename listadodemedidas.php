<?php
    session_start();
    error_reporting(0);
    $sesion = $_SESSION["usuario"];
    if(!$sesion){
        echo "Usted no tiene permisos";
        echo "<br><a href='index.php'>volver</a>";
        die();
    }
?>
<?php include 'template/headeradmin.php';
    include("conexion.php");
    $con = conectar();
?>

<?php
if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
?>
<center>
<div class="alert alert-danger alert-dismissible fade show w-25" role="alert">
        <strong>Eliminado!</strong> Los datos fueron borrados.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</center>
<?php 
    }
?>
<?php
if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
?>
<center>
<div class="alert alert-success alert-dismissible fade show w-25" role="alert">
        <strong>modificado!</strong> Los datos fueron modificados.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
</div>
</center>
<?php 
    }
?>
<?php
if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'agregado'){
?>
<center>
<div class="alert alert-success alert-dismissible fade show w-25" role="alert">
        <strong>agregado!</strong> Los datos fueron agregados.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</center>
<?php 
    }
?>
<?php
if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'actualizado'){
?>
<center>
<div class="alert alert-danger alert-dismissible fade show w-25" role="alert">
        <strong>actualizado!</strong> Los datos fueron actualizados.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</center>
<?php 
    }
?>
<center>
<h3>
    Lista de Clientes
</h3>
<table class="table table-striped table-hover w-50"> 
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Ancho</th>
                <th scope="col">Largo</th>
                <th scope="col">Color</th>
                <th scope="col">Material</th>
                <th scope="col">Ventana</th>
                <th scope="col" colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $sql = "SELECT * FROM medidas";

        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?=$row["id_medidas"]?></td>
            <td><?=$row["Nombre"]?></td>
            <td><?=$row["Apellido"]?></td>
            <td><?=$row["Telefono"]?></td>
            <td><?=$row["Ancho"]?></td>
            <td><?=$row["Largo"]?></td>
            <td><?=$row["Color"]?></td>
            <td><?=$row["Material"]?></td>
            <td><?=$row["Ventana"]?></td>
            <td><a class="text-success" href="editar.php?codigo=<?php echo $row["id_medidas"]?>"><i class="bi bi-pencil-square"></i></a></td>
            <td><a class="text-danger" href="eliminar.php?codigo=<?php echo $row["id_medidas"]?>"><i class="bi bi-trash"></i></td>
        </tr>
    <?php
            }
        }else{
            echo "0 results";
        }
    ?>
        </tbody>
    </table>
    <center>






