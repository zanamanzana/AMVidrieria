<?php
    session_start();
    error_reporting(0);
    $sesion = $_SESSION["usuario"];
    if($sesion){
      $ruta = "cerrarsesion.php";
      $cerrar = "cerrar sesion";
      $adm = "<a href='paginadmin.php'>Panel Admin</a>";
    }else{
      $ruta = "login.php";
      $cerrar = "sesion admin";
    }
    ob_start();

    function error($num){
        // echo "<script>document.getElementById('error$num').style.display = 'block';</script>";
    }
?>

<?php 
  include 'template/header.php';
  include("conexion.php");
  $con = conectar();
  
?>
<?php
if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'agregado'){
?>
<center>
<div class="alert alert-success alert-dismissible fade show w-25" role="alert">
        <strong>Enviado!</strong> Las medidas fueron enviadas. Cualquier consulta puede revisar nuestro apartado de contactanos!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</center>
<?php 
    }
?>
<!-- 
<script>
		function valideKey(val){
            // var rt = "";
            // var filtro = "0123456789,.";
            // var cont = 0;
            // for(var i=0; i<val.length; i++){
            //     if(filtro.indexOf(val.charAt(i)) != -1){
            //         var aux = val.charAt(i);
            //         if(aux.replace(".",",")==","){
            //             cont++;
            //         }
            //         if(cont>1){
            //             rt += "";
            //         }else{
            //             rt += aux.replace(".",",");
            //         }
            //     }
            // }
            // var auxx = rt.replace(".",",");
            // return auxx;
            var code = (val.which) ? val.which : val.keyCode;
            if(code==8) {
                return true;
            } else if(code >= 48 && code <= 57){
                return true;
            } else{
                return false;
            }
        }
    
        function validelet(val){
            var code = (val.which) ? val.which : val.keyCode;
            console.log(code);
            if(code==8) {
                return true;
            }else if(code >= 97 && code <= 122){
                return true;
            }else if((code >= 97 && code <= 122) || (code >= 65 && code <= 90) || (code == 32 || code == 225 || code == 233 || code == 237 || code == 243 || code == 250 || code == 193 || code == 201 || code == 205 || code == 211 || code == 218)){
                return true;
            }else{
                return false;
            }

        }
    </script> -->
        <section>
            <center>
                <form method='post' class="formulario" id="formulario">
                    <br>
                    <div>
                    <h3>
                            Informacion de Contacto
                        </h3>
                            <br>
                            <div class="formulario__grupo" id="grupo__nombre">
                             <label for="nombre" class="formulario__label">Nombre</label>
                             <div class="formulario__grupo-input">
                                <input type="" class="formulario__input" id='nombre' name='nombre' maxlength="25" onkeypress="return validelet(event);" >
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error"> El nombre tiene que ser de 4 a 16 caracteres</p>
                            </div>   
                            <div class="formulario__grupo" id="grupo__apellido">
                             <label for="apellido" class="formulario__label">Apellido</label>
                             <div class="formulario__grupo-input">
                             <input type="" class="formulario__input" id='apellido' name='apellido' maxlength="25"  onkeypress="return validelet(event);">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error"> El apellido tiene que ser de 4 a 16 caracteres</p>
                            </div> 
                            <div class="formulario__grupo" id="grupo__telefono">
                             <label for="telefono" class="formulario__label">Telefono</label>
                             <div class="formulario__grupo-input">
                             <input class="formulario__input" id='telefono' name='telefono' onkeypress="return valideKey(event);">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error">El telefono tiene que ser de 8 a 9 digitos y sin letras</p>
                            </div>                            
                            <br>
                        <h3>
                            Medidas
                        </h3>
                        <label>
                            Nota: Las medidas tienen que ser en milimetros, NO en centimetros.
                        </label>
                        <br>
                        <br>
                        <div class="formulario__grupo" id="grupo__ancho">
                             <label for="ancho" class="formulario__label">Ancho</label>
                             <div class="formulario__grupo-input">
                                <input class="formulario__input" id='ancho' name='ancho' type="" onkeypress="return valideKey(event);">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error">El ancho tiene que ser entre 3 y 5 numeros</p>
                            </div> 
                       <h1>X</h1>
                       <div class="formulario__grupo" id="grupo__largo">
                             <label for="largo" class="formulario__label">Largo</label>
                             <div class="formulario__grupo-input">
                                <input class="formulario__input" id='largo' name='largo' type="" onkeypress="return valideKey(event);">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error">El largo tiene que ser entre 3 y 5 numeros</p>
                            </div>                               
                        </div>
                     </br>
                    <div>
                        <h3>
                            Color
                        </h3>
                        <br>
                        <select id='color' name='color'>
                            <option disabled selected value="">Seleccione un color</option>
                            <option value="titanio">Titanio</option>
                            <option value="madera">Madera</option>
                            <option value="mate">Mate</option>
                            <option value="blanco">Blanco</option>
                            <option value="negro">Negro</option>
                        </select>
                        <div>
                            <br>
                            <div>
                                <h3>
                                    Material
                                </h3>
                                <br>
                                <label>
                                  <input value='pvc' id='pvc' name='material' type="radio">PVC<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                  <input value='aluminio'  id='aluminio' name='material' type="radio">ALUMINIO</label><br></label><br>
                            </div>
                            </br>
                            <br>
                            <div>
                                <h3>
                                    Ventana
                                </h3>
                                <br>
                                <label>
                                  <input value='termopanel' id='termopanel' name='ventana' type="radio">TermoPanel<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                  <input value='vidrionormal' id='vidrionormal' name='ventana' type="radio">Vidrio normal
                                </label>
                                <br>
                            </div>
                            <br>
                                <div class="formulario__mensaje w-25" id="formulario__mensaje">
				                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellene el formulario correctamente. </p>
			                    </div>
                            </br>
                            <div>
                                <button id='enviar' name='enviar' type='submit'> Enviar </button>
                            </div>
                        </div>            
                </form>
            </center>
            <?php include 'template/footer.php'?>
        </section>

        <?php
        if(isset($_POST["enviar"])){
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $telefono=$_POST["telefono"];
            $ancho=$_POST["ancho"];
            $largo=$_POST["largo"];
            $color=$_POST["color"];
            $material=$_POST["material"];
            $ventana=$_POST["ventana"];

            if(empty($nombre)){
                error(1);
                exit;
            }
            if(empty($apellido)){
                error(2);
                exit;
            }
            if(empty($telefono)){
                error(3);
                exit;
            }
            if(empty($ancho)){
                error(4);
                exit;
            }
            if(empty($largo)){
                error(5);
                exit;
            }
            if(empty($color)){
                error(6);
                exit;
            }
            if(empty($material)){
                error(7);
                exit;
            }
            if(empty($ventana)){
                error(8);
                exit;
            }
            $insert = "INSERT INTO medidas (nombre, apellido, telefono, Ancho, Largo, Color, Material, Ventana) VALUES ('$nombre', '$apellido', $telefono, $ancho, $largo, '$color', '$material', '$ventana')";

            $resultado = $con->query($insert);

            if ($resultado === TRUE) {
                if(!$sesion){
                    header('Location: enviarmedidas.php?mensaje=agregado');                    
                }else{
                    header('Location: paginadmin.php?mensaje=agregado');
                }
            } else {
                if(!$sesion){
                    header('Location: enviarmedidas.php?mensaje=error');                    
                }else{
                    header('Location: paginadmin.php?mensaje=error');
                }
            }
        }
        ?>




        