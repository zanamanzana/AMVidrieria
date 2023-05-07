<?php
if(isset($_POST['enviar'])){
    if(empty($admin)){
        echo "<p class='error'>* Ingrese su correo </p>";
    }
    if(empty($pass)){
        echo "<p class='error'>* Ingrese su clave </p>";
    }
  }
?>