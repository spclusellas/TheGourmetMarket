<?php
class Validador{

    public function validacionUsuario($usuario){

        $errores=array();
        $nombre = trim($usuario->getNombre());
        if(isset($nombre)) {
            if(empty($nombre)){
                $errores["nombre"]= "El campo 'nombre' se encuentra vacío";
            }
        }

        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="El correo electronico es inválido";
        }
        $password= trim($usuario->getPassword());

        $repassword = trim($usuario->getRepassword());


        if(empty($password)){
            $errores["password"]= "El campo contraseña no puede estar vacío";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(isset($repassword)){
            if ($password != $repassword) {
                $errores["repassword"]="Las contraseñas no coinciden";
            }
        }
        if($usuario->getAvatar()!=null){
            if($_FILES["avatar"]["error"]!=0){
                $errores["avatar"]="Debe subirse una imagen";
            }else{
                $nombre = $_FILES["avatar"]["name"];
                $ext = pathinfo($nombre,PATHINFO_EXTENSION);
                if($ext != "png" && $ext != "jpg"){
                    $errores["avatar"]="El tipo de archivo seleccionado no es una imagen";
                }
            }
        }

        return $errores;
    }
    //Metodo creado para validar el login del usuario
    public function validacionLogin($usuario){
        $errores=array();

        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="El correo electronico es invalido";
        }
        $password= trim($usuario->getPassword());

        if(empty($password)){
            $errores["password"]= "El campo contraseña no puede estar vacío";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }

        return $errores;
    }
    //Método para validar si el usuario desea recuperar su contraseña
    public function validacionOlvide($usuario){

        $errores=array();

        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="El correo electronico es invalido";
        }
        $password= trim($usuario->getPassword());

        $repassword = trim($usuario->getRepassword());


        if(empty($password)){
            $errores["password"]= "El campo contraseña no puede estar vacío";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(empty($repassword)){
            $errores["repassword"]= "El campo confirmar contraseña no puede estar vacío";
        }

        return $errores;
    }


}
