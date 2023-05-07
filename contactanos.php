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
?>

<?php include 'template/header.php'?>

  <section class="ventana_section">
    <div class="container">
      <h2 class="custom_heading">Contactanos!</h2>
      <p class="custom_heading-text">
        Le daremos toda la informacion necesaria para poder contactarse con nosotros!
      </p>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="ventana_detail-box">
            <h3>
              Direccion
            </h3>
            <p class="mt-4 mb-5">
              AV. Jose miguel carrera N°338
            </p>
          </div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207.82085160852284!2d-70.58362225607297!3d-33.54990433031687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0db0db88859%3A0x646e8ce7455752df!2sJos%C3%A9%20Miguel%20Carrera%20338%2C%208300592%20La%20Florida%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1671008077414!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="ventana_detail-box">
            <h3>
              Numero de Telefono y celular
            </h3>
            <p class="mt-4 mb-5">
              9-63717098 / 228842532
            </p>
          </div>
        </div>
      </div>
      <div class="row layout_padding2-top layout_padding-bottom">
        <div class="col-md-8">
          <div class="ventana_detail-box">
            <h3>
              Correo Electronico
            </h3>
            <p class="mt-4 mb-5">
              patririquelmemoya@gmail.com
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'template/footer.php'?>

  