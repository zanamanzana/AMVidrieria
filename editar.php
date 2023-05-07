<?php include 'template/headeradmin.php'?>
<?php session_start();
    error_reporting(0);
    $sesion = $_SESSION["usuario"];
    if(!$sesion){
        echo "Usted no tiene permisos";
        echo "<br><a href='index.php'>volver</a>";
        die();        
    }
    ob_start();
?>

<?php
//error_reporting(0);
include "conexion.php";
$con = conectar();
$codigo = $_GET["codigo"];
$query = "SELECT * FROM medidas WHERE id_medidas = $codigo";
$r = mysqli_query($con, $query);
while($row = mysqli_fetch_array($r)){
$nombre = $row["Nombre"];
$apellido = $row["Apellido"];
$telefono = $row["Telefono"];
$ancho = $row["Ancho"];
$largo = $row["Largo"];
$color = $row["Color"];
$material = $row["Material"];
$ventana = $row["Ventana"];
}
?>
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
</script>
        <center>
            <form method='post' class="formulario" id="formulario">
                <h3>
                    Editar Datos
                </h3>
                <div class="formulario__grupo" id="grupo__nombre">
                             <label for="nombre" class="formulario__label">Nombre</label>
                             <div class="formulario__grupo-input">
                                <input value="<?php echo $nombre;?>" type="text" class="formulario__input" id='nombre' name='nombre' maxlength="25" onkeypress="return validelet(event);" >
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error"> El nombre tiene que ser de 4 a 16 caracteres</p>
                            </div>   
                            <div class="formulario__grupo" id="grupo__apellido">
                             <label for="apellido" class="formulario__label">Apellido</label>
                             <div class="formulario__grupo-input">
                             <input value="<?php echo $apellido;?>" type="text" class="formulario__input" id='apellido' name='apellido' maxlength="25"  onkeypress="return validelet(event);">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error"> El apellido tiene que ser de 4 a 16 caracteres</p>
                            </div> 
                            <div class="formulario__grupo" id="grupo__telefono">
                             <label for="telefono" class="formulario__label">Telefono</label>
                             <div class="formulario__grupo-input">
                             <input value="<?php echo $telefono;?>" class="formulario__input" id='telefono' name='telefono' onkeypress="return valideKey(event);">
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
                                <input value="<?php echo $ancho;?>" class="formulario__input" id='ancho' name='ancho' type="" onkeypress="return valideKey(event);">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error">El ancho tiene que ser entre 3 y 5 numeros</p>
                            </div> 
                       <h1>X</h1>
                       <div class="formulario__grupo" id="grupo__largo">
                             <label for="largo" class="formulario__label">Largo</label>
                             <div class="formulario__grupo-input">
                                <input value="<?php echo $largo;?>" class="formulario__input" id='largo' name='largo' type="" onkeypress="return valideKey(event);">
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                             </div>
                            <p class="formulario__input-error">El largo tiene que ser entre 3 y 5 numeros</p>
                            </div>                               
                        </div>
                    </br>
                    <center>
                    <div>
                        <h3>
                            Color
                        </h3>
                        <br>
                        <?php
                        if($color = "titanio"){
                            $s = "selected";
                        }elseif($color = "madera"){
                            $s = "selected";
                        }elseif($color = "mate"){
                            $s = "selected";
                        }elseif($color = "blanco"){
                            $s = "selected";
                        }elseif($color = "negro"){
                            $s = "selected";
                        }
                        ?>
                        <select id='color' name='color'>
                            <option <?php echo $s;?> value="titanio">Titanio</option>
                            <option <?php echo $s;?>value="madera">Madera</option>
                            <option <?php echo $s;?> value="mate">Mate</option>
                            <option <?php echo $s;?> value="blanco">Blanco</option>
                            <option <?php echo $s;?> value="negro">Negro</option>
                        </select>
                        <div>
                            <br>
                            <div>
                                <h3>
                                    Material
                                </h3>
                                <br>
                                <?php
                        if($material = "pvc"){
                            $ch = "checked";
                        }elseif($material = "aluminio"){
                            $ch = "checked";
                        }
                        ?>
                                
                                <label>
                                  <input <?php echo $ch;?> value='pvc' id='pvc' name='material' type="radio">PVC<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                  <input <?php echo $ch;?> value='aluminio' id='aluminio' name='material' type="radio">ALUMINIO</label><br></label><br>
                            </div>
                            </br>
                            <br>
                            <div>
                                <h3>
                                    Ventana
                                </h3>
                                <br>
                                <?php
                        if($ventana = "termopanel"){
                            $ch2 = "checked";
                        }elseif($material = "vidrionormal"){
                            $ch2 = "checked";
                        }
                        ?>
                                <label>
                                  <input <?php echo $ch2;?> value='termopanel' id='termopanel' name='ventana' type="radio">TermoPanel<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    
                                  <input <?php echo $ch2;?> value='vidrionormal' id='vidrionormal' name='ventana' type="radio">Vidrio normal</label><br></label><br>
                            </div>
                            </br>
                            <div>
                                <button id='enviar' name='enviar' type='submit'> Modificar </button>
                            </div>
                        </div>
                    </center>
                </form>
            </center>
            <?php include 'template/footer.php'?>
            <?php
            if(isset($_POST["enviar"])){echo 'hola';
                $nombre=$_POST["nombre"];
                $apellido=$_POST["apellido"];
                $telefono=$_POST["telefono"];
                $ancho=$_POST["ancho"];
                $largo=$_POST["largo"];
                $color=$_POST["color"];
                $material=$_POST["material"];
                $ventana=$_POST["ventana"];

                $up = "UPDATE medidas SET Nombre = '$nombre', Apellido = '$apellido', Telefono = $telefono, Ancho = $ancho, Largo = $largo, Color = '$color', Material = '$material', Ventana = '$ventana' WHERE id_medidas = $codigo";
                echo $up."aqui";
                $resultado = mysqli_query($con, $up);    
               // header("location: paginadmin.php");   
                if($resultado === TRUE) {
                    header('Location: listadodemedidas.php?mensaje=editado');
                }else{
                    header('Location: listadodemedidas.php?mensaje=error');
                }    
            }
            ?>



