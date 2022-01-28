<?php

class articulo
{
    private $id_articulo;
    private $nombre;
    private $descripcion;
    private $img;


    function getId_articulo()
    {
        return $this->id_articulo;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getDescripcion()
    {
        return $this->descripcion;
    }

    function getImg()
    {
        return $this->img;
    }

    function setId_articulo($id_articulo)
    {
        $this->id_articulo = $id_articulo;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function setImg($img)
    {
        $this->img = $img;
    }
}
