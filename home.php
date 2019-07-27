<?php  ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> THE GOURMET MARKET
    </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/stylesheet.css">
  </head>

  <body>
    <div class="container-fluid">

      <?php include_once("encabezado.php") ?>

      <div class="cuerpo">
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

      <?php include_once ("piedepagina.php") ?>
      
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
