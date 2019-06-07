<?php
session_start();
require_once("helpers.php");

function validar($datos){

    $errores = [];

    if (isset($datos["email"])){
      $email = trim($datos["email"]);
      if (empty($email)){
        $errores["email"] = "El email no puede estar vacío";
      }
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores["email"]="El email no es válido";
      }
    }

    if(isset($datos["password"])){
      $password = trim($datos["password"]);
      if(empty($password)){
        $errores["password"] = "El password no puede estar vacio";
        }
      elseif(strlen($password)<6){
        $errores["password"]="El password debe tener mínimo 6 cacteres";
        }
    }

    if(isset($datos["repassword"])){
      $repassword = trim($datos["repassword"]);
      if(empty($repassword)){
        $errores["repassword"]= "El campo repassword no debe estar vacio";
        }
      if($password != $repassword){
        $errores["repassword"]= "Las contraseñas deben coincidir";
        }
     }

     if(isset($datos["nombre"])){
       $nombre = trim($datos["nombre"]);
       if(empty($nombre)){
          $errores["nombre"]="El campo nombre no puede estar vacio";
         }
     }

     if(isset($datos["apellido"])){
       $nombre = trim($datos["apellido"]);
       if(empty($nombre)){
          $errores["apellido"]="El campo apellido no puede estar vacio";
         }
     }
     if(isset($_FILES)){
       if($_FILES["avatar"]["error"]!=0){
          $errores["avatar"]="No se recibió ninguna imagen";
          }
       $avatar = $_FILES["avatar"]["name"];
       $ext = pathinfo($avatar,PATHINFO_EXTENSION);
       if($ext != "jpg" && $ext != "png"){
         $errores["avatar"] = "El tipo de archivo que intentas subir es incorrecto";
         }
     }



     return $errores;
}
function validarLogin($datos){

    $errores = [];

    if (isset($datos["email"])){
      $email = trim($datos["email"]);
      if (empty($email)){
        $errores["email"] = "El email no puede estar vacío";
      }
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores["email"]="El email no es válido";
      }
    }

    return $errores;
}

    if(isset($datos["password"])){
      $password = trim($datos["password"]);
      if(empty($password)){
        $errores["password"] = "El password no puede estar vacio";
        }
      elseif(strlen($password)<6){
        $errores["password"]="El password debe tener mínimo 6 cacteres";
        }
    }

function armarAvatar($imagen){
  $nombre = $imagen["avatar"]["name"];
  $ext = pathinfo($nombre,PATHINFO_EXTENSION);
  $archivoOrigen = $imagen["avatar"]["tmp_name"];
  $archivoDestino = dirname(__DIR__);
  $archivoDestino = $archivoDestino."/fotosDePerfil/";
  $avatar = uniqid();
  $archivoDestino = $archivoDestino.$avatar;
  $archivoDestino = $archivoDestino.".".$ext;
  move_uploaded_file($archivoOrigen,$archivoDestino);
  $avatar = $avatar.".".$ext;
  return $avatar;
}

function armarUsuario($datos,$avatar){
    $usuario = [
        "nombre"=>$datos["nombre"],
        "email"=>$datos["email"],
        "password"=>password_hash($datos["password"],PASSWORD_DEFAULT),
        "avatar"=>$avatar,
    ];
    return $usuario;
}

function guardarUsuario($usuario){
    $json = json_encode($usuario);
    file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
}

function buscarEmail($email){
    $usuarios = abrirBaseDatos();

    foreach ($usuarios as  $usuario) {
        if($email === $usuario["email"]){
            return $usuario;
        }
    }
    return null;
}

function buscarEmailDuplicado($email){
    $usuarios = abrirBaseDatos();

    foreach ($usuarios as  $usuario) {
        if($email === $usuario["email"]){
            return $usuario;
        }
    }
    return null;
}
function abrirBaseDatos(){
    $baseDatosJson= file_get_contents("usuarios.json");
    $baseDatosJson = explode(PHP_EOL,$baseDatosJson);
    array_pop($baseDatosJson);
    foreach ($baseDatosJson as  $usuarios) {
        $arrayUsuarios[]= json_decode($usuarios,true);
    }
    return $arrayUsuarios;
}
function seteoUsuario($user,$dato){
    $_SESSION["nombre"]=$user["nombre"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["avatar"]= $user["avatar"];
    if(isset($dato["recordar"]) ){
        setcookie("email",$dato["email"],time()+3600);
        setcookie("password",$dato["password"],time()+3600);

    }
}

function validarUsuario(){
    if($_SESSION["email"]){
        return true;
    }elseif ($_COOKIE["email"]) {
        $_SESSION["email"]=$_COOKIE["email"];
        return true;
    }else{
        return false;
    }

}
