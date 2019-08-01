<?php  ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>THE GOURMET MARKET</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/stylesheet.css">
  </head>

  <body>


    <!-- ARRANCA EL HEADER -->
    <header class="bg-dark">
      <div class="row">

        <div class="contlogo col-12 col-lg-3 my-3">
          <a href="#">
            <img class="logoheader" src="images/logo_blanco.png" alt="logo_blanco">
          </a>
        </div>

        <div class="buscador col-7 col-md-4 col-lg-5 mr-2">
          <div class="page">
            <div class="page__demo">
              <label class="field a-field a-field_a1 page__field">
                <input class="field__input a-field__input" placeholder="Vinos, organicos..." required>
                <span class="a-field__label-wrap">
                  <span class="a-field__label">Buscador...</span>
                </span>
              </label>
              </div>
            </div>
        </div>

        <div class="barraiconos col-4 col-lg-3">
          <ul class="iconos">
            <li class="iconitos"><a href="signin.php"><i class="fas fa-user-alt fa-1x"></i></a></li>
            <li class="iconitos"><a href="#"><i class="fas fa-shopping-basket fa-1x"></i></a></li>
            <li class="iconitos"><a href="preguntasfrecuentes.php"><i class="fas fa-question fa-1x"></i></a></li>
          </ul>
        </div>

        <div class="barranav col-12">
          <nav class="navbar navbar-expand-md navbar-light navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="menudesp navbar-nav">
                <li class="nav-item active m-0">
                  <a class="nav-link" href="#">Novedades <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active m-0">
                  <a class="nav-link" href="#">Vinos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active m-0">
                  <a class="nav-link" href="#">Infusiones<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active m-0">
                  <a class="nav-link" href="#">Organicos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active m-0">
                  <a class="nav-link" href="#">Bebidas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active m-0">
                  <a class="nav-link" href="#">Sale <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        </header>
      <!-- TERMINA EL HEADER -->

    <div class="container-fluid">

      <!-- ARRANCA EL CAROUSEL -->
      <section class= "carouselhome">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carousel2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
          </a>
      </section>
      <!-- TERMINA EL CAROUSEL -->

      <!-- ARRANCA SEGUNDA SECCION -->
      <section class="seg-seccion-gnrl my-3 mx-auto">
        <div class="row m-0">
          <article class="seg-item sale col-5 col-lg-3 my-1 p-0 mx-auto">
            <a href="#">
            <img class="imgboton" src="images/bannersale.jpg" alt="Sale">
            </a>
          </article>
          <article class="seg-item novedades col-5 col-lg-3 my-1 p-0 mx-auto">
            <a href="#">
            <img class="imgboton" src="images/bannernov.jpg" alt="SALE">
            </a>
          </article>
          <article class="seg-item vendido col-5 col-lg-3 my-1 p-0 mx-auto">
            <a href="#">
            <img class="imgboton" src="images/bannervend.jpg" alt="masvendido">
            </a>
          </article>
          <article class="seg-item organico col-5 col-lg-3 my-1 p-0 mx-auto">
            <a href="#">
            <img class="imgboton" src="images/bannerorganico.jpg" alt="organicos">
            </a>
          </article>
        </div>
      </section>

      <!-- ARRANCA TERCERA SECCION -->

      <section class="sobrenosotros bg-dark my-3 p-4">
        <h2 class="text-light text-center mb-3 font-weight-bold">SOBRE NOSOTROS</h2>
        <i class="fas fa-utensils text-light d-block text-center mb-3"></i>
        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </section>

      <!-- ARRANCA CUARTA SECCION -->

      <section class="productosmasvendidos"> <!-- productos mas vendidos-->
          <h2 class="text-center mb-3 font-weight-bold">NUESTRA SELECCIÓN PARA VOS</h2>
          <i class="fas fa-cart-arrow-down d-block text-center mb-3 text-dark"></i>
          <div class="row">
            <article class="contendor-prod1 col-5 col-md-5 col-lg-3 d-flex flex-column justify-content-center">
              <img src="images/prod1.png" class="producto" alt="...">
              <h5 class="card-title">Vino</h5>
              <a class="bg-dark text-light p-2" href="#">Comprar</a>
            </article>
            <article class="contendor-prod2 col-5 col-md-5 col-lg-3 d-flex flex-column justify-content-center">
              <img src="images/queso.jpg" class="producto" alt="...">
              <h5 class="card-title">Queso de Oveja</h5>
              <a class="bg-dark text-light p-2" href="#">Comprar</a>
            </article>
            <article class="contendor-prod3 d-xs-none col-5 col-md-5 col-lg-3 d-md-flex flex-column justify-content-center">
              <img src="images/jugosorg.jpg" class="producto" alt="...">
              <h5 class="card-title">Jugos Organicos</h5>
              <a class="bg-dark text-light p-2" href="#">Comprar</a>
            </article>
            <article class="contendor-prod4 d-xs-none col-5 col-md-5 col-lg-3 d-md-flex flex-column justify-content-center">
              <img src="images/tomatesor.jpg" class="producto" alt="...">
              <h5 class="card-title">Tomates</h5>
              <a class="bg-dark text-light p-2" href="#">Comprar</a>
            </article>
        </div>
      </section>

      <footer>
        <div class="sobrenos">
          <h3 class="titfooter">Sobre Nosotros</h3>
          <ul>
            <li><a href="#">¿Quienes Somos?</a></li>
            <li><a href="#">Zonas de envío</a></li>
            <li><a href="#">Compras por mayor</a></li>
          </ul>
        </div>

        <div class="contacto">
          <h3 class="titfooter">Contacto</h3>
          <ul>
            <li><i class="fas fa-phone"></i> <a href="tel:+511134567890">¡Llamanos ahora!</a> </li>
            <li><i class="fas fa-envelope"></i> <a href="mailto:contacto@thegourmetmarket.com">Mandanos un mail</a></li>
            <li class="ubic"><i class="fas fa-map-marker-alt"></i> Belgrano, C.A.B.A., Argentina</li>
          </ul>
          <p class="newsletter">
            ¡Suscribite a nuestro Newsletter y recibí un 15% de descuento en tu próxima compra!
          </p>
        </div>

          <div class="redes">
            <h3 class="titfooter">¡Buscanos en las redes!</h3>
              <ul class="redesa">
                <li> <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                <li> <a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                <li> <a href="http://www.twitter.com"><i class="fab fa-twitter-square"></i></a></li>
              </ul>
              <a href="#">
              <img src="images/logo_blanco.png" alt="logo">
              </a>
           </div>
      </footer>


  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
