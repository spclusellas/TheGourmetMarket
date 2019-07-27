<?php
class Producto{
    private $nombre;
    private $descripcion;
    private $precio;
    private $Categoria;
    private $stock;
    private $avatar;

    public function __construct($nombre,$precio,$Categoria,$stock,$descripcion=null, $avatar=null){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->repassword = $repassword;
        $this->avatar = $avatar;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
        return $this;
    }
    public function getCategoria()
    {
        return $this->Categoria;
    }
    public function setCategoria($Categoria)
    {
        $this->Categoria = $Categoria;
        return $this;
    }
    public function getStock()
    {
        return $this->stock;
    }
    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }
    public function getAvatar()
    {
        return $this->avatar;
    }
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }
}
?>
