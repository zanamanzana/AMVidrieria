<?php
    session_start();
    error_reporting(0);
    $sesion = $_SESSION["usuario"];
    // if($sesion){
    //   $ruta = "cerrarsesion.php";
    //   $cerrar = "cerrar sesion";
    //   $adm = "<a href='paginadmin.php'>Panel Admin</a>";
    // }else{
    //   $ruta = "login.php";
    //   $cerrar = "sesion admin";
    // }
    if(!$sesion){
      $ruta = "login.php";
      $cerrar = "Iniciar Sesión";
    }else{
      $ruta = "cerrarsesion.php";
      $cerrar = "Cerrar sesión";
    }
?>

<?php include 'template/header.php'?>

    <!-- slider  -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Bienvenido a <br />
                            AM Vidriería y Aluminería
                          </h1>
                          <p>
                            Somos una Mini empresa que se dedica a la realizacion de ventanas de todo tipo y del color que sea! nuestro objetivo es darle al cliente una calidad digna.
                          </p>
                          <div class="d-flex">
                            <a href="contactanos.php" class="text-uppercase custom_dark-btn">
                              Contactanos
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/slide-img.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <!-- end slider  -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading">¡Diferentes tipos de ventanas!</h2>
      <p class="custom_heading-text">
        aqui podras ver nuestros trabajos realizados en la mini empresa, a los clientes les damos las siguientes ventajas: 
      </p>
      <div class=" layout_padding2">
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Compromiso</h5>
              <p class="card-text">
                Estamos dispuesto a dar el mejor servicio y consultar algun problema que tenga el cliente con nosotros.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rapidos</h5>
              <p class="card-text">
                Ya llevamos muchos años en la empresa, nosotros le damos el trabajo lo mas rapido posible.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sinceros</h5>
              <p class="card-text">
                Aqui se realiza la cotizacion respecto al precio mercado con relacion a los productos o materiales que se tengan que comprar a la hora de realizar las ventanas cotizadas.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ventana_section">
    <div class="container">
      <h2 class="custom_heading">Trabajos Realizados</h2>
      <p class="custom_heading-text">
        Aqui veremos unos trabajos y proyectos realizados por la mini empresa, como tambien trabajos grandes para parcelas o terrenos.
      </p>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="ventana_detail-box">
            <h3>
              Shower the Door
            </h3>
            <p class="mt-4 mb-5">
              Aqui vemos un trabajo realizado a una cliente que nos pidio realizar un shower de color negro, con vidrios de 5mm. 
            </p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="ventana_img-box d-flex justify-content-center align-items-center">
            <img src="images/ventana.png" alt="" class="" width="300px" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="ventana_detail-box">
            <h3>
              Ventanas de Aluminio
            </h3>
            <p class="mt-4 mb-5">
              Aqui realizamos unas ventanas a una casa, en el cual se esta construyendo un 2do piso, realizamos 16 ventanas en total.
            </p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="ventana_img-box d-flex justify-content-center ">
            <img src="images/ventana1.png" alt="" class="" width="400px" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2-top layout_padding-bottom">
        <div class="col-md-8">
          <div class="ventana_detail-box">
            <h3>
              Puerta con mini corredera
            </h3>
            <p class="mt-4 mb-5">
              Aqui vemos un trabajo, en el cual un caballero nos pidio que hicieramos una entrada a su local para vender comida para perros, este fue el resultado.
            </p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="ventana_img-box d-flex justify-content-center align-items-center">
            <img src="images/ventana2.png" alt="" class="" width="250px" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2-top layout_padding-bottom">
        <div class="col-md-8">
          <div class="ventana_detail-box">
            <h3>
              Ventanas y Fijos
            </h3>
            <p class="mt-4 mb-5">
              Aqui vemos el trabajo realizado en una parcela en casas viejas, en el cual nos pidio ventanas y fijos con termo panel, ya que el dueno trabaja como organziador de eventos.
            </p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="ventana_img-box d-flex justify-content-center align-items-center">
            <img src="images/ventana3.png" alt="" class="" width="250px" />
          </div>
        </div>
      </div>
    </div>
  </section>

