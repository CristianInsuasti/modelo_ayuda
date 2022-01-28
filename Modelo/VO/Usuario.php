<?php

class Usuario {

    private $id_usuario;
    private $nombre;
    private $email;
    private $clave;
    private $estado;
    private $id_usuario_actualizado;
    private $id_usuario_registrado;
    private $created_at;
    private $updated_at;

    
    function getId_usuario_actualizado() {
        return $this->id_usuario_actualizado;
    }

    function getId_usuario_registrado() {
        return $this->id_usuario_registrado;
    }

    function getCreated_at() {
        return $this->created_at;
    }

    function getUpdated_at() {
        return $this->updated_at;
    }
    
    function setId_usuario_actualizado($id_usuario_actualizado) {
        $this->id_usuario_actualizado = $id_usuario_actualizado;
    }

    function setId_usuario_registrado($id_usuario_registrado) {
        $this->id_usuario_registrado = $id_usuario_registrado;
    }

    function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }


    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEmail() {
        return $this->email;
    }

    function getClave() {
        return $this->clave;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}
