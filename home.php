<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> THE MARKET
    </title>
    <link rel="stylesheet" href="css/stylesheet.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="container-fluid">

      <header class="fixed-top">
        <nav class="flex-container barra">
          <!-- <i class="fas fa-bars fa-1x"></i> -->
          <img class="logoheader mx-auto" src="images/logo.png" alt="The Market">
          <ul class="iconos">
          <li class="iconitos"><a href="home.html"> <i class="fas fa-home"></i></a><li>
          <li class="iconitos"><a href="signin.html"><i class="fas fa-user-alt fa-1x"></i></a><li>
          <li class="iconitos"><i class="fas fa-shopping-basket fa-1x"></i></li>
          <li class="iconitos"><a href="preguntasfrecuentes.html"><i class="fas fa-question fa-1x"></i></a></li>
        </ul>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Novedades <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Vinos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Infusiones <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Organicos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Bebidas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Sale <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" id="search">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="my-2 my-sm-0 btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </nav>
      </header>

      <div class="cuerpo">
        <section class= "CAROUSEL" <!-- CAROUSEL -->
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
      </div>

        <!-- Segunda Seccion -->
        <section class="seg-seccion-gnrl">

          <article class="seg-item sale">
            <a href="#">
            <img class="imgboton" src="images/bannersale.jpg" alt="Sale">
            </a>
          </article>
          <article class="seg-item novedades">
            <a href="#">
            <img class="imgboton" src="images/bannernov.jpg" alt="SALE">
            </a>
          </article>
          <article class="seg-item vendido">
            <a href="#">
            <img class="imgboton" src="images/bannervend.jpg" alt="masvendido">
            </a>
          </article>
          <article class="seg-item organico">
            <a href="#">
            <img class="imgboton" src="images/bannerorganico.jpg" alt="organicos">
            </a>
          </article>

        </section>

        <!-- Tercera Seccion -->

        <section class="productosmasvendidos"> <!-- productos mas vendidos-->
            <h2>Nuestra selección para vos</h2>
            <article class="contendor-prod1">
              <img src="images/prod1.png" class="producto" alt="...">
              <h5 class="card-title">Vino</h5>
              <a href="#">Comprar</a>
            </article>
            <article class="contendor-prod2">
              <img src="images/queso.jpg" class="producto" alt="...">
              <h5 class="card-title">Queso de Oveja</h5>
              <a href="#">Comprar</a>
            </article>
            <article class="contendor-prod3">
              <img src="images/jugosorg.jpg" class="producto" alt="...">
              <h5 class="card-title">Jugos Organicos</h5>
              <a href="#">Comprar</a>
            </article>
            <article class="contendor-prod4">
              <img src="images/tomatesor.jpg" class="producto" alt="...">
              <h5 class="card-title">Tomates</h5>
              <a href="#">Comprar</a>
            </article>

        </section>

        <!--Seccion Footer -->
        <section class="footer">

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
                <img src="images/logo.png" alt="logo">
                </a>
             </div>

          </div>

        </section>
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
