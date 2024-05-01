<?php
//clase para Articulos de noticias 
class Articulo
{
    private $titulo;
    private $cuerpo;
    private $multimedia; // Puede ser un enlace de imagen, video de YouTube o audio

    public function __construct($titulo, $cuerpo, $multimedia)
    {
        $this->titulo = $titulo;
        $this->cuerpo = $cuerpo;
        $this->multimedia = $multimedia;
    }

    // Getters
    public function getTitulo(){
        return $this->titulo;
    }

    public function getCuerpo(){
        return $this->cuerpo;
    }

    public function getMultimedia(){
        return $this->multimedia;
    }

    // Setters
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setCuerpo($cuerpo){
        $this->cuerpo = $cuerpo;
    }

    public function setMultimedia($multimedia){
        $this->multimedia = $multimedia;
    }
}
?>