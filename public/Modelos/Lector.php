<?php
class Lector
{
    private $nombre;
    private $apellido;
    private $email;
    private $comentario;

    public function __construct($nombre, $apellido, $email, $comentario)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->comentario = $comentario;
    }

    // Getters
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getComentario(){
        return $this->comentario;
    }

    // Setters
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setComentario($comentario){
        $this->comentario = $comentario;
    }
}
?>