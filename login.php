<?php
    session_start();
    error_reporting(0);
    include("conexion.php");
    $con = conectar();

    function error($num){
      echo "<script>document.getElementById('error$num').style.display = 'block';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <center>
  <form method="POST">
      <div class="vid-container">
          <div class="box">
            <div class="alert alert-danger alert-dismissible fade w-25" role="alert">
                <strong>Error!</strong> Rellene todos los campos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                <h1>AM Vidreria y Aluminería</h1>
                <input name="admin" type="text" placeholder="Administrador" />
                <div class="alert alert-danger w-25" style="display: none;" id="error1" role="alert">
                  Correo Incorrecto! Rellene el campo
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                </div>
                <input name="contrasena" type="password" placeholder="Contraseña  " />
                <div class="alert alert-danger w-25" style="display: none;" id="error2" role="alert">
                  Clave Incorrecta! Rellene el campo
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                </div>
                <div class="alert alert-danger w-25" style="display: none;" id="error3" role="alert">
                  Datos Incorrectos! Intente nuevamente.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                </div>
               <center><button class="btn btn-outline-primary btn-lg" name="enviar" type="submit">Iniciar Sesion</button></center>
            </div>
        </div>
    </form>
  </center>
  <?php include 'template/footer.php'?>
    <?php
    if(isset($_POST['enviar'])){
      $admin = $_POST['admin'];
      $pass = $_POST['contrasena'];

      if(empty($admin)){
        error(1);
        exit;
      }
      if(empty($pass)){
        error(2);
        exit;
      }

      $q = "SELECT COUNT(*) AS cont FROM usuarios WHERE correo = '$admin//' AND clave = '$pass'";
      $r = mysqli_query($con,$q);

      $a = mysqli_fetch_array($r);
      if($a['cont']>0){
        $_SESSION['usuario'] = $admin;
        header('location:indexadmin.php');
      }else{
        error(3);
        exit;
      }
    }
    ?>


