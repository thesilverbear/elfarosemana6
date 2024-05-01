<?php
class Usuario
{
    private $id;
    private $nombre;
    private $usuario;
    private $contrasena;
    private $correo;

    public function __construct($nombre, $usuario, $contrasena, $correo)
    {
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->correo = $correo;
    }

    // Getters
    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getContrasena(){
        return $this->contrasena;
    }

    public function getCorreo(){
        return $this->correo;
    }

    // Setters
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }
}
?>