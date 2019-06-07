<?php
require_once("helpers.php");
require_once("controladores/funciones.php");

if ($_POST){
  $errores = validar($_POST);
  if (count($errores)== 0){
    $avatar = armarAvatar($_FILES);
    $usuario = armarUsuario($_POST,$avatar);
    guardarUsuario($usuario);
    header("location: signin.php");
    exit;
  }
}

 ?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/stylesheet.css">
  </head>

  <body>
    <?php include_once("encabezado.php") ?>
    <div class="container">
      <section class="registro">
        <article class="login text-center">
          <h2>Iniciar Sesión</h2>
          <form method="get" action="signin.php">
            <button class="button" style="vertical-align:middle"><span>Ya tengo una cuenta</span></button>
          </form>
        </article>
        <article class="register text-center">
          <h2>REGISTRARME</h2>
          <?php if (isset($errores)) :?>
            <ul>
              <?php foreach ($errores as $key => $value):?>
                <li><?=$value ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= isset($errores["email"])? "": persistir("email") ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="form-group col-md-6">
                <label for="repassword">Confirmar Password</label>
                <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>">
            </div>
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="<?= isset($errores["apellido"])? "": persistir("apellido") ?>">
            </div>
            <input  type="file" name="avatar" value=""/>
            <br>
            <button type="submit" class="btn btn-primary">Crear cuenta</button>
          </form>
        </article>
      </section>

      <!-- FOOTER -->
      <?php include_once("piedepagina.php") ?>

    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
