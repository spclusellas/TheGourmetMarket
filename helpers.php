<?php
function dd($valor){
    echo "<pre>";
    var_dump($valor);
    echo "</pre>";
    exit;
}

function persistir($input){
    if(isset($_POST[$input])){
       return $_POST[$input];
    }
}
